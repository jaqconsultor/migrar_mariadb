<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipe_obs;
use Session;
use DB;

class Recipe_obsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipe_obs::all();
        return view('crud/crudrecipe_obs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipe_obs';
        return view('crud/crudrecipe_obs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipe_obs::create([
        'numhistoria'=>$request->numhistoria,
        'numconsulta'=>$request->numconsulta,
        'observacion'=>$request->observacion,
        ]);
        return redirect('/Cruds/Recipe_obs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipe_obs::where('id','=',$id)->first();
        return view('crud/crudrecipe_obs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipe_obs::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->numconsulta=$request->numconsulta;
        $grabar->observacion=$request->observacion;

        $grabar->save();

        return redirect('/Cruds/Recipe_obs/lista');
    }

    public function destroy($id)
    {
        Recipe_obs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipe_obs/lista');
    }


 
}

