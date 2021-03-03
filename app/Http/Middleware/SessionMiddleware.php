<?php

namespace App\Http\Middleware;

use Closure;
use App\Empleado;
use Illuminate\Support\Facades\Auth;
class SessionMiddleware
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
      
        if(Auth::guest())
        {
            return redirect('/');
            
        }

        return $next($request);
    }
}
