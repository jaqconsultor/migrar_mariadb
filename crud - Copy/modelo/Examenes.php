<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{
    protected $table = 'examenes';
    protected $fillable = ['id','codeexamen','examen','codetipo','created_at','updated_at'];
 
}

