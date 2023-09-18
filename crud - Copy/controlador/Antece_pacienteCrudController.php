<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Antece_paciente;
use Session;
use DB;

class Antece_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Antece_paciente::all();
        return view('crud/crudantece_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Antece_paciente';
        return view('crud/crudantece_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Antece_paciente::create([
        'numhistoria'=>$request->numhistoria,
        'codeantecedente'=>$request->codeantecedente,
        'detalles'=>$request->detalles,
        'descripcion'=>$request->descripcion,
        'tipo'=>$request->tipo,
        'tipo2'=>$request->tipo2,
        ]);
        return redirect('/Cruds/Antece_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Antece_paciente::where('id','=',$id)->first();
        return view('crud/crudantece_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Antece_paciente::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->codeantecedente=$request->codeantecedente;
        $grabar->detalles=$request->detalles;
        $grabar->descripcion=$request->descripcion;
        $grabar->tipo=$request->tipo;
        $grabar->tipo2=$request->tipo2;

        $grabar->save();

        return redirect('/Cruds/Antece_paciente/lista');
    }

    public function destroy($id)
    {
        Antece_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Antece_paciente/lista');
    }


 
}

