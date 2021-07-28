<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Ciudad;
use App\Colonia;
class EntidadesController extends Controller
{
    public function Estados()
    {
    	$estados     =    Estado::all();
    	return view('Entidades.Estados',['estados' => $estados]);
    }

    public function EstadosRegistro(Request $request)
    {
    	$estado           =    new Estado;
    	$estado->nombre   =    $request['nombre'];
    	$estado->save();
    	return redirect('Entidades/Estados');
    }

    public function Ciudades()
    {
    	$ciudades     =    Ciudad::all();
    	
    	return view('Entidades.Ciudades',['ciudades' => $ciudades]);
    }

    public function CiudadesRegistro(Request $request)
    {
    	$ciudades            =    new Ciudad;
    	$ciudades->nombre    =    $request['Nombre'];
    	$ciudades->id_estado =    $request['IdEstado'];
    	$ciudades->save();
    	return redirect('Entidades/Ciudades');
    }

    public function Colonias()
    {
    	$colonias     =    Colonia::orderBy('nombre','asc')
                                     ->get();
    	
    	return view('Entidades.Colonias',['colonias' => $colonias]);
    }

    public function ColoniasRegistro(Request $request)
    {
    	$colonias            =    new Colonia;
    	$colonias->nombre    =    $request['Colonia'];
    	$colonias->id_ciudad =    $request['IdCiudad'];
    	$colonias->id_estado =    $request['IdEstado'];
    	$colonias->save();
    	return redirect('Entidades/Colonias');
    }
}
