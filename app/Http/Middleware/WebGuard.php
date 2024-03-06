<?php

namespace App\Http\Middleware;
use Spatie\Permission\Middlewares\RoleMiddleware;
use Closure;
use Illuminate\Http\Request;

class WebGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
    // public function handle(Request $request, Closure $next)
    // {
    //     if ($request->is('admin/login')) {
    //         return $next($request);
    //     }

    //     if (Auth::check() && Auth::user()->user_type == 'Admin') {
    //         return $next($request);
    //     }
       
    //     return redirect()->route('admin/login');
    // }