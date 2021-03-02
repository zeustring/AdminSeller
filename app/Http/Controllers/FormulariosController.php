<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Municipio;
use App\Colonia;
use App\Ciudad;
use App\Sucursal;
use App\Cliente;
use App\Jerarquia;
use App\Canal;
use App\Carta;
use App\CartaPredefinida;
use App\PagoMembresia;
use Auth;
use DB;
class FormulariosController extends Controller
{
    public function SucursalRegistro()
    {	$colonias      =    Colonia::all();
        $estados       =    Estado::all();
        $ciudades      =    Ciudad::all();
    	return view('Formularios.SucursalRegistro',['estados'  => $estados,
                                                  'ciudades' => $ciudades,
                                                  'colonias' => $colonias]);
    }

    public function Municipios($idEstado)
    {
    	$municipios   =    Municipio::where('id_estado','=',$idEstado)->get();
    	return view('Formularios.SelectMunicipio',['municipios'=>$municipios]);
    }
    public function Colonias($idMunicipio)
    {
    	$colonias   =    Colonia::where('id_municipio','=',$idMunicipio)->get();
    	return view('Formularios.SelectColonia',['colonias'=>$colonias]);
    }
    public function EstadosFormulario()
    {
        return view('Formularios.EstadosRegistro');
    }
    public function CiudadesFormulario()
    {
        $estados   =   Estado::all();
        return view('Formularios.CiudadesRegistro',['estados'=> $estados]);
    }

    public function ColoniasFormulario()
    {
        $estados   =   Estado::all();
        $ciudades  =   Ciudad::all();
        return view('Formularios.ColoniasRegistro',['estados'=> $estados,
                                                    'ciudades'=> $ciudades]);
    }

    public function EmpleadoRegistro()
    {
        $sucursales   =    Sucursal::all();
        $jerarquias   =    Jerarquia::all();
        $canal        =    Canal::all();
        return view('Formularios.EmpleadoRegistro',['sucursales'  => $sucursales,
                                                    'jerarquias'  => $jerarquias,
                                                    'canales'       => $canal]);
    }
    public function ClientesRegistro()
    {   $sucursal   =     Sucursal::where('id','=',Auth::user()->id_sucursal)->first();
        $ciudad     =     Ciudad::where('id','=',$sucursal->id_ciudad)->first();
        $colonia    =     Colonia::where('id_ciudad','=',$ciudad->id)
                                 ->orderBy('nombre','asc')
                                 ->get(); 
        return view('Formularios.ClientesRegistro',['ciudad'   => $ciudad,
                                                    'colonia'  => $colonia]);
    }

    public function OtraCiudad()
    {
        $sucursal     =     Sucursal::where('id','=',Auth::user()->id_sucursal)->first();
        $ciudades     =     Ciudad::where('id_estado','=',$sucursal->id_estado)
                                  ->orderBy('nombre','asc')
                                  ->get();
        return view('Formularios.OtraCiudad',['ciudades'   => $ciudades]);
    }
    public function OtrasColonias($idCiudad)
    {
        $colonias    =      Colonia::where('id_ciudad','=',$idCiudad)
                                   ->orderBy('nombre','asc')
                                   ->get();
        return view('Formularios.OtrasColonias',['colonias'   => $colonias]);
    }
    public function EditarCliente($id)
    {
        $cliente     =     Cliente::find($id);
        $sucursal    =     Sucursal::where('id','=',Auth::user()->id_sucursal)->first();
        $ciudad      =     Ciudad::where('id','=',$sucursal->id_ciudad)->first();
        $colonias    =     Colonia::where('id_ciudad','=',$ciudad->id)
                                 ->orderBy('nombre','asc')
                                 ->get();
        
        return view('Formularios.EditarClientes',['cliente'  => $cliente,
                                                  'colonias' => $colonias]);
    }

    public function SearchCliente()
    {
        return view('Formularios.SearchClientes');
    }
    public function SelectTipoBusqueda($busqueda)
    {   $sucursal   =     Sucursal::where('id','=',Auth::user()->id_sucursal)->first();
        $ciudad     =     Ciudad::where('id','=',$sucursal->id_ciudad)->first();
        $colonia    =     Colonia::where('id_ciudad','=',$ciudad->id)
                                 ->orderBy('nombre','asc')
                                 ->get();
        return view('Formularios.'.$busqueda,['ciudad'   => $ciudad,
                                              'colonia'  => $colonia]);
    }
    public function CartaCliente($id)
    {   $cliente        =    Cliente::find($id);
        $CartaPred      =    CartaPredefinida::where('id_empleado','=',Auth::user()->id)->first();   

        return view('Formularios.CartaForm',['cliente'   => $cliente,
                                             'CartaPred' => $CartaPred]);
    }
    public function EditarCarta($id)
    {  
        $carta     =      Carta::find($id);
        return view('Formularios.CartaFormEdit',['carta'   => $carta]);
    }

    public function PagoAzteca()
    {
        return view('Formularios.PagoAzteca');
    }
    public function ImgPago($id)
    {   $imagen       =     PagoMembresia::find($id)->img_pago;
        return view('Formularios.ImgPago',['imagen' => $imagen]);
    }
}
