<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Carta;
use App\Sucursal;
use App\Empleado;
use App\Cliente;
use App\Colonia;
use App\Ciudad;
use App\Canal;
USE App\Membresia;
use Auth;


class CartasController extends Controller
{
	public function index()
	{	

     $cartas          =    Carta::where('id_empleado',Auth::user()->id)
                                ->where('id_estatus','=','4')
                                ->orderby('id','desc')
                                ->get();
    $membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
		return view('Cartas.index',['cartas' => $cartas,
                                'membresia' => $membresia]);
	}

   public function Registro(Request $request)
   {
   		$carta                   =       new Carta;
   		$carta->id_cliente       =       $request['IdCliente'];
   		$carta->id_empleado      =       Auth::user()->id;
   		$carta->id_sucursal      =       Auth::user()->id_sucursal;
   		$carta->monto            =       $request['Monto'];
   		$carta->id_canal         =       2;
   		$carta->id_tipo_carta    =       Auth::user()->id_promotor_marca;
   		$carta->id_estatus       =       4;
   		$carta->save();

   		return redirect('Cartas');

   }
   public function Editar(Request $request)
   {
    $carta         =      Carta::find($request['IdCarta']);
    $carta->monto  =      $request['Monto'];
    $carta->save();
    return redirect('Cartas');
   }
   public function GenerarCartas(Request $request)
   {
   	 if($request['carta'] == null)
     {
      return redirect('Cartas');
     }
   	 $pdf = PDF::loadView('Cartas.carta',['carta' => $request['carta']]);
   	 $pdf->setPaper('lettle');
     return $pdf->download('invoice.pdf');
   }

   public function Eliminar($id)
   {
      $carta         =    Carta::find($id);
      $carta->delete();
      return redirect('Cartas');
   }
}
