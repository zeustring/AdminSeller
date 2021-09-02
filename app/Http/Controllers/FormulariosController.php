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
use App\Empleado;
use App\PromotorMarca;
use App\TipoCarta;
use App\TipoPendiente;
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
    public function SucursalEditar($id)
    {   $colonias      =    Colonia::all();
        $estados       =    Estado::all();
        $ciudades      =    Ciudad::all();
        $sucursal      =    Sucursal::find($id);
        return view('Formularios.SucursalEditar',['estados'  => $estados,
                                                    'ciudades' => $ciudades,
                                                    'colonias' => $colonias,
                                                    'sucursal' => $sucursal]);
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
    public function EstadosRegistro()
    {
        return view('Formularios.Entidades.EstadosRegistro');
    }
    public function CiudadesFormulario()
    {
        $estados   =   Estado::all();
        return view('Formularios.Entidades.CiudadesRegistro',['estados'=> $estados]);
    }
        public function ColoniasRegistrar()
    {
        $estados   =   Estado::all();
        $ciudades  =   Ciudad::all();
        return view('Formularios.Entidades.ColoniasRegistro',['estados'  => $estados,
                                                  'ciudades' => $ciudades]);
    }

    public function ColoniasEditar($id)
    {
        $estados   =   Estado::all();
        $ciudades  =   Ciudad::all();
        $colonia   =   Colonia::find($id);
        return view('Formularios.Entidades.ColoniasEditar',['estados'  => $estados,
                                                  'ciudades' => $ciudades,
                                                  'colonia'  => $colonia]);
    }
    public function CiudadesEditar($id)
    {
        $estados   =   Estado::all();
        $ciudad   =   Ciudad::find($id);
        return view('Formularios.Entidades.CiudadesEditar',['estados'  => $estados,
                                                            'ciudad'   => $ciudad]);
    }
    public function EstadosEditar($id)
    {
          
        $estado   =    Estado::find($id);
        return view('Formularios.Entidades.EstadosEditar',['estado'  => $estado]);
    }
    public function EmpleadoRegistro()
    {
        $sucursales               =    Sucursal::all();
        $jerarquias               =    Jerarquia::all();
        $canal                    =    Canal::all();
        $promotorMarca            =    PromotorMarca::all();
        return view('Formularios.EmpleadoRegistro',['promotorMarca' => $promotorMarca,
                                                    'sucursales'    => $sucursales,
                                                    'jerarquias'    => $jerarquias,
                                                    'canales'       => $canal]);
    }
    public function EmpleadoEditar($id)
    {   $sucursales               =    Sucursal::all();
        $jerarquias               =    Jerarquia::all();
        $canales                  =    Canal::all();
        $empleado                 =    Empleado::find($id);
        $promotorMarca            =    PromotorMarca::all();
        return view('Formularios.EmpleadoEditar',['promotorMarca'         => $promotorMarca,
                                                  'empleado'              => $empleado,
                                                  'sucursales'            => $sucursales,
                                                  'jerarquias'            => $jerarquias,
                                                  'canales'               => $canales]);
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
    public function CambioTelefono()
    {
        return view('Formularios.Configuraciones.CambioTelefono');
    }
    public function CambioEmail()
    {
        return view('Formularios.Configuraciones.CambioEmail');
    }
    public function CambioNip()
    {
        return view('Formularios.Configuraciones.CambioNip');
    }
    public function CartaPredefinida()
    {   $CartaPredefinida        =      CartaPredefinida::where('id_empleado','=',Auth::user()->id);
        $TipoCarta               =      TipoCarta::where('id_canal','=',Auth::user()->id_canal)->get();
        return view('Formularios.Configuraciones.CartaPredefinida',
                                               ['CartaPredefinida' => $CartaPredefinida,
                                                'TipoCartas'       => $TipoCarta]);

    }

    public function PromotorMarcaRegistro()
    {
        $canales      =       Canal::orderBy('nombre','asc')->get();
        return view('Formularios.PromotorMarca.Registro',['canales' =>  $canales]);
    }


    public function PendienteCliente($id)
    {
        $PendienteCliente      =     Cliente::find($id);
        $TipoPendiente         =     TipoPendiente::all();
        return view('Formularios.Clientes.Pendiente',['cliente'       => $PendienteCliente,
                                                      'TipoPendiente' => $TipoPendiente]);     
    }


}
