<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pcola extends Model
{
    protected $table = 'pcola';
    protected $fillable = ['id','atendido','conse','estado','fecha','hora_fin','hora_ini','medico','motivo','nhistoria','numorden','tipo','turno','fechac','created_at','updated_at'];
 
}

