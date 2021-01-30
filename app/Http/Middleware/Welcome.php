<?php

namespace App\Http\Middleware;

use Closure;
use App\Empleado;
use Illuminate\Support\Facades\Auth;
class Welcome
{
   public function handle($request, Closure $next)
    {   
        $UserCreate    =    Empleado::all()->count();
        if($UserCreate == 0)
        {
            return redirect('WelcomeCreate');
            
        }

        return $next($request);
    }
}