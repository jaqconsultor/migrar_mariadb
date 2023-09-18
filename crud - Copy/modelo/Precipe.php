<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Precipe extends Model
{
    protected $table = 'precipe';
    protected $fillable = ['id','nhisto','nconsul','codmedi','indicacio','created_at','updated_at'];
 
}

