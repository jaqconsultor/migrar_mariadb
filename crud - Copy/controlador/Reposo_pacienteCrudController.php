<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Reposo_paciente;
use Session;
use DB;

class Reposo_pacienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Reposo_paciente::all();
        return view('crud/crudreposo_paciente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Reposo_paciente';
        return view('crud/crudreposo_paciente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Reposo_paciente::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codereposo'=>$request->codereposo,
        'fdesde'=>$request->fdesde,
        'numdias'=>$request->numdias,
        'obser_reposo'=>$request->obser_reposo,
        ]);
        return redirect('/Cruds/Reposo_paciente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Reposo_paciente::where('id','=',$id)->first();
        return view('crud/crudreposo_paciente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Reposo_paciente::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codereposo=$request->codereposo;
        $grabar->fdesde=$request->fdesde;
        $grabar->numdias=$request->numdias;
        $grabar->obser_reposo=$request->obser_reposo;

        $grabar->save();

        return redirect('/Cruds/Reposo_paciente/lista');
    }

    public function destroy($id)
    {
        Reposo_paciente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Reposo_paciente/lista');
    }


 
}

