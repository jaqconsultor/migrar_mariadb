<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vademecum extends Model
{
    protected $table = 'vademecum';
    protected $fillable = ['id','codemedicina','nombregenerico','nombrecomercial','dosificacion','uso','presentacion','concentracion','cada','durante','pvc','pvs','dosis','sico','nombrecomercial1','nombrecomercial2','nombrecomercial3','totalre','sicome','sicome1','sicome2','sicome3','created_at','updated_at'];
 
}

