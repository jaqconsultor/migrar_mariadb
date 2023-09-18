<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Failed_jobs extends Model
{
    protected $table = 'failed_jobs';
    protected $fillable = ['id','uuid','connection','queue'];
 
}

