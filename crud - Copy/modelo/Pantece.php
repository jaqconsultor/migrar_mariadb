<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pantece extends Model
{
    protected $table = 'pantece';
    protected $fillable = ['id','nhisto','codante','detalle','tipo','descrip','consul','created_at','updated_at'];
 
}

