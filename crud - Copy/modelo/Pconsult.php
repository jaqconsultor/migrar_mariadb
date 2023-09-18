<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pconsult extends Model
{
    protected $table = 'pconsult';
    protected $fillable = ['id','nconsul','nhisto','enfactual','evolu','tratami','exa_fi','image','created_at','updated_at'];
 
}

