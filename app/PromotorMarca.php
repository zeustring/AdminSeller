<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotorMarca extends Model
{
    protected  $table    =   "promotor_marca";
    protected  $filable  =    ['nombre',
                              'id_estatus'];
    public function estatus()
    {
        return $this->belongsTo('App\Estatus','id_estatus');
    }

}
