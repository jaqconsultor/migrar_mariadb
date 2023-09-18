<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_access_tokens extends Model
{
    protected $table = 'personal_access_tokens';
    protected $fillable = ['id','tokenable_type','tokenable_id','name','token','abilities','last_used_at','expires_at','created_at','updated_at'];
 
}

