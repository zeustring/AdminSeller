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
}
