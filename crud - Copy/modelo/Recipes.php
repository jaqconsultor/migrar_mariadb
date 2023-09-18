<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = 'recipes';
    protected $fillable = ['id','nrohistoria','nroconsulta','codemedicina','indicaciones','cantidad','orden','descripcion','fecha','recipe','comple','created_at','updated_at'];
 
}

