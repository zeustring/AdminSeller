<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCarta extends Model
{
    protected $table   =  "tipo_carta";
    protected $filable =  ['nombre',
						   'img_izq_sup',
						   'img_der_sup',
						   'img_fondo',
						   'texto',
						   'img_if_1',
						   'img_if_2',
						   'img_if_3',
						   'id_empleado',
						   'id_canal'
						   ];
						
}
