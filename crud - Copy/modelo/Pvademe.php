<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pvademe extends Model
{
    protected $table = 'pvademe';
    protected $fillable = ['id','codmedi','nombrege','nombreco','dosifi','uso','presenta','created_at','updated_at'];
 
}

