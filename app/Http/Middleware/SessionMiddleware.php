<?php

namespace App\Http\Middleware;

use Closure;
use App\Empleado;
use App\Membresia;
use App\PagoMembresia;
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
        $pagoMembresia                =    PagoMembresia::where('id_empleado','=',Auth::user()->id)->count();
        if($pagoMembresia >= 1)
        {   $pagoMembresia            =    PagoMembresia::where('id_empleado','=',Auth::user()->id)->get()->last();
          $fecha =   date_format($pagoMembresia->created_at,'d H:i');
          if((date('d H:i') >=  '15 09:00') &&  ( $fecha < '15 09:00' ) ) 
          {
            $membresia                =    Membresia::where('id_empleado','=',Auth::user()->id)->first();
            $membresia->id_estatus    =    2;
            $membresia->save();

          }  
        }else{
            $membresia                =    Membresia::where('id_empleado','=',Auth::user()->id)->first();
            $membresia->id_estatus    =    2;
            $membresia->save();
             
        }
        
        if(Auth::guest())
        {
            return redirect('/');
            
        }

        return $next($request);
    }
}
