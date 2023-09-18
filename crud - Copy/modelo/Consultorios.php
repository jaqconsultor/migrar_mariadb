<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorios extends Model
{
    protected $table = 'consultorios';
    protected $fillable = ['id','codigo','consultorio','created_at','updated_at'];
 
}

