<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartaPredefinida extends Model
{
    protected $table   =   "carta_predefinida";
    protected $filable =   ['id_empleado',
							'id_carta',
							];  
}
