<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipe_grupo_detalle;
use Session;
use DB;

class Recipe_grupo_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipe_grupo_detalle::all();
        return view('crud/crudrecipe_grupo_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipe_grupo_detalle';
        return view('crud/crudrecipe_grupo_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipe_grupo_detalle::create([
        'codigo'=>$request->codigo,
        'codemedicina'=>$request->codemedicina,
        'descripcion'=>$request->descripcion,
        'indicaciones'=>$request->indicaciones,
        'cantidad'=>$request->cantidad,
        'orden'=>$request->orden,
        ]);
        return redirect('/Cruds/Recipe_grupo_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipe_grupo_detalle::where('id','=',$id)->first();
        return view('crud/crudrecipe_grupo_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipe_grupo_detalle::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->codemedicina=$request->codemedicina;
        $grabar->descripcion=$request->descripcion;
        $grabar->indicaciones=$request->indicaciones;
        $grabar->cantidad=$request->cantidad;
        $grabar->orden=$request->orden;

        $grabar->save();

        return redirect('/Cruds/Recipe_grupo_detalle/lista');
    }

    public function destroy($id)
    {
        Recipe_grupo_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipe_grupo_detalle/lista');
    }


 
}

