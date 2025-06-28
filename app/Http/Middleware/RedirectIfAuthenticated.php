<?php

// app/Http/Middleware/RedirectIfAuthenticated.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                
                // Solo redirigir si están tratando de acceder a login o register
                if ($request->routeIs('login') || $request->routeIs('register')) {
                    if ($user->role === 'user') {
                        return redirect()->route('user.dashboard');
                    } elseif ($user->role === 'admin') {
                        return redirect()->route('admin.dashboard');
                    }
                }
                
                // Para otras rutas, dejar que continúe normalmente
                return $next($request);
            }
        }

        return $next($request);
    }
}