<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Files;
use Session;
use DB;

class FilesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Files::all();
        return view('crud/crudfiles/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Files';
        return view('crud/crudfiles/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Files::create([
        'usercreated_at'=>$request->usercreated_at,
        'userupdated_at'=>$request->userupdated_at,
        'title'=>$request->title,
        'name'=>$request->name
        ]);
        return redirect('/Cruds/Files/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Files::where('id','=',$id)->first();
        return view('crud/crudfiles/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Files::Find($id);

        $grabar->usercreated_at=$request->usercreated_at;
        $grabar->userupdated_at=$request->userupdated_at;
        $grabar->title=$request->title;
        $grabar->name=$request->name;

        $grabar->save();

        return redirect('/Cruds/Files/lista');
    }

    public function destroy($id)
    {
        Files::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Files/lista');
    }


 
}

