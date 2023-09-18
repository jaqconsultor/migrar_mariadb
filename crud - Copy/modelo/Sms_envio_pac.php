<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_envio_pac extends Model
{
    protected $table = 'sms_envio_pac';
    protected $fillable = ['id','nrohistoria','nroconsulta','numero_cel','texto_sms','orden','created_at','updated_at'];
 
}

