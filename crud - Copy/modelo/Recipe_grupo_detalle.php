<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_grupo_detalle extends Model
{
    protected $table = 'recipe_grupo_detalle';
    protected $fillable = ['id','codigo','codemedicina','descripcion','indicaciones','cantidad','orden','created_at','updated_at'];
 
}

