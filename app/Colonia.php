<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected  $table   =  "colonias";
    protected  $filable =  ['nombre',
							'id_ciudad',
						    'id_estado'];
}
