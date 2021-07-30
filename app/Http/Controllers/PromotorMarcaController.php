<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PromotorMarca;
use Auth;
class PromotorMarcaController extends Controller
{
    public function index()
    {   
        $PromotorMarca     =    PromotorMarca::orderBy('nombre','asc')->get();
        return view('PromotorMarca.index',['PromotorMarca' => $PromotorMarca]);
    }
    public function Registro(Request $request)
    {   
        $imagen1                        =     $request->file('ImagenFondoMarca');
        $nombre1                        =     $request['NombreMarca'].'-fondo.'.$imagen1->getClientOriginalExtension();
        $storage1                       =     public_path('imagen/marcas/fondos');
        $request->ImagenFondoMarca->move($storage1,$nombre1);

        $imagen2                        =     $request->file('ImagenIconoMarca');
        $nombre2                        =     $request['NombreMarca'].'-icono.'.$imagen2->getClientOriginalExtension();
        $storage2                       =     public_path('imagen/marcas/iconos');
        $request->ImagenIconoMarca->move($storage2,$nombre2);

        $marca              =       new PromotorMarca;
        $marca->nombre      =       $request['NombreMarca'];
        $marca->id_canal    =       $request['IdCanal'];
        $marca->img_fondo   =       'imagen/marcas/fondos/'.$nombre1;
        $marca->img_icono   =       'imagen/marcas/iconos/'.$nombre2;
        $marca->id_estatus  =       1;
        $marca->save();
        return redirect('PromotorMarca');
    }
}
