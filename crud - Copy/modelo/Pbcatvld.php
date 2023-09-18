<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatvld extends Model
{
    protected $table = 'pbcatvld';
    protected $fillable = ['id','pbv_name','pbv_vald','pbv_type','pbv_cntr','pbv_msg','created_at','updated_at'];
 
}

