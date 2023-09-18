<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motivo_consulta_paciente;
use Session;
use DB;

class Motivo_consulta_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motivo_consulta_paciente::all();
        return view('crud/crudmotivo_consulta_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motivo_consulta_paciente';
        return view('crud/crudmotivo_consulta_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motivo_consulta_paciente::create([
        'codemotivo'=>$request->codemotivo,
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        ]);
        return redirect('/Cruds/Motivo_consulta_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motivo_consulta_paciente::where('id','=',$id)->first();
        return view('crud/crudmotivo_consulta_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motivo_consulta_paciente::Find($id);

        $grabar->codemotivo=$request->codemotivo;
        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;

        $grabar->save();

        return redirect('/Cruds/Motivo_consulta_paciente/lista');
    }

    public function destroy($id)
    {
        Motivo_consulta_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motivo_consulta_paciente/lista');
    }


 
}

