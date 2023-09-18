<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tipo_antecedente;
use Session;
use DB;

class Tipo_antecedenteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Tipo_antecedente::all();
        return view('crud/crudtipo_antecedente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Tipo_antecedente';
        return view('crud/crudtipo_antecedente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Tipo_antecedente::create([
        'codetipo'=>$request->codetipo,
        'descripcion'=>$request->descripcion,
        'tipoantecedente'=>$request->tipoantecedente,
        ]);
        return redirect('/Cruds/Tipo_antecedente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Tipo_antecedente::where('id','=',$id)->first();
        return view('crud/crudtipo_antecedente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Tipo_antecedente::Find($id);

        $grabar->codetipo=$request->codetipo;
        $grabar->descripcion=$request->descripcion;
        $grabar->tipoantecedente=$request->tipoantecedente;

        $grabar->save();

        return redirect('/Cruds/Tipo_antecedente/lista');
    }

    public function destroy($id)
    {
        Tipo_antecedente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Tipo_antecedente/lista');
    }


 
}

