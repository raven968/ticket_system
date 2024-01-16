<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Closure;

class GuardSwitcher {

    public function handle($request, Closure $next, $newGuard = null) {
        if (in_array($newGuard, array_keys(config("auth.guards")))) {
            auth()->setDefaultDriver($newGuard);
        }

        return $next($request);
    }
}