<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pbcatfmt extends Model
{
    protected $table = 'pbcatfmt';
    protected $fillable = ['id','pbf_name','pbf_frmt','pbf_type','pbf_cntr','created_at','updated_at'];
 
}

