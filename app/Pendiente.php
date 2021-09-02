<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendiente extends Model
{
    protected $table    = "pendientes";
    protected $filable  = ['id_cliente',
                           'id_empleado',
                           'id_sucursal',
                           'id_tipo_pendiente',
                           'id_estatus',
                           'comentarios',
                           'pendiente_at'];

   public function cliente()
   {
        return $this->belongsTo('App\Cliente','id_cliente');
   }
   public function empleado()
   {
        return $this->belongsTo('App\Empleado','id_empleado');
   }
   public function sucursal()
   {
        return $this->belongsTo('App\Sucursal','id_sucursal');
   }
   public function tipo_pendiente()
   {
        return $this->belongsTo('App\TipoPendiente','id_tipo_pendiente');
   }
   public function estatus()
   {
        return $this->belongsTo('App\Estatus','id_estatus');
   }
}
