<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pacientes;
use Session;
use DB;

class PacientesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pacientes::all();
        return view('crud/crudpacientes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pacientes';
        return view('crud/crudpacientes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pacientes::create([
        'nac'=>$request->nac,
        'cedula'=>$request->cedula,
        'apellidos'=>$request->apellidos,
        'nombres'=>$request->nombres,
        'sexo'=>$request->sexo,
        'fnacimiento'=>$request->fnacimiento,
        'lnacimiento'=>$request->lnacimiento,
        'codeestado'=>$request->codeestado,
        'direccion'=>$request->direccion,
        'telefono'=>$request->telefono,
        'fingreso'=>$request->fingreso,
        'escolaridad'=>$request->escolaridad,
        'ocupacion'=>$request->ocupacion,
        'codesegemp'=>$request->codesegemp,
        'numhistoria'=>$request->numhistoria,
        'foto_pac'=>$request->foto_pac,
        'profesion'=>$request->profesion,
        'email'=>$request->email,
        'dependencia'=>$request->dependencia,
        'medico'=>$request->medico,
        'historia_aa'=>$request->historia_aa,
        'categoria'=>$request->categoria,
        'sms'=>$request->sms,
        ]);
        return redirect('/Cruds/Pacientes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pacientes::where('id','=',$id)->first();
        return view('crud/crudpacientes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pacientes::Find($id);

        $grabar->nac=$request->nac;
        $grabar->cedula=$request->cedula;
        $grabar->apellidos=$request->apellidos;
        $grabar->nombres=$request->nombres;
        $grabar->sexo=$request->sexo;
        $grabar->fnacimiento=$request->fnacimiento;
        $grabar->lnacimiento=$request->lnacimiento;
        $grabar->codeestado=$request->codeestado;
        $grabar->direccion=$request->direccion;
        $grabar->telefono=$request->telefono;
        $grabar->fingreso=$request->fingreso;
        $grabar->escolaridad=$request->escolaridad;
        $grabar->ocupacion=$request->ocupacion;
        $grabar->codesegemp=$request->codesegemp;
        $grabar->numhistoria=$request->numhistoria;
        $grabar->foto_pac=$request->foto_pac;
        $grabar->profesion=$request->profesion;
        $grabar->email=$request->email;
        $grabar->dependencia=$request->dependencia;
        $grabar->medico=$request->medico;
        $grabar->historia_aa=$request->historia_aa;
        $grabar->categoria=$request->categoria;
        $grabar->sms=$request->sms;

        $grabar->save();

        return redirect('/Cruds/Pacientes/lista');
    }

    public function destroy($id)
    {
        Pacientes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pacientes/lista');
    }


 
}

