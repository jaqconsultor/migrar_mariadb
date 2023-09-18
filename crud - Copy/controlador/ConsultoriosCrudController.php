<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Consultorios;
use Session;
use DB;

class ConsultoriosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Consultorios::all();
        return view('crud/crudconsultorios/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Consultorios';
        return view('crud/crudconsultorios/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Consultorios::create([
        'codigo'=>$request->codigo,
        'consultorio'=>$request->consultorio,
        ]);
        return redirect('/Cruds/Consultorios/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Consultorios::where('id','=',$id)->first();
        return view('crud/crudconsultorios/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Consultorios::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->consultorio=$request->consultorio;

        $grabar->save();

        return redirect('/Cruds/Consultorios/lista');
    }

    public function destroy($id)
    {
        Consultorios::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Consultorios/lista');
    }


 
}

