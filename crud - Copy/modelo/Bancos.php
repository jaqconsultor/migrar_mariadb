<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bancos extends Model
{
    protected $table = 'bancos';
    protected $fillable = ['id','cod_banco','nombre_banco','created_at','updated_at'];
 
}

