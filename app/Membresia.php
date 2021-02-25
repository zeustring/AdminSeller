<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    protected  $table     =    "membresias";
    protected  $filable   =    ['id_empleado',
								'id_estatus'];

	public function empleado()
	{
		return $this->belongsTo('App\Empleado','id_empleado');
	}
	public function estatus()
	{
		return $this->belongsTo('App\Estatus','id_estatus');
	}

}
