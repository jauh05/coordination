<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEventAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $eventId = $request->route('event_id') ?? $request->session()->get('active_event_id');

        if (!$user || !$eventId) {
            return redirect()->route('dashboard')->with('error', 'Silakan pilih Event terlebih dahulu.');
        }

        $hasAccess = $user->events()->where('events.id', $eventId)->exists();

        if (!$hasAccess) {
            abort(403, 'Anda tidak memiliki akses ke Event ini.');
        }

        return $next($request);
    }
}
