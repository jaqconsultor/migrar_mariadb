<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reg_empl_tipo_nomina extends Model
{
    protected $table = 'reg_empl_tipo_nomina';
    protected $fillable = ['id','tipo_nomina','nombre_nomina','created_at','updated_at'];
 
}

