<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motivo_cita;
use Session;
use DB;

class Motivo_citaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motivo_cita::all();
        return view('crud/crudmotivo_cita/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motivo_cita';
        return view('crud/crudmotivo_cita/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motivo_cita::create([
        'codigo'=>$request->codigo,
        'tipo_atencion'=>$request->tipo_atencion,
        ]);
        return redirect('/Cruds/Motivo_cita/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motivo_cita::where('id','=',$id)->first();
        return view('crud/crudmotivo_cita/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motivo_cita::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->tipo_atencion=$request->tipo_atencion;

        $grabar->save();

        return redirect('/Cruds/Motivo_cita/lista');
    }

    public function destroy($id)
    {
        Motivo_cita::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motivo_cita/lista');
    }


 
}

