<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cliente;
use App\Sucursal;
use App\Estatus;
use App\TipoPendiente;
use App\Pendiente;

class PendientesController extends Controller
{   
    public function index()
    {   $pendientes    =    Pendiente::where('id_empleado','=',Auth::user()->id)->get();
        return view('Pendientes.index',['pendientes' => $pendientes]);
    }
    public function registro(Request $request)
    {
        $pendiente                      =      new Pendiente;
        $pendiente->id_cliente          =      $request['IdCliente'];
        $pendiente->id_empleado         =      Auth::user()->id;
        $pendiente->id_sucursal         =      Auth::user()->id_sucursal;
        $pendiente->id_tipo_pendiente   =      $request['IdTipoPendiente'];
        $pendiente->id_estatus          =      1;
        $pendiente->comentarios         =      $request['Comentarios'];
        $pendiente->pendiente_at        =      $request['FechaPendiente'];
        $pendiente->comentarios         =      $request['Comentarios'];
        $pendiente->save();

        $cliente                        =      Cliente::find($request['IdCliente']);
        $cliente->tel                   =      $request['Tel'];
        $cliente->email                 =      $request['Email'];
        $cliente->save();

        return redirect('MisClientes');
    }
}
