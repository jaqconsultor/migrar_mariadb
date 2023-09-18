<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reg_empl_frec_nomina extends Model
{
    protected $table = 'reg_empl_frec_nomina';
    protected $fillable = ['id','frecuencia_nomina','nombre_frecuencia','created_at','updated_at'];
 
}

