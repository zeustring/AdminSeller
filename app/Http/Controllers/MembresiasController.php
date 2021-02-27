<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Membresia;
use Auth;
class MembresiasController extends Controller
{
    public function index()
    {	
    	$membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
    	return view('Membresias.index',['membresia' => $membresia]);
    }

    public function Pago()
    {
    	return view('Membresias.Pago');
    }
}
