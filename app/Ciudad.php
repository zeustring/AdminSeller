<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table    =  "ciudades";
    protected $filable  =  ['nombre',
                            'id_estado'];
	public function estado()
	{
		return $this->belongsTo('App\Estado','id_estado');
	}

}
