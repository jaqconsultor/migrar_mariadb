<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Dias_semana;
use Session;
use DB;

class Dias_semanaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Dias_semana::all();
        return view('crud/cruddias_semana/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Dias_semana';
        return view('crud/cruddias_semana/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Dias_semana::create([
        'fecha'=>$request->fecha,
        'dia_semana'=>$request->dia_semana,
        'semana'=>$request->semana,
        'ano'=>$request->ano,
        'descripcion'=>$request->descripcion,
        'tipo_dia'=>$request->tipo_dia,
        ]);
        return redirect('/Cruds/Dias_semana/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Dias_semana::where('id','=',$id)->first();
        return view('crud/cruddias_semana/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Dias_semana::Find($id);

        $grabar->fecha=$request->fecha;
        $grabar->dia_semana=$request->dia_semana;
        $grabar->semana=$request->semana;
        $grabar->ano=$request->ano;
        $grabar->descripcion=$request->descripcion;
        $grabar->tipo_dia=$request->tipo_dia;

        $grabar->save();

        return redirect('/Cruds/Dias_semana/lista');
    }

    public function destroy($id)
    {
        Dias_semana::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Dias_semana/lista');
    }


 
}

