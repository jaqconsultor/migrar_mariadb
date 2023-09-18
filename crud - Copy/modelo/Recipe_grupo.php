<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_grupo extends Model
{
    protected $table = 'recipe_grupo';
    protected $fillable = ['id','codigo','tratamiento','created_at','updated_at'];
 
}

