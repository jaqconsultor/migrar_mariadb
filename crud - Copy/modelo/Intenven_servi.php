<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intenven_servi extends Model
{
    protected $table = 'intenven_servi';
    protected $fillable = ['id','codigo','nombre','precio_principal','precio_auxiliar','created_at','updated_at'];
 
}

