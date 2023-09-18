<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologias extends Model
{
    protected $table = 'radiologias';
    protected $fillable = ['id','coderadio','estudio','codetipo','opciones','tipo','created_at','updated_at'];
 
}

