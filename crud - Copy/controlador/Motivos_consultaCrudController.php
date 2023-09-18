<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motivos_consulta;
use Session;
use DB;

class Motivos_consultaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motivos_consulta::all();
        return view('crud/crudmotivos_consulta/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motivos_consulta';
        return view('crud/crudmotivos_consulta/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motivos_consulta::create([
        'codemotivo'=>$request->codemotivo,
        'descripcion'=>$request->descripcion,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Motivos_consulta/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motivos_consulta::where('id','=',$id)->first();
        return view('crud/crudmotivos_consulta/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motivos_consulta::Find($id);

        $grabar->codemotivo=$request->codemotivo;
        $grabar->descripcion=$request->descripcion;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Motivos_consulta/lista');
    }

    public function destroy($id)
    {
        Motivos_consulta::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motivos_consulta/lista');
    }


 
}

