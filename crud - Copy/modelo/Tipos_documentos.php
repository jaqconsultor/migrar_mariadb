<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_documentos extends Model
{
    protected $table = 'tipos_documentos';
    protected $fillable = ['id','tip_documento','des_documento','created_at','updated_at'];
 
}

