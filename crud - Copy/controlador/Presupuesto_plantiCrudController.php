<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Presupuesto_planti;
use Session;
use DB;

class Presupuesto_plantiCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Presupuesto_planti::all();
        return view('crud/crudpresupuesto_planti/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Presupuesto_planti';
        return view('crud/crudpresupuesto_planti/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Presupuesto_planti::create([
        'consecutivo'=>$request->consecutivo,
        'tipo_precio'=>$request->tipo_precio,
        'total_costo'=>$request->total_costo,
        'total_final'=>$request->total_final,
        'notas'=>$request->notas,
        'tipo_doc'=>$request->tipo_doc,
        'nom_presupuesto'=>$request->nom_presupuesto,
        ]);
        return redirect('/Cruds/Presupuesto_planti/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Presupuesto_planti::where('id','=',$id)->first();
        return view('crud/crudpresupuesto_planti/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Presupuesto_planti::Find($id);

        $grabar->consecutivo=$request->consecutivo;
        $grabar->tipo_precio=$request->tipo_precio;
        $grabar->total_costo=$request->total_costo;
        $grabar->total_final=$request->total_final;
        $grabar->notas=$request->notas;
        $grabar->tipo_doc=$request->tipo_doc;
        $grabar->nom_presupuesto=$request->nom_presupuesto;

        $grabar->save();

        return redirect('/Cruds/Presupuesto_planti/lista');
    }

    public function destroy($id)
    {
        Presupuesto_planti::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Presupuesto_planti/lista');
    }


 
}

