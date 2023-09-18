<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pvademe;
use Session;
use DB;

class PvademeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pvademe::all();
        return view('crud/crudpvademe/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pvademe';
        return view('crud/crudpvademe/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pvademe::create([
        'codmedi'=>$request->codmedi,
        'nombrege'=>$request->nombrege,
        'nombreco'=>$request->nombreco,
        'dosifi'=>$request->dosifi,
        'uso'=>$request->uso,
        'presenta'=>$request->presenta,
        ]);
        return redirect('/Cruds/Pvademe/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pvademe::where('id','=',$id)->first();
        return view('crud/crudpvademe/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pvademe::Find($id);

        $grabar->codmedi=$request->codmedi;
        $grabar->nombrege=$request->nombrege;
        $grabar->nombreco=$request->nombreco;
        $grabar->dosifi=$request->dosifi;
        $grabar->uso=$request->uso;
        $grabar->presenta=$request->presenta;

        $grabar->save();

        return redirect('/Cruds/Pvademe/lista');
    }

    public function destroy($id)
    {
        Pvademe::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pvademe/lista');
    }


 
}

