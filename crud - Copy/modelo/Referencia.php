<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $table = 'referencia';
    protected $fillable = ['id','nrohistoria','nroconsulta','ceduladoctor','referencia','created_at','updated_at'];
 
}

