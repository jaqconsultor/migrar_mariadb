<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $fillable = ['id','created_at','updated_at','usercreated_at','userupdated_at','title','name'];
 
}

