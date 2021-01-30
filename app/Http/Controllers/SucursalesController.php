<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;
use App\Empleado;
use App\Estado;
use App\Municipio;
use App\Localidad;
use App\Sucursal;		
use Auth;
use DB;


class SucursalesController extends Controller
{
    public function index()
    {
    	$sucursal     =    Sucursal::all();
    	return view('Sucursal.index',['sucursales' => $sucursal]);
    }
    public function registro(Request $request)
    {
    	$sucursal                =    new Sucursal;
    	$sucursal->no_sucursal   =	  $request['NoSucursal'];
    	$sucursal->nombre		 =    $request['NombreSucursal'];
    	$sucursal->calle 		 =    $request['Calle'];
    	$sucursal->referencias   =    $request['Referencias'];
    	$sucursal->no_exterior   =    $request['NoExterior'];
    	$sucursal->id_colonia    =    $request['IdColonia'];
    	$sucursal->id_ciudad     =    $request['IdCiudad'];
    	$sucursal->id_estado     =    $request['IdEstado'];
    	$sucursal->id_estatus    =    2;
    	$sucursal->save();

    	return redirect('Sucursales');
    }
}
