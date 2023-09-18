<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Paciente_no_regi;
use Session;
use DB;

class Paciente_no_regiCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Paciente_no_regi::all();
        return view('crud/crudpaciente_no_regi/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Paciente_no_regi';
        return view('crud/crudpaciente_no_regi/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Paciente_no_regi::create([
        'registro'=>$request->registro,
        'apellidos'=>$request->apellidos,
        'nombres'=>$request->nombres,
        'celular'=>$request->celular,
        'motivo'=>$request->motivo,
        'fecha'=>$request->fecha,
        'medico'=>$request->medico,
        'registrado'=>$request->registrado,
        'hora'=>$request->hora,
        ]);
        return redirect('/Cruds/Paciente_no_regi/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Paciente_no_regi::where('id','=',$id)->first();
        return view('crud/crudpaciente_no_regi/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Paciente_no_regi::Find($id);

        $grabar->registro=$request->registro;
        $grabar->apellidos=$request->apellidos;
        $grabar->nombres=$request->nombres;
        $grabar->celular=$request->celular;
        $grabar->motivo=$request->motivo;
        $grabar->fecha=$request->fecha;
        $grabar->medico=$request->medico;
        $grabar->registrado=$request->registrado;
        $grabar->hora=$request->hora;

        $grabar->save();

        return redirect('/Cruds/Paciente_no_regi/lista');
    }

    public function destroy($id)
    {
        Paciente_no_regi::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Paciente_no_regi/lista');
    }


 
}

