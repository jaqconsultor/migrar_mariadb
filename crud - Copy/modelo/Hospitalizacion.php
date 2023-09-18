<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{
    protected $table = 'hospitalizacion';
    protected $fillable = ['id','nrohistoria','nroconsulta','diagprev','indiprev','dieta','habitacion','hospital','created_at','updated_at'];
 
}

