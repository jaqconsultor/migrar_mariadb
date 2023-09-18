<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Examen_obs;
use Session;
use DB;

class Examen_obsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Examen_obs::all();
        return view('crud/crudexamen_obs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Examen_obs';
        return view('crud/crudexamen_obs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Examen_obs::create([
        'numhistoria'=>$request->numhistoria,
        'numconsulta'=>$request->numconsulta,
        'observacion'=>$request->observacion,
        ]);
        return redirect('/Cruds/Examen_obs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Examen_obs::where('id','=',$id)->first();
        return view('crud/crudexamen_obs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Examen_obs::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->numconsulta=$request->numconsulta;
        $grabar->observacion=$request->observacion;

        $grabar->save();

        return redirect('/Cruds/Examen_obs/lista');
    }

    public function destroy($id)
    {
        Examen_obs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Examen_obs/lista');
    }


 
}

