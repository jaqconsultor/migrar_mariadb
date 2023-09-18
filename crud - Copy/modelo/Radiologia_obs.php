<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologia_obs extends Model
{
    protected $table = 'radiologia_obs';
    protected $fillable = ['id','numhistoria','numconsulta','observacion','created_at','updated_at'];
 
}

