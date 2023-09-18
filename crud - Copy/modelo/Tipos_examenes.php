<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_examenes extends Model
{
    protected $table = 'tipos_examenes';
    protected $fillable = ['id','codetipo','tipo','created_at','updated_at'];
 
}

