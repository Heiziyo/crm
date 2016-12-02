<?php

namespace App\Http\Middleware;

use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$admin = \App\Http\Middleware\Authenticate::getAuthUser();
        //$admin = \Illuminate\Auth\Middleware\Authenticate::
        //dd($admin);
        return $next($request);
    }
}
