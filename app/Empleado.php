<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Authenticatable
{
    use Notifiable;
    public $timestamps    =  false;
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

   

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal','id_sucursal');
    }
    public function estatus()
    {
        return $this->belongsTo('App\Estatus','id_estatus');
    }
    public function jerarquia()
    {
        return $this->belongsTo('App\Jerarquia','id_jerarquia');
    }
    public function canal()
    {
        return $this->belongsTo('App\Canal','id_canal');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
