<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
    {

        if (in_array(Auth::user()->roles, $roles)) {
            return $next($request);
        }else{
            abort(404);
        }

        if (in_array('admin', $roles)) {
            return redirect()->route('admin.index');
        }

        
    }
}

