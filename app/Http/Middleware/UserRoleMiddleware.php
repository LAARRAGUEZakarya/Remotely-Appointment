<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check & verify with route, you will more understand
        if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        }

        return abort(401);
    }
}