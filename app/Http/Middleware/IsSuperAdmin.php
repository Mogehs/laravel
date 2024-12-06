<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() && auth()->user()->admin && auth()->user()->admin->is_super_admin) {
            return $next($request); // Continue to the next request
        }

        // If not a Super Admin, redirect them to a different page (e.g., home)
        return redirect('/myAdminDashboard')->with('error', 'Access Denied');
    
    }
}
