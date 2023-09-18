<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidads extends Model
{
    protected $table = 'especialidads';
    protected $fillable = ['id','name','created_at','updated_at'];
 
}

