<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Radiologia_paciente;
use Session;
use DB;

class Radiologia_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Radiologia_paciente::all();
        return view('crud/crudradiologia_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Radiologia_paciente';
        return view('crud/crudradiologia_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Radiologia_paciente::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'coderadio'=>$request->coderadio,
        'nroopcion'=>$request->nroopcion,
        ]);
        return redirect('/Cruds/Radiologia_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Radiologia_paciente::where('id','=',$id)->first();
        return view('crud/crudradiologia_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Radiologia_paciente::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->coderadio=$request->coderadio;
        $grabar->nroopcion=$request->nroopcion;

        $grabar->save();

        return redirect('/Cruds/Radiologia_paciente/lista');
    }

    public function destroy($id)
    {
        Radiologia_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Radiologia_paciente/lista');
    }


 
}

