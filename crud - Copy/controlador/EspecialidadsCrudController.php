<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Especialidads;
use Session;
use DB;

class EspecialidadsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Especialidads::all();
        return view('crud/crudespecialidads/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Especialidads';
        return view('crud/crudespecialidads/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Especialidads::create([
        'name'=>$request->name,
        ]);
        return redirect('/Cruds/Especialidads/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Especialidads::where('id','=',$id)->first();
        return view('crud/crudespecialidads/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Especialidads::Find($id);

        $grabar->name=$request->name;

        $grabar->save();

        return redirect('/Cruds/Especialidads/lista');
    }

    public function destroy($id)
    {
        Especialidads::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Especialidads/lista');
    }


 
}

