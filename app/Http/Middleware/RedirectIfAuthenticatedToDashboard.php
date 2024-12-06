<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedToDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // Check the user's role
            if ($user->is_admin) { // Assuming a 'is_admin' column in your users table
                return redirect('/myAdminDashboard'); // Replace with your admin dashboard route
            }

            return redirect('/myHome'); // Replace with your home page route
        }

        return $next($request);
    }
}
