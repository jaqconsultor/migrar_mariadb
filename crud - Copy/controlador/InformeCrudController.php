<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Informe;
use Session;
use DB;

class InformeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Informe::all();
        return view('crud/crudinforme/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Informe';
        return view('crud/crudinforme/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Informe::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'para'=>$request->para,
        'descripcion'=>$request->descripcion,
        'fecha'=>$request->fecha,
        ]);
        return redirect('/Cruds/Informe/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Informe::where('id','=',$id)->first();
        return view('crud/crudinforme/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Informe::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->para=$request->para;
        $grabar->descripcion=$request->descripcion;
        $grabar->fecha=$request->fecha;

        $grabar->save();

        return redirect('/Cruds/Informe/lista');
    }

    public function destroy($id)
    {
        Informe::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Informe/lista');
    }


 
}

