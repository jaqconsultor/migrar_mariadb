<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Examen_paciente;
use Session;
use DB;

class Examen_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Examen_paciente::all();
        return view('crud/crudexamen_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Examen_paciente';
        return view('crud/crudexamen_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Examen_paciente::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codeexamen'=>$request->codeexamen,
        'resultado'=>$request->resultado,
        'vinculante'=>$request->vinculante,
        ]);
        return redirect('/Cruds/Examen_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Examen_paciente::where('id','=',$id)->first();
        return view('crud/crudexamen_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Examen_paciente::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codeexamen=$request->codeexamen;
        $grabar->resultado=$request->resultado;
        $grabar->vinculante=$request->vinculante;

        $grabar->save();

        return redirect('/Cruds/Examen_paciente/lista');
    }

    public function destroy($id)
    {
        Examen_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Examen_paciente/lista');
    }


 
}

