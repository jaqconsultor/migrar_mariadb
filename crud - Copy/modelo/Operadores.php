<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{
    protected $table = 'operadores';
    protected $fillable = ['id','primera','segunda','nonbre','nivel','created_at','updated_at'];
 
}

