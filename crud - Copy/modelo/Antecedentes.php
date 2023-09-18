<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{
    protected $table = 'antecedentes';
    protected $fillable = ['id','codantecedente','descripcion','codtipo','created_at','updated_at'];
 
}

