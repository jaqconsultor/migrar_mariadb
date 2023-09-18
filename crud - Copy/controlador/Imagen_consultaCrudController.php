<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Imagen_consulta;
use Session;
use DB;

class Imagen_consultaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Imagen_consulta::all();
        return view('crud/crudimagen_consulta/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Imagen_consulta';
        return view('crud/crudimagen_consulta/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Imagen_consulta::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'observacion'=>$request->observacion,
        'imagen'=>$request->imagen,
        'orden'=>$request->orden,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Imagen_consulta/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Imagen_consulta::where('id','=',$id)->first();
        return view('crud/crudimagen_consulta/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Imagen_consulta::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->observacion=$request->observacion;
        $grabar->imagen=$request->imagen;
        $grabar->orden=$request->orden;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Imagen_consulta/lista');
    }

    public function destroy($id)
    {
        Imagen_consulta::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Imagen_consulta/lista');
    }


 
}

