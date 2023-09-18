<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ortopedia extends Model
{
    protected $table = 'ortopedia';
    protected $fillable = ['id','nrohistoria','nroconsulta','botas','zapatos','soporte','thomas','normal','tacon_int','tacon_ext','suela_int','suela_ext','borde_int_rect','borde_int_abdu','suela_normal','suela_antirres','aparatos','observacion','plantilla','aae','api','created_at','updated_at'];
 
}

