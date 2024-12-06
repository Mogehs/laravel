<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->is_admin ) {
            // Allow access to the route
            return $next($request);
        }

        // Redirect to a specific page or show error if not a super admin
        return redirect()->route('my.Home')->with('error', 'You do not have permission to access this page.');
    }
    
}
