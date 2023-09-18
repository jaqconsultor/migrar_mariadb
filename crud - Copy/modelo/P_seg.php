<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_seg extends Model
{
    protected $table = 'p_seg';
    protected $fillable = ['id','codeseg','nombre','created_at','updated_at'];
 
}

