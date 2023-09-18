<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palm_lista extends Model
{
    protected $table = 'palm_lista';
    protected $fillable = ['id','id_codigo','nombre_tabla','ordinal','created_at','updated_at'];
 
}

