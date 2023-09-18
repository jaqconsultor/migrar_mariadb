<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Radiologia_obs;
use Session;
use DB;

class Radiologia_obsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Radiologia_obs::all();
        return view('crud/crudradiologia_obs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Radiologia_obs';
        return view('crud/crudradiologia_obs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Radiologia_obs::create([
        'numhistoria'=>$request->numhistoria,
        'numconsulta'=>$request->numconsulta,
        'observacion'=>$request->observacion,
        ]);
        return redirect('/Cruds/Radiologia_obs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Radiologia_obs::where('id','=',$id)->first();
        return view('crud/crudradiologia_obs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Radiologia_obs::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->numconsulta=$request->numconsulta;
        $grabar->observacion=$request->observacion;

        $grabar->save();

        return redirect('/Cruds/Radiologia_obs/lista');
    }

    public function destroy($id)
    {
        Radiologia_obs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Radiologia_obs/lista');
    }


 
}

