<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $fillable = ['id','dept_id','dept_name','dept_head_id','created_at','updated_at'];
 
}

