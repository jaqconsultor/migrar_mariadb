<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Recipe_grupo;
use Session;
use DB;

class Recipe_grupoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Recipe_grupo::all();
        return view('crud/crudrecipe_grupo/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Recipe_grupo';
        return view('crud/crudrecipe_grupo/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Recipe_grupo::create([
        'codigo'=>$request->codigo,
        'tratamiento'=>$request->tratamiento,
        ]);
        return redirect('/Cruds/Recipe_grupo/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Recipe_grupo::where('id','=',$id)->first();
        return view('crud/crudrecipe_grupo/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Recipe_grupo::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->tratamiento=$request->tratamiento;

        $grabar->save();

        return redirect('/Cruds/Recipe_grupo/lista');
    }

    public function destroy($id)
    {
        Recipe_grupo::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Recipe_grupo/lista');
    }


 
}

