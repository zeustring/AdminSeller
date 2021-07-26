<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CartaPredefinida;
use App\Empleado;
class ConfiguracionesController extends Controller
{
    public function index()
    {
    	return view('Configuraciones.index');
    }
    public function CambioTelefono(Request $request)
    {
    	$empleado         =     Empleado::find(Auth::user()->id);
    	$empleado->tel    =     $request['Tel'];
    	$empleado->save();
    	return redirect('Configuraciones');
    }
    public function CambioEmail(Request $request)
    {
    	$empleado           =     Empleado::find(Auth::user()->id);
    	$empleado->email    =     $request['Email'];
    	$empleado->save();
    	return redirect('Configuraciones');
    }
    public function CambioNip(Request $request)
    {	

    	if($request['NipNew'] == $request['NipRepite'])
    	{
    		$empleado              =     Empleado::find(Auth::user()->id);
    	    $empleado->password    =     bcrypt($request['NipNew']);
    	    $empleado->save();	
    	}
    	
    	return redirect('Configuraciones');
    }
    public function TipoCarta(Request $request)
    {
    	
    }
}
