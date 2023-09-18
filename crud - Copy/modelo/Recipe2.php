<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe2 extends Model
{
    protected $table = 'recipe2';
    protected $fillable = ['id','nrohistoria','nroconsulta','codemedicina','indicaciones','cantidad','descripcion','orden','fecha','recipe','comple','created_at','updated_at'];
 
}

