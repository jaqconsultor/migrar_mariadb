<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formato_print extends Model
{
    protected $table = 'formato_print';
    protected $fillable = ['id','codigo','titulo','descripcion','tipo','created_at','updated_at'];
 
}

