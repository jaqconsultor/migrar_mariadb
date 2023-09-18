<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Radiologias;
use Session;
use DB;

class RadiologiasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Radiologias::all();
        return view('crud/crudradiologias/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Radiologias';
        return view('crud/crudradiologias/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Radiologias::create([
        'coderadio'=>$request->coderadio,
        'estudio'=>$request->estudio,
        'codetipo'=>$request->codetipo,
        'opciones'=>$request->opciones,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Radiologias/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Radiologias::where('id','=',$id)->first();
        return view('crud/crudradiologias/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Radiologias::Find($id);

        $grabar->coderadio=$request->coderadio;
        $grabar->estudio=$request->estudio;
        $grabar->codetipo=$request->codetipo;
        $grabar->opciones=$request->opciones;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Radiologias/lista');
    }

    public function destroy($id)
    {
        Radiologias::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Radiologias/lista');
    }


 
}

