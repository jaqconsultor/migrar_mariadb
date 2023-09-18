<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_antecedente extends Model
{
    protected $table = 'tipo_antecedente';
    protected $fillable = ['id','codetipo','descripcion','tipoantecedente','created_at','updated_at'];
 
}

