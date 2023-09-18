<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['id','emp_id','manager_id','emp_fname','emp_lname','dept_id','street','city','state','zip_code','phone','status','ss_number','salary','start_date','termination_date','birth_date','bene_health_ins','bene_life_ins','bene_day_care','sex','created_at','updated_at'];
 
}

