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
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(Auth::check()) {
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request);
            } else {
                return redirect()->route('landing.index')->with('error', 'Anda Tidak Memiliki Akses');
            }
        }else {
            return redirect()->route('login')->with('error', 'Silahkan Login Terlebih Dahulu');
        }

    }
}
