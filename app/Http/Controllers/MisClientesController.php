<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Cliente;
use App\Membresia;
use Auth;
use DB;
class MisClientesController extends Controller
{
    public function index()
    {	$MisClientes     =    Cliente::where('clientes.id_empleado','=',Auth::user()->id)
                                     ->orderBy('id','desc')
                                     ->get();
        $membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
       
    	return view('MisClientes.index',['MisClientes' => $MisClientes,
                                         'membresia' => $membresia]);
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
    		dd("Cliente ya Existe intentalo de nuevo");
    	}else if($request['IdColonia'] == 0){
    	    dd("Olvidaste colocar una colonia intentalo de nuevo");
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
        $cliente->tel          =     $request['Tel'];
        $cliente->email        =     $request['Email'];
        $cliente->id_sucursal  =     Auth::user()->id_sucursal;
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
    		return '<b>'.$request['cu1']."-".$request['cu2']."-".$request['cu3']."-".$request['cu4']."</b> Este Cliente unico esta registrado a nombre de <b>".$Client->nombre." ".$Client->apellido_pa.' </b> <a href="Clientes/Search/'.$Client->id.'" class="btn btn-danger btn-xs" type="button"><i class="fa fa-eye"></i> Ver Cliente</a>';
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
        $cliente->tel          =     $request['Tel'];
        $cliente->email        =     $request['Email'];
    	$cliente->id_ciudad    =     $request['IdCiudad'];
    	$cliente->id_colonia   =     $request['IdColonia'];
    	$cliente->save();
    	return redirect('MisClientes');
    }
    public function Search(Request $request)
    {   

       if($request['TipoBusqueda'] == 1)
       {
       $SearchCliente  =  Cliente::where('clientes.cu1','=',$request['cu1'])
                                 ->where('clientes.cu2','=',$request['cu2'])
                                 ->where('clientes.cu3','=',$request['cu3'])
                                 ->where('clientes.cu4','=',$request['cu4'])
                                 ->get(); 
       }else if($request['TipoBusqueda'] == 2)
       {
       $SearchCliente  =  Cliente::where('clientes.nombre','like','%'.$request['Nombre'].'%')
                                 ->where('clientes.apellido_pa','like','%'.$request['ApellidoPa'].'%')
                                 ->where('clientes.apellido_ma','like','%'.$request['ApellidoMa'].'%')
                                 ->get(); 
       }else if($request['Calle'] == "")
       {
       $SearchCliente  =  Cliente::where('clientes.id_colonia','=',$request['IdColonia'])
                                ->where('clientes.id_ciudad','=',$request['IdCiudad'])
                                ->get();   
       }else if($request['TipoBusqueda'] == 3)
       {
       $SearchCliente  =  Cliente::where('clientes.id_colonia','=',$request['IdColonia'])
                                 ->where('clientes.id_ciudad','=',$request['IdCiudad'])
                                 ->Orwhere('clientes.calle','like','%'.$request['Calle'].'%')
                                 ->get(); 
       }

     $membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
     return view('MisClientes.Search',['SearchCliente' => $SearchCliente,
                                       'membresia' => $membresia]);
    }
    public function SearchGet($id)
    {
       $SearchCliente  =  Cliente::where('id','=',$id)->get();
        $membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
        return view('MisClientes.Search',['SearchCliente' => $SearchCliente,
                                          'membresia' => $membresia]);         
    }
}
