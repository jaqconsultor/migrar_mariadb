<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_ante extends Model
{
    protected $table = 'p_ante';
    protected $fillable = ['id','codante','codtipo','descrip','created_at','updated_at'];
 
}

