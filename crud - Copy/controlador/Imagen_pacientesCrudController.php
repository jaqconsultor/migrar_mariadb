<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Imagen_pacientes;
use Session;
use DB;

class Imagen_pacientesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Imagen_pacientes::all();
        return view('crud/crudimagen_pacientes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Imagen_pacientes';
        return view('crud/crudimagen_pacientes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Imagen_pacientes::create([
        'nrohistoria'=>$request->nrohistoria,
        'imagen'=>$request->imagen,
        ]);
        return redirect('/Cruds/Imagen_pacientes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Imagen_pacientes::where('id','=',$id)->first();
        return view('crud/crudimagen_pacientes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Imagen_pacientes::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->imagen=$request->imagen;

        $grabar->save();

        return redirect('/Cruds/Imagen_pacientes/lista');
    }

    public function destroy($id)
    {
        Imagen_pacientes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Imagen_pacientes/lista');
    }


 
}

