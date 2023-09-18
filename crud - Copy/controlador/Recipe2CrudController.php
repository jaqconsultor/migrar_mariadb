<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipe2;
use Session;
use DB;

class Recipe2CrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipe2::all();
        return view('crud/crudrecipe2/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipe2';
        return view('crud/crudrecipe2/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipe2::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codemedicina'=>$request->codemedicina,
        'indicaciones'=>$request->indicaciones,
        'cantidad'=>$request->cantidad,
        'descripcion'=>$request->descripcion,
        'orden'=>$request->orden,
        'fecha'=>$request->fecha,
        'recipe'=>$request->recipe,
        'comple'=>$request->comple,
        ]);
        return redirect('/Cruds/Recipe2/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipe2::where('id','=',$id)->first();
        return view('crud/crudrecipe2/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipe2::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codemedicina=$request->codemedicina;
        $grabar->indicaciones=$request->indicaciones;
        $grabar->cantidad=$request->cantidad;
        $grabar->descripcion=$request->descripcion;
        $grabar->orden=$request->orden;
        $grabar->fecha=$request->fecha;
        $grabar->recipe=$request->recipe;
        $grabar->comple=$request->comple;

        $grabar->save();

        return redirect('/Cruds/Recipe2/lista');
    }

    public function destroy($id)
    {
        Recipe2::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipe2/lista');
    }


 
}

