<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_detalle extends Model
{
    protected $table = 'recipe_detalle';
    protected $fillable = ['id','nrohistoria','nroconsulta','recipe','fe_emision','fe_vence','nota','created_at','updated_at'];
 
}

