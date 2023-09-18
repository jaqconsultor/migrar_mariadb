<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'representante';
    protected $fillable = ['id','numhistoria','nombre','codeparentesco','direccion','created_at','updated_at'];
 
}

