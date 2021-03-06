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
        $empleados   =    Empleado::all();
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
        $empleado                 =  Empleado::all()->last();

        $membrecia                =  new Membresia;
        $membresia->id_empleado   =  $empleado->id;
        $membresia->id_estatus    =  2;
        $membresia->save();

        $CartaPre                 =  new CartaPredefinida;
        $CartaPre->id_empleado    =  $empleado->id; 
        $CartaPre->id_tipo_carta  =  1;
        $carta->save();
        
    	return redirect('Empleados');
    }


}
