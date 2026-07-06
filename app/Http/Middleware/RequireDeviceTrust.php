<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;

class RequireDeviceTrust
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        
        if (!$user) {
            return redirect()->route('login');
        }

        // Check if the current device has a valid trusted cookie
        $deviceToken = $request->cookie('trusted_device_token');
        $trustedTokens = $user->trusted_device_tokens ?? [];

        if (!$deviceToken || !in_array($deviceToken, $trustedTokens)) {
            // Need OTP Verification
            return redirect()->route('otp.verify'); // Route will be created later
        }

        return $next($request);
    }
}
