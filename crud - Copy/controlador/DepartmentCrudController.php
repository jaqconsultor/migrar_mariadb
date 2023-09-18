<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Department;
use Session;
use DB;

class DepartmentCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Department::all();
        return view('crud/cruddepartment/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Department';
        return view('crud/cruddepartment/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Department::create([
        'dept_id'=>$request->dept_id,
        'dept_name'=>$request->dept_name,
        'dept_head_id'=>$request->dept_head_id,
        ]);
        return redirect('/Cruds/Department/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Department::where('id','=',$id)->first();
        return view('crud/cruddepartment/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Department::Find($id);

        $grabar->dept_id=$request->dept_id;
        $grabar->dept_name=$request->dept_name;
        $grabar->dept_head_id=$request->dept_head_id;

        $grabar->save();

        return redirect('/Cruds/Department/lista');
    }

    public function destroy($id)
    {
        Department::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Department/lista');
    }


 
}

