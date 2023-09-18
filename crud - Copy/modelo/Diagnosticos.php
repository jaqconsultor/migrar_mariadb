<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{
    protected $table = 'diagnosticos';
    protected $fillable = ['id','codediagnostico','descripcion','created_at','updated_at'];
 
}

