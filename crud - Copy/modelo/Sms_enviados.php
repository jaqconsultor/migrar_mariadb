<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_enviados extends Model
{
    protected $table = 'sms_enviados';
    protected $fillable = ['id','conta','usuario','medico','proveedor','numero','mensaje','fecha','tipo','historia','consulta','created_at','updated_at'];
 
}

