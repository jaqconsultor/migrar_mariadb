<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pdiagno extends Model
{
    protected $table = 'pdiagno';
    protected $fillable = ['id','nhisto','nconsul','codedia','created_at','updated_at'];
 
}

