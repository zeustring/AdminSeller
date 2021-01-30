<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginAppController extends Controller
{

    public function LoginApp()
    {
    	$credentials = $this->validate(request(),[
    		'no_empleado'     => 'required',
    		'password'        => 'required|string'
    	]);

    	if(Auth::attempt($credentials))
    	{
    		return redirect('dashboard');
    	}else{
    		return "Error en la autenticacion";
    	}

    }
    public function logoutApp()
    {
         //Desconctamos al usuario
        Auth::logout();

        //Redireccionamos al inicio de la app con un mensaje
        return redirect('proveedores')->withErrors([
                                             'mensaje' => 'Sesion Finalizada!',
                                             'alerta'  => 'success',
                                             'icon'    => 'fas fa-check-circle']); 
    }

}

