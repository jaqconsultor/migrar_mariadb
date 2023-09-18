<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cola extends Model
{
    protected $table = 'cola';
    protected $fillable = ['id','fecha','numhistoria','numorden','atendido','estado','turno','motivo','monto','hora_ini','hora_fin','tiempo','tipo','conse','sms','sms_text','medico','created_at','updated_at'];
 
}

