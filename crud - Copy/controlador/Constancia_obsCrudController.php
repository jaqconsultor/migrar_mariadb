<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Constancia_obs;
use Session;
use DB;

class Constancia_obsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Constancia_obs::all();
        return view('crud/crudconstancia_obs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Constancia_obs';
        return view('crud/crudconstancia_obs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Constancia_obs::create([
        'numhistoria'=>$request->numhistoria,
        'numconsulta'=>$request->numconsulta,
        'observacion'=>$request->observacion,
        'titulo'=>$request->titulo,
        'observacion01'=>$request->observacion01,
        ]);
        return redirect('/Cruds/Constancia_obs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Constancia_obs::where('id','=',$id)->first();
        return view('crud/crudconstancia_obs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Constancia_obs::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->numconsulta=$request->numconsulta;
        $grabar->observacion=$request->observacion;
        $grabar->titulo=$request->titulo;
        $grabar->observacion01=$request->observacion01;

        $grabar->save();

        return redirect('/Cruds/Constancia_obs/lista');
    }

    public function destroy($id)
    {
        Constancia_obs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Constancia_obs/lista');
    }


 
}

