<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Palm_lista;
use Session;
use DB;

class Palm_listaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Palm_lista::all();
        return view('crud/crudpalm_lista/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Palm_lista';
        return view('crud/crudpalm_lista/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Palm_lista::create([
        'id_codigo'=>$request->id_codigo,
        'nombre_tabla'=>$request->nombre_tabla,
        'ordinal'=>$request->ordinal,
        ]);
        return redirect('/Cruds/Palm_lista/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Palm_lista::where('id','=',$id)->first();
        return view('crud/crudpalm_lista/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Palm_lista::Find($id);

        $grabar->id_codigo=$request->id_codigo;
        $grabar->nombre_tabla=$request->nombre_tabla;
        $grabar->ordinal=$request->ordinal;

        $grabar->save();

        return redirect('/Cruds/Palm_lista/lista');
    }

    public function destroy($id)
    {
        Palm_lista::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Palm_lista/lista');
    }


 
}

