<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table = 'informe';
    protected $fillable = ['id','nrohistoria','nroconsulta','para','descripcion','fecha','created_at','updated_at'];
 
}

