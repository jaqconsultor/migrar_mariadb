<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipes;
use Session;
use DB;

class RecipesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipes::all();
        return view('crud/crudrecipes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipes';
        return view('crud/crudrecipes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipes::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codemedicina'=>$request->codemedicina,
        'indicaciones'=>$request->indicaciones,
        'cantidad'=>$request->cantidad,
        'orden'=>$request->orden,
        'descripcion'=>$request->descripcion,
        'fecha'=>$request->fecha,
        'recipe'=>$request->recipe,
        'comple'=>$request->comple,
        ]);
        return redirect('/Cruds/Recipes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipes::where('id','=',$id)->first();
        return view('crud/crudrecipes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipes::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codemedicina=$request->codemedicina;
        $grabar->indicaciones=$request->indicaciones;
        $grabar->cantidad=$request->cantidad;
        $grabar->orden=$request->orden;
        $grabar->descripcion=$request->descripcion;
        $grabar->fecha=$request->fecha;
        $grabar->recipe=$request->recipe;
        $grabar->comple=$request->comple;

        $grabar->save();

        return redirect('/Cruds/Recipes/lista');
    }

    public function destroy($id)
    {
        Recipes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipes/lista');
    }


 
}

