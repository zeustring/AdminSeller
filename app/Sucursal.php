<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table   =   "sucursales";
    protected $filable =   ['no_sucursal',
							'nombre',
							'calle',
							'referencias',
							'no_exterior',
							'id_colonia',
							'id_ciudad',
							'id_estado',
							'id_estatus'];
	public function colonia()
	{
		return $this->belongsTo('App\Colonia','id_colonia');
	}
	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad','id_ciudad');
	}
	public function estado()
	{
		return $this->belongsTo('App\Estado','id_estado');
	}
	public function estatus()
	{
		return $this->belongsTo('App\Estatus','id_estatus');
	}
}
