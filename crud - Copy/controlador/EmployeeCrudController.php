<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Employee;
use Session;
use DB;

class EmployeeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Employee::all();
        return view('crud/crudemployee/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Employee';
        return view('crud/crudemployee/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Employee::create([
        'emp_id'=>$request->emp_id,
        'manager_id'=>$request->manager_id,
        'emp_fname'=>$request->emp_fname,
        'emp_lname'=>$request->emp_lname,
        'dept_id'=>$request->dept_id,
        'street'=>$request->street,
        'city'=>$request->city,
        'state'=>$request->state,
        'zip_code'=>$request->zip_code,
        'phone'=>$request->phone,
        'status'=>$request->status,
        'ss_number'=>$request->ss_number,
        'salary'=>$request->salary,
        'start_date'=>$request->start_date,
        'termination_date'=>$request->termination_date,
        'birth_date'=>$request->birth_date,
        'bene_health_ins'=>$request->bene_health_ins,
        'bene_life_ins'=>$request->bene_life_ins,
        'bene_day_care'=>$request->bene_day_care,
        'sex'=>$request->sex,
        ]);
        return redirect('/Cruds/Employee/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Employee::where('id','=',$id)->first();
        return view('crud/crudemployee/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Employee::Find($id);

        $grabar->emp_id=$request->emp_id;
        $grabar->manager_id=$request->manager_id;
        $grabar->emp_fname=$request->emp_fname;
        $grabar->emp_lname=$request->emp_lname;
        $grabar->dept_id=$request->dept_id;
        $grabar->street=$request->street;
        $grabar->city=$request->city;
        $grabar->state=$request->state;
        $grabar->zip_code=$request->zip_code;
        $grabar->phone=$request->phone;
        $grabar->status=$request->status;
        $grabar->ss_number=$request->ss_number;
        $grabar->salary=$request->salary;
        $grabar->start_date=$request->start_date;
        $grabar->termination_date=$request->termination_date;
        $grabar->birth_date=$request->birth_date;
        $grabar->bene_health_ins=$request->bene_health_ins;
        $grabar->bene_life_ins=$request->bene_life_ins;
        $grabar->bene_day_care=$request->bene_day_care;
        $grabar->sex=$request->sex;

        $grabar->save();

        return redirect('/Cruds/Employee/lista');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Employee/lista');
    }


 
}

