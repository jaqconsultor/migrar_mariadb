<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tipos_examenes;
use Session;
use DB;

class Tipos_examenesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Tipos_examenes::all();
        return view('crud/crudtipos_examenes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Tipos_examenes';
        return view('crud/crudtipos_examenes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Tipos_examenes::create([
        'codetipo'=>$request->codetipo,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Tipos_examenes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Tipos_examenes::where('id','=',$id)->first();
        return view('crud/crudtipos_examenes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Tipos_examenes::Find($id);

        $grabar->codetipo=$request->codetipo;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Tipos_examenes/lista');
    }

    public function destroy($id)
    {
        Tipos_examenes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Tipos_examenes/lista');
    }


 
}

