<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $table    =  "cartas";

	public function cliente()
	{
		return $this->belongsTo('App\Cliente');
	}
						   
}
