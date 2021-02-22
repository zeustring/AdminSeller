<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected  $table   =  "colonias";
    protected  $filable =  ['nombre',
							'id_ciudad',
						    'id_estado'];
	public function estado()
	{
		return $this->belongsTo('App\Estado','id_estado');
	}
	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad','id_ciudad');
	}
}
