<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartaPredefinida extends Model
{
    protected $table   =   "carta_predefinida";
    protected $filable =   ['id_empleado',
							'id_tipo_carta']; 
	public function empleado()
	{
		return $this->belongsTo('App\Empleado','id_empleado');
	}
	public function tipoCarta()
	{
		return $this->belongsTo('App\TipoCarta','id_tipo_carta');
	}
 
}
