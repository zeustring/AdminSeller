<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoMembresia extends Model
{
    protected $table    =    "pagos_membresias";
    protected $filable  =    ['id_membresia',
							  'id_empleado',
							  'forma_pago',
							  'id_estatus',
							  'cantidad',
							  'img_pago',
							  'confirmed_at'];

}
