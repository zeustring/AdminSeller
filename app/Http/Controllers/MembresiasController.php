<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Membresia;
use App\PagoMembresia;
use Auth;
class MembresiasController extends Controller
{
    public function index()
    {	
    	$pagoMembresia     =     PagoMembresia::where('id_empleado','=',Auth::user()->id)->get();
    	return view('Membresias.index',['pagoMembresia' => $pagoMembresia]);
    }

    public function FormasPago()
    {
    	return view('Membresias.FormasPago');
    }

    public function GuardarPago(Request $request)
    {
    	$membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
    	


    	$imagen                        = $request->file('Pago');
    	$nombre                        = Auth::user()->no_empleado.'-'.time().'.'.$imagen->getClientOriginalExtension();
    	$storage                       = public_path('imagen/pagos/');
    	$request->Pago->move($storage,$nombre);

    	$pagoMembresia                 =     new PagoMembresia;
    	$pagoMembresia->id_membresia   =     $membresia->id;
    	$pagoMembresia->id_empleado    =     Auth::user()->id;
    	$pagoMembresia->forma_pago     =     "Banco Azteca";
    	$pagoMembresia->id_estatus     =     4;
    	$pagoMembresia->cantidad       =     40;
    	$pagoMembresia->confirmed_at   =     null;
    	$pagoMembresia->img_pago       =     $nombre;
    	$pagoMembresia->save();

    	$membresia                     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
    	$membresia->id_estatus         =     1;
    	$membresia->save();

    	return redirect('Membresia');
    }
}
