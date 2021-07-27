<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Membresia;
use App\CartaPredefinida;
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
    public function Registro(Request $request)
    {	
    	if($request['password'] == $request['repite_password'])
    	{
    	$empleado                    =  new Empleado;
    	$empleado->no_empleado       =  $request['NoEmpleado'];
    	$empleado->nombre            =  $request['NombreEmpleado'];
        $empleado->id_sucursal       =  $request['IdSucursal'];
    	$empleado->apellido_pa       =  $request['ApellidoPa'];
    	$empleado->apellido_ma       =  $request['ApellidoMa'];
        $empleado->tel               =  $request['Tel'];
        $empleado->email             =  $request['Email'];
    	$empleado->password          =  bcrypt(substr($request['NoEmpleado'], -4)); 
    	$empleado->id_jerarquia      =  $request['IdJerarquia'];
        $empleado->id_promotor_marca =  $request['IdPromotorMarca'];
    	$empleado->id_estatus        =  2;
    	$empleado->id_canal          =  $request['IdCanal'];
    	$empleado->save();
    	}
        $empleado                 =  Empleado::all()->last();

        $membresia                =  new Membresia;
        $membresia->id_empleado   =  $empleado->id;
        $membresia->id_estatus    =  2;
        $membresia->save();

        $CartaPre                 =  new CartaPredefinida;
        $CartaPre->id_empleado    =  $empleado->id; 
        $CartaPre->id_tipo_carta  =  1;
        $CartaPre->save();
        
    	return redirect('Empleados');
    }

     public function Editar(Request $request)
    {   
        $empleado                    =  Empleado::find($request['IdEmpleado']);
        $empleado->no_empleado       =  $request['NoEmpleado'];
        $empleado->nombre            =  $request['NombreEmpleado'];
        $empleado->id_sucursal       =  $request['IdSucursal'];
        $empleado->apellido_pa       =  $request['ApellidoPa'];
        $empleado->apellido_ma       =  $request['ApellidoMa'];
        $empleado->tel               =  $request['Tel'];
        $empleado->email             =  $request['Email'];
        $empleado->id_jerarquia      =  $request['IdJerarquia'];
        $empleado->id_canal          =  $request['IdCanal'];
        $empleado->id_promotor_marca =  $request['IdPromotorMarca'];
        $empleado->save();
        
        return redirect('Empleados');
    }
}
