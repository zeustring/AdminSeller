<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table     =   "clientes";
    protected $filable   =   ['cu1',
							  'cu2',
							  'cu3',
							  'cu4',
							  'nombre',
							  'apellido_pa',
							  'apellido_ma',
							  'calle',
							  'no_ext',
							  'no_int',
							  'tel',
							  'email',
							  'id_colonia',
							  'id_ciudad',
							  'id_estado',
							  'id_estatus',
							  'id_empleado'];

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad','id_ciudad');
	}
	public function colonia()
	{
		return $this->belongsTo('App\Colonia','id_colonia');
	}
	public function estado()
	{
		return $this->belongsTo('App\Estado','id_estado');
	}
	public function estatus()
	{
		return $this->belongsTo('App\Estatus','id_estatus');
	}
	public function empleado()
	{
		return $this->belongsTo('App\Empleado','id_empleado');
	}

	public function cartas()
	{
		return $this->hasOne('App\Carta','id_cliente','id');
	}


}
