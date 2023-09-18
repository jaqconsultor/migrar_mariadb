<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe_obs extends Model
{
    protected $table = 'recipe_obs';
    protected $fillable = ['id','numhistoria','numconsulta','observacion','created_at','updated_at'];
 
}

