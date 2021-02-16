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
						   
}
