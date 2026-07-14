<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\EventUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrganizationController extends Controller
{
    public function index()
    {
        $event = Auth::check() ? Auth::user()->events()->first() : null;
        
        $divisions = [];
        if ($event) {
            $divisions = Division::where('event_id', $event->id)->with('members.user')->get();
        }

        return view('organization.index', compact('divisions', 'event'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division_name' => 'required|string|max:255',
            'head_name' => 'required|string|max:255',
            'head_email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $event = Auth::user()->events()->first();
        if (!$event) {
            return back()->withErrors(['error' => 'Anda tidak memiliki event aktif.']);
        }

        // Create the user
        $user = User::create([
            'name' => $request->head_name,
            'email' => $request->head_email,
            'password' => Hash::make($request->password),
        ]);

        // Create the division
        $division = Division::create([
            'event_id' => $event->id,
            'name' => $request->division_name,
        ]);

        // Generate officer ID e.g., ID-PRD-001
        $prefix = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $request->division_name), 0, 3));
        $officerId = 'ID-' . $prefix . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

        // Attach user to event and division
        EventUser::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'division_id' => $division->id,
            'role' => 'division_head',
            'officer_id' => $officerId,
        ]);

        return redirect()->route('organization')->with('success', 'Divisi dan Akun Ketua berhasil dibuat.');
    }
    public function storeMember(Request $request)
    {
        $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'member_name' => 'required|string|max:255',
            'member_email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $event = Auth::user()->events()->first();
        if (!$event) {
            return back()->withErrors(['error' => 'Anda tidak memiliki event aktif.']);
        }

        $division = Division::where('id', $request->division_id)->where('event_id', $event->id)->firstOrFail();

        // Create the user
        $user = User::create([
            'name' => $request->member_name,
            'email' => $request->member_email,
            'password' => Hash::make($request->password),
        ]);

        // Generate member ID e.g., ID-MBR-001
        $prefix = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $division->name), 0, 3));
        $memberId = 'MBR-' . $prefix . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

        // Attach user to event and division as member
        EventUser::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'division_id' => $division->id,
            'role' => 'member',
            'member_id' => $memberId,
        ]);

        return redirect()->route('organization')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function updateDivision(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $division = Division::findOrFail($id);
        $division->update(['name' => $request->name]);
        return back()->with('success', 'Divisi berhasil diperbarui.');
    }

    public function destroyDivision($id)
    {
        $division = Division::findOrFail($id);
        // Delete users in this division first? Not implemented yet for brevity, just delete event_users
        EventUser::where('division_id', $division->id)->delete();
        $division->delete();
        return back()->with('success', 'Divisi berhasil dihapus.');
    }

    public function destroyMember($id)
    {
        $eventUser = EventUser::where('id', $id)->firstOrFail();
        $eventUser->delete();
        return back()->with('success', 'Anggota berhasil dihapus dari divisi.');
    }
}
