<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventRoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();
        $eventId = $request->route('event_id') ?? $request->session()->get('active_event_id');

        if (!$user || !$eventId) {
            return redirect()->route('dashboard');
        }

        $eventUser = $user->eventUsers()->where('event_id', $eventId)->first();

        if (!$eventUser || !in_array($eventUser->role, $roles)) {
            abort(403, 'Anda tidak memiliki hak akses (Role) yang sesuai untuk aksi ini.');
        }

        return $next($request);
    }
}
