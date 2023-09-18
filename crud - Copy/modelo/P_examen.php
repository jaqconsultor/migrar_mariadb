<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_examen extends Model
{
    protected $table = 'p_examen';
    protected $fillable = ['id','codexa','codetip','examen','created_at','updated_at'];
 
}

