<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'event_name' => ['nullable', 'string', 'max:255'],
            'event_budget' => ['nullable', 'string'],
            'event_start' => ['nullable', 'date'],
            'event_dday' => ['nullable', 'date'],
            'event_audience' => ['nullable', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->event_name) {
            $budgetRaw = $request->event_budget;
            $budget = $budgetRaw ? floatval(str_replace('.', '', $budgetRaw)) : null;

            $event = \App\Models\Event::create([
                'event_id_code' => 'EVT-' . strtoupper(substr(uniqid(), -6)),
                'event_token' => \Illuminate\Support\Str::random(32),
                'name' => $request->event_name,
                'estimated_budget' => $budget,
                'start_date' => $request->event_start,
                'd_day' => $request->event_dday,
                'target_audience' => intval(preg_replace('/\D/', '', $request->event_audience)),
            ]);

            $user->events()->attach($event->id, [
                'id' => (string) \Illuminate\Support\Str::uuid(),
                'role' => 'owner',
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
