<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pprocedi extends Model
{
    protected $table = 'pprocedi';
    protected $fillable = ['id','nhisto','nconsul','procedi1','procedi2','procedi3','created_at','updated_at'];
 
}

