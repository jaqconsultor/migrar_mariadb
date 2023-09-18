<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Doctores;
use Session;
use DB;

class DoctoresCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Doctores::all();
        return view('crud/cruddoctores/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Doctores';
        return view('crud/cruddoctores/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Doctores::create([
        'cedula'=>$request->cedula,
        'apellidos'=>$request->apellidos,
        'nombres'=>$request->nombres,
        'clinica'=>$request->clinica,
        'direccion'=>$request->direccion,
        'telefono'=>$request->telefono,
        'ciudad'=>$request->ciudad,
        'nota'=>$request->nota,
        'codeespecial'=>$request->codeespecial,
        ]);
        return redirect('/Cruds/Doctores/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Doctores::where('id','=',$id)->first();
        return view('crud/cruddoctores/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Doctores::Find($id);

        $grabar->cedula=$request->cedula;
        $grabar->apellidos=$request->apellidos;
        $grabar->nombres=$request->nombres;
        $grabar->clinica=$request->clinica;
        $grabar->direccion=$request->direccion;
        $grabar->telefono=$request->telefono;
        $grabar->ciudad=$request->ciudad;
        $grabar->nota=$request->nota;
        $grabar->codeespecial=$request->codeespecial;

        $grabar->save();

        return redirect('/Cruds/Doctores/lista');
    }

    public function destroy($id)
    {
        Doctores::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Doctores/lista');
    }


 
}

