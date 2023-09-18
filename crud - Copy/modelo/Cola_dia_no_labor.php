<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cola_dia_no_labor extends Model
{
    protected $table = 'cola_dia_no_labor';
    protected $fillable = ['id','dia','tipo','motivo','medico','created_at','updated_at'];
 
}

