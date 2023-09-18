<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Session;
use DB;

class CategoriaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Categoria::all();
        return view('crud/crudcategoria/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Categoria';
        return view('crud/crudcategoria/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Categoria::create([
        'codigo'=>$request->codigo,
        'categoria'=>$request->categoria,
        ]);
        return redirect('/Cruds/Categoria/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Categoria::where('id','=',$id)->first();
        return view('crud/crudcategoria/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Categoria::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->categoria=$request->categoria;

        $grabar->save();

        return redirect('/Cruds/Categoria/lista');
    }

    public function destroy($id)
    {
        Categoria::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Categoria/lista');
    }


 
}

