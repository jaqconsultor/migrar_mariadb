<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','name','created_at','updated_at','usercreated_at','userupdated_at','activo'];
 
}

