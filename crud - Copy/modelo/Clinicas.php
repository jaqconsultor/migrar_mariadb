<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{
    protected $table = 'clinicas';
    protected $fillable = ['id','cod_clin','nom_clin','created_at','updated_at'];
 
}

