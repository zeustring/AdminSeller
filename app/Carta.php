<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $table    =  "cartas";
    protected $fiable   =  ['id_cliente',
							'id_empleado',
							'id_sucursal',
							'id_canal',
							'id_tipo_carta',
						    'id_estatus',
						    'monto'];
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
	public function canal()
	{
		return $this->belongsTo('App\Canal','id_canal');
	}
	public function tipoCarta()
	{
		return $this->belongsTo('App\TipoCarta','id_tipo_carta');
	}
	public function estatus()
	{
		return $this->belongsTo('App\Estatus','id_estatus');
	}
						   
}
