<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_compra extends Model
{
    protected $table = 'sms_compra';
    protected $fillable = ['id','conse_compra','fecha_compra','monto_compra','cantidad_compra','created_at','updated_at'];
 
}

