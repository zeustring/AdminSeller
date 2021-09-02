<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPendiente extends Model
{
    protected $table   =  'tipo_pendiente';
    protected $filable =  ['nombre']; 
}
