<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use DB;
class EmpleadosController extends Controller
{
    public function WelcomeCreate()
    {
        return view('welcome');
    }
    public function index()
    {
        $empleados   =     DB::table('empleados')
                             ->join('sucursales','sucursales.id','=','empleados.id_sucursal')
                             ->select('empleados.nombre as nombre',
                                      'empleados.no_empleado as no_empleado',
                                      'empleados.apellido_pa as apellido_pa',
                                      'empleados.apellido_ma as apellido_ma',
                                      'sucursales.no_sucursal as no_sucursal',
                                      'sucursales.nombre as sucursal')
                             ->orderBy('empleados.id','desc')
                             ->get();
        return view('Empleados.index',['empleados' => $empleados]);
    }
    public function registro(Request $request)
    {	
    	if($request['password'] == $request['repite_password'])
    	{
    	$empleado                 =  new Empleado;
    	$empleado->no_empleado    =  $request['NoEmpleado'];
    	$empleado->nombre         =  $request['NombreEmpleado'];
        $empleado->id_sucursal    =  $request['IdSucursal'];
    	$empleado->apellido_pa    =  $request['ApellidoPa'];
    	$empleado->apellido_ma    =  $request['ApellidoMa'];
        $empleado->tel            =  $request['Tel'];
        $empleado->email          =  $request['Email'];
    	$empleado->password       =  bcrypt($request['NoEmpleado']);
    	$empleado->id_jerarquia   =  $request['IdJerarquia'];
    	$empleado->id_estatus     =  2;
    	$empleado->id_canal       =  $request['IdCanal'];
    	$empleado->save();
    	}
    	return redirect('Empleados');
    }


}
