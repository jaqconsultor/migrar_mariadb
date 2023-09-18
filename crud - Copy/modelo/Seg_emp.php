<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seg_emp extends Model
{
    protected $table = 'seg_emp';
    protected $fillable = ['id','codesegemp','nombre','created_at','updated_at'];
 
}

