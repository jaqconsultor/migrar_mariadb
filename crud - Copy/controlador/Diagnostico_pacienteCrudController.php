<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Diagnostico_paciente;
use Session;
use DB;

class Diagnostico_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Diagnostico_paciente::all();
        return view('crud/cruddiagnostico_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Diagnostico_paciente';
        return view('crud/cruddiagnostico_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Diagnostico_paciente::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codediagnostico'=>$request->codediagnostico,
        'orden'=>$request->orden,
        ]);
        return redirect('/Cruds/Diagnostico_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Diagnostico_paciente::where('id','=',$id)->first();
        return view('crud/cruddiagnostico_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Diagnostico_paciente::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codediagnostico=$request->codediagnostico;
        $grabar->orden=$request->orden;

        $grabar->save();

        return redirect('/Cruds/Diagnostico_paciente/lista');
    }

    public function destroy($id)
    {
        Diagnostico_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Diagnostico_paciente/lista');
    }


 
}

