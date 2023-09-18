<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Listado;
use Session;
use DB;

class ListadoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Listado::all();
        return view('crud/crudlistado/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Listado';
        return view('crud/crudlistado/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Listado::create([
        'tipo'=>$request->tipo,
        'descripcion_tipo'=>$request->descripcion_tipo,
        'segundo'=>$request->segundo,
        ]);
        return redirect('/Cruds/Listado/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Listado::where('id','=',$id)->first();
        return view('crud/crudlistado/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Listado::Find($id);

        $grabar->tipo=$request->tipo;
        $grabar->descripcion_tipo=$request->descripcion_tipo;
        $grabar->segundo=$request->segundo;

        $grabar->save();

        return redirect('/Cruds/Listado/lista');
    }

    public function destroy($id)
    {
        Listado::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Listado/lista');
    }


 
}

