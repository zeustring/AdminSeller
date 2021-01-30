<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $table      =  'empleados';
    protected $fillable   = ['no_empleado',
                             'nombre',
                             'apellido_pa',
                             'apellido_ma',
                             'password',
                             'email',
                             'tel',
                             'id_sucursal',
                             'id_estatus',
                             'id_jerarquia',
                             'id_canal'
                             ];

   


    protected $hidden = [
        'password', 'remember_token',
    ];
}
