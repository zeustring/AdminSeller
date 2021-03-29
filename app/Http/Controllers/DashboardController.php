<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Membresia;
use App\Carta;
use App\Cliente;
class DashboardController extends Controller
{
    public function index()
    {  
        $cartasCount            =        Carta::where('id_empleado','=',Auth::user()->id)->count();
        $clientesCount          =        Cliente::where('id_empleado','=',Auth::user()->id)->count();
    	return view('dashboard.index',['cartasCount'   => $cartasCount,
    								   'clientesCount' => $clientesCount]);
    }




}
