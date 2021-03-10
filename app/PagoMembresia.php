<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoMembresia extends Model
{
    protected $table    =    "pagos_membresias";
    protected $filable  =    ['id_membresia',
							  'id_empleado',
							  'forma_pago',
							  'id_estatus',
							  'cantidad',
							  'img_pago',
							  'confirmed_at'];
	public function membresia()
	{
		return $this->belongsTo('App\Membresia','id_membresia');
	}
	public function empleado()
	{
		return $this->belongsTo('App\Empleado','id_empleado');
	}
	public function estatus()
	{
		return $this->belongsTo('App\Estatus','id_estatus');
	}

}
