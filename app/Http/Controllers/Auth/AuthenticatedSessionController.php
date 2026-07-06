<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request for Event Owner.
     */
    public function storeOwner(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Let CheckEventAccess or Dashboard controller handle if active_event_id is not set.
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Handle an incoming authentication request for Ketua Divisi.
     */
    public function storeKetua(Request $request): RedirectResponse
    {
        $request->validate([
            'officer_id' => ['required', 'string'],
            'event_token' => ['required', 'string'],
            'passphrase' => ['required', 'string'],
        ]);

        $event = Event::where('event_token', $request->event_token)->first();
        if (!$event) {
            throw ValidationException::withMessages(['event_token' => 'Event Token tidak valid.']);
        }

        $eventUser = EventUser::where('event_id', $event->id)
            ->where('officer_id', $request->officer_id)
            ->where('role', 'division_head')
            ->first();

        if (!$eventUser || !Hash::check($request->passphrase, $eventUser->user->password)) {
            throw ValidationException::withMessages(['officer_id' => 'Kredensial tidak valid.']);
        }

        Auth::login($eventUser->user);
        $request->session()->regenerate();
        $request->session()->put('active_event_id', $event->id);

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Handle an incoming authentication request for Anggota Divisi.
     */
    public function storeAnggota(Request $request): RedirectResponse
    {
        $request->validate([
            'member_id' => ['required', 'string'],
            'event_token' => ['required', 'string'],
            'passphrase' => ['required', 'string'],
        ]);

        $event = Event::where('event_token', $request->event_token)->first();
        if (!$event) {
            throw ValidationException::withMessages(['event_token' => 'Event Token tidak valid.']);
        }

        $eventUser = EventUser::where('event_id', $event->id)
            ->where('member_id', $request->member_id)
            ->where('role', 'member')
            ->first();

        if (!$eventUser || !Hash::check($request->passphrase, $eventUser->user->password)) {
            throw ValidationException::withMessages(['member_id' => 'Kredensial tidak valid.']);
        }

        Auth::login($eventUser->user);
        $request->session()->regenerate();
        $request->session()->put('active_event_id', $event->id);

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
