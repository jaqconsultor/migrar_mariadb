<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Referencia;
use Session;
use DB;

class ReferenciaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Referencia::all();
        return view('crud/crudreferencia/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Referencia';
        return view('crud/crudreferencia/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Referencia::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'ceduladoctor'=>$request->ceduladoctor,
        'referencia'=>$request->referencia,
        ]);
        return redirect('/Cruds/Referencia/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Referencia::where('id','=',$id)->first();
        return view('crud/crudreferencia/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Referencia::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->ceduladoctor=$request->ceduladoctor;
        $grabar->referencia=$request->referencia;

        $grabar->save();

        return redirect('/Cruds/Referencia/lista');
    }

    public function destroy($id)
    {
        Referencia::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Referencia/lista');
    }


 
}

