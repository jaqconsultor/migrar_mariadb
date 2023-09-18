<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Antecedentes;
use Session;
use DB;

class AntecedentesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Antecedentes::all();
        return view('crud/crudantecedentes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Antecedentes';
        return view('crud/crudantecedentes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Antecedentes::create([
        'codantecedente'=>$request->codantecedente,
        'descripcion'=>$request->descripcion,
        'codtipo'=>$request->codtipo,
        ]);
        return redirect('/Cruds/Antecedentes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Antecedentes::where('id','=',$id)->first();
        return view('crud/crudantecedentes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Antecedentes::Find($id);

        $grabar->codantecedente=$request->codantecedente;
        $grabar->descripcion=$request->descripcion;
        $grabar->codtipo=$request->codtipo;

        $grabar->save();

        return redirect('/Cruds/Antecedentes/lista');
    }

    public function destroy($id)
    {
        Antecedentes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Antecedentes/lista');
    }


 
}

