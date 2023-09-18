<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_diagno extends Model
{
    protected $table = 'p_diagno';
    protected $fillable = ['id','codiagn','descrip','created_at','updated_at'];
 
}

