<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppacient extends Model
{
    protected $table = 'ppacient';
    protected $fillable = ['id','cedula','apellidos','nombres','sexo','fnacimient','telefono','codesegemp','nhistoria','ultconsu','created_at','updated_at'];
 
}

