<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Canal;
class PromotorMarca extends Model
{
    protected  $table    =   "promotor_marca";
    protected  $filable  =    ['nombre',
                              'id_estatus',
                              'id_canal',
                              'img_fondo',
                              'img_icono'];
    public function estatus()
    {
        return $this->belongsTo('App\Estatus','id_estatus');
    }
    public function canal()
    {
        return $this->belongsTo('App\Canal','id_canal');
    }

}
