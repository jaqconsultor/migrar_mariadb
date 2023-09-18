<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especial extends Model
{
    protected $table = 'especial';
    protected $fillable = ['id','codeespecial','especialidad','created_at','updated_at'];
 
}

