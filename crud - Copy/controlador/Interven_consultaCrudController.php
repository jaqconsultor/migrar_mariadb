<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Interven_consulta;
use Session;
use DB;

class Interven_consultaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Interven_consulta::all();
        return view('crud/crudinterven_consulta/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Interven_consulta';
        return view('crud/crudinterven_consulta/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Interven_consulta::create([
        'historia'=>$request->historia,
        'consulta'=>$request->consulta,
        'codigo_inter'=>$request->codigo_inter,
        'detalle'=>$request->detalle,
        'descripcion'=>$request->descripcion,
        ]);
        return redirect('/Cruds/Interven_consulta/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Interven_consulta::where('id','=',$id)->first();
        return view('crud/crudinterven_consulta/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Interven_consulta::Find($id);

        $grabar->historia=$request->historia;
        $grabar->consulta=$request->consulta;
        $grabar->codigo_inter=$request->codigo_inter;
        $grabar->detalle=$request->detalle;
        $grabar->descripcion=$request->descripcion;

        $grabar->save();

        return redirect('/Cruds/Interven_consulta/lista');
    }

    public function destroy($id)
    {
        Interven_consulta::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Interven_consulta/lista');
    }


 
}

