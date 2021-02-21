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
use DB;
use Auth;


class CartasController extends Controller
{
	public function index()
	{	$cartas         =           DB::table('cartas')
									  ->where('cartas.id_empleado','=',Auth::user()->id)
									  ->where('cartas.id_estatus','=','4')
									  ->join('clientes','clientes.id','=','cartas.id_cliente')
									  ->join('colonias','colonias.id','=','clientes.id_colonia')
									  ->join('ciudades','ciudades.id','=','clientes.id_ciudad')
									  ->select('cartas.id as idCarta',
									  		   'cartas.monto as monto',
									  		   'cartas.id_tipo_carta as tipoCarta',
											   'clientes.*',
											   'colonias.nombre as colonia',
											   'ciudades.nombre as ciudad')
									  ->orderby('cartas.id','desc')
									  ->get();
		return view('Cartas.index',['cartas' => $cartas]);
	}

   public function Registro(Request $request)
   {
   		$carta                   =       new Carta;
   		$carta->id_cliente       =       $request['IdCliente'];
   		$carta->id_empleado      =       Auth::user()->id;
   		$carta->id_sucursal      =       Auth::user()->id_sucursal;
   		$carta->monto            =       $request['Monto'];
   		$carta->id_canal         =       2;
   		$carta->id_tipo_carta    =       1;
   		$carta->id_estatus       =       4;
   		$carta->save();

   		return redirect('Cartas');

   }

   public function GenerarCartas(Request $request)
   {
   	 
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
