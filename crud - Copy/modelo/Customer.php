<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['id','fname','lname','address','city','company_name','phone','telefono','state','zip','sms','email'];
 
}

