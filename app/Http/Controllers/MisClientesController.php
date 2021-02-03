<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Cliente;
use Auth;
use DB;
class MisClientesController extends Controller
{
    public function index()
    {	$MisClientes     =    DB::table('clientes')
    							->where('clientes.id_empleado','=',Auth::user()->id)
                                ->join('colonias','colonias.id','=','clientes.id_colonia')
                                ->join('ciudades','ciudades.id','=','clientes.id_ciudad')
                                ->join('estatus','estatus.id','=','clientes.id_estatus')
                                ->select('clientes.*', 
                                         'colonias.nombre as colonia',
                                         'ciudades.nombre as ciudad',
                                         'estatus.nombre as estatus')
                                ->orderBy('clientes.id','desc')
                                ->get();
    	return view('MisClientes.index',['MisClientes' => $MisClientes]);
    }

    public function Registro(Request $request)
    {	
    	$seacrhClient          =     Cliente::where('cu1','=',$request['cu1'])
    										->where('cu2','=',$request['cu2'])
    										->where('cu3','=',$request['cu3'])
    										->where('cu4','=',$request['cu4'])
    										->count();
    	if($seacrhClient == 1)
    	{
    		dd("Cliente ya Existe ");
    	}else{
    	

    	$TiendaEstado          =     Sucursal::find(Auth::user()->id_sucursal);
    	$cliente               =     new Cliente;
    	$cliente->cu1          =     $request['cu1'];
    	$cliente->cu2          =     $request['cu2'];
    	$cliente->cu3          =     $request['cu3'];
    	$cliente->cu4          =     $request['cu4'];
    	$cliente->nombre       =     $request['Nombre'];
    	$cliente->apellido_pa  =     $request['ApellidoPa'];
    	$cliente->apellido_ma  =     $request['ApellidoMa'];
    	$cliente->calle        =     $request['Calle'];
    	$cliente->no_ext       =     $request['NoExterno'];
    	$cliente->no_int       =     $request['NoInterno'];
    	$cliente->id_estado    =     $TiendaEstado->id_estado;
    	$cliente->id_ciudad    =     $request['IdCiudad'];
    	$cliente->id_colonia   =     $request['IdColonia'];
    	$cliente->id_estatus   =     1;
    	$cliente->id_empleado  =     Auth::user()->id;
    	$cliente->save();

    	}
    	return redirect("MisClientes");

    }

    public function ConfirmarRegistro(Request $request)
    {
    	$seacrhClient          =     Cliente::where('cu1','=',$request['cu1'])
    										->where('cu2','=',$request['cu2'])
    										->where('cu3','=',$request['cu3'])
    										->where('cu4','=',$request['cu4'])
    										->count();
    	if($seacrhClient == 1)
    	{	$Client          =     Cliente::where('cu1','=',$request['cu1'])
    										->where('cu2','=',$request['cu2'])
    										->where('cu3','=',$request['cu3'])
    										->where('cu4','=',$request['cu4'])
    										->first();
    		return '<b>'.$request['cu1']."-".$request['cu2']."-".$request['cu3']."-".$request['cu4']."</b> Este Cliente unico esta registrado a nombre de <b>".$Client->nombre." ".$Client->apellido_pa.' </b> <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-eye"></i> Ver Cliente</button>';
    	}else{
    		return 1;
    	}

    }
    public function Editar(Request $request)
    {

    	$cliente               =     Cliente::find($request['ID']);
    	$cliente->cu1          =     $request['cu1'];
    	$cliente->cu2          =     $request['cu2'];
    	$cliente->cu3          =     $request['cu3'];
    	$cliente->cu4          =     $request['cu4'];
    	$cliente->nombre       =     $request['Nombre'];
    	$cliente->apellido_pa  =     $request['ApellidoPa'];
    	$cliente->apellido_ma  =     $request['ApellidoMa'];
    	$cliente->calle        =     $request['Calle'];
    	$cliente->no_ext       =     $request['NoExterno'];
    	$cliente->no_int       =     $request['NoInterno'];
    	$cliente->id_ciudad    =     $request['IdCiudad'];
    	$cliente->id_colonia   =     $request['IdColonia'];
    	$cliente->save();
    	return redirect('MisClientes');
    }
}
