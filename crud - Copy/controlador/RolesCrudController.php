<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Roles;
use Session;
use DB;

class RolesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Roles::all();
        return view('crud/crudroles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Roles';
        return view('crud/crudroles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Roles::create([
        'name'=>$request->name,
        'usercreated_at'=>$request->usercreated_at,
        'userupdated_at'=>$request->userupdated_at,
        'activo'=>$request->activo
        ]);
        return redirect('/Cruds/Roles/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Roles::where('id','=',$id)->first();
        return view('crud/crudroles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Roles::Find($id);

        $grabar->name=$request->name;
        $grabar->usercreated_at=$request->usercreated_at;
        $grabar->userupdated_at=$request->userupdated_at;
        $grabar->activo=$request->activo;

        $grabar->save();

        return redirect('/Cruds/Roles/lista');
    }

    public function destroy($id)
    {
        Roles::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Roles/lista');
    }


 
}

