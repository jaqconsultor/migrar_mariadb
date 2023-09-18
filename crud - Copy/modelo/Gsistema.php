<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gsistema extends Model
{
    protected $table = 'gsistema';
    protected $fillable = ['id','id_medico','nomcorto','clave','ulthisto','created_at','updated_at'];
 
}

