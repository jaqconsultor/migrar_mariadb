<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sysopciones extends Model
{
    protected $table = 'sysopciones';
    protected $fillable = ['id','sistema_id','caso','contexto','modulo','menu','submenu','ordernum','ruta','icon','activo','title','imagen','created_at','updated_at','role'];
 
}

