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
							  'id_colonia',
							  'id_ciudad',
							  'id_estado',
							  'id_estatus',
							  'id_empleado'];
}
