<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipe_detalle;
use Session;
use DB;

class Recipe_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipe_detalle::all();
        return view('crud/crudrecipe_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipe_detalle';
        return view('crud/crudrecipe_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipe_detalle::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'recipe'=>$request->recipe,
        'fe_emision'=>$request->fe_emision,
        'fe_vence'=>$request->fe_vence,
        'nota'=>$request->nota,
        ]);
        return redirect('/Cruds/Recipe_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipe_detalle::where('id','=',$id)->first();
        return view('crud/crudrecipe_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipe_detalle::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->recipe=$request->recipe;
        $grabar->fe_emision=$request->fe_emision;
        $grabar->fe_vence=$request->fe_vence;
        $grabar->nota=$request->nota;

        $grabar->save();

        return redirect('/Cruds/Recipe_detalle/lista');
    }

    public function destroy($id)
    {
        Recipe_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipe_detalle/lista');
    }


 
}

