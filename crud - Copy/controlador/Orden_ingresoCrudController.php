<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Orden_ingreso;
use Session;
use DB;

class Orden_ingresoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Orden_ingreso::all();
        return view('crud/crudorden_ingreso/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Orden_ingreso';
        return view('crud/crudorden_ingreso/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Orden_ingreso::create([
        'historia'=>$request->historia,
        'consulta'=>$request->consulta,
        'fecha_operacion'=>$request->fecha_operacion,
        'fecha_reporte'=>$request->fecha_reporte,
        'texto'=>$request->texto,
        'idx'=>$request->idx,
        'reco_ingresar'=>$request->reco_ingresar,
        'reco_depi'=>$request->reco_depi,
        'reco_llevar'=>$request->reco_llevar,
        'reco_cedroxin'=>$request->reco_cedroxin,
        'reco_ejercicios'=>$request->reco_ejercicios,
        'reco_terapia'=>$request->reco_terapia,
        'reco_control'=>$request->reco_control,
        'reco_higiene'=>$request->reco_higiene,
        'reco_ropa'=>$request->reco_ropa,
        'reco_tomar'=>$request->reco_tomar,
        'reco_clexane'=>$request->reco_clexane,
        'reco_ejercicios_res'=>$request->reco_ejercicios_res,
        'reco_sangre'=>$request->reco_sangre,
        'reco_avisar'=>$request->reco_avisar,
        'detalle'=>$request->detalle,
        ]);
        return redirect('/Cruds/Orden_ingreso/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Orden_ingreso::where('id','=',$id)->first();
        return view('crud/crudorden_ingreso/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Orden_ingreso::Find($id);

        $grabar->historia=$request->historia;
        $grabar->consulta=$request->consulta;
        $grabar->fecha_operacion=$request->fecha_operacion;
        $grabar->fecha_reporte=$request->fecha_reporte;
        $grabar->texto=$request->texto;
        $grabar->idx=$request->idx;
        $grabar->reco_ingresar=$request->reco_ingresar;
        $grabar->reco_depi=$request->reco_depi;
        $grabar->reco_llevar=$request->reco_llevar;
        $grabar->reco_cedroxin=$request->reco_cedroxin;
        $grabar->reco_ejercicios=$request->reco_ejercicios;
        $grabar->reco_terapia=$request->reco_terapia;
        $grabar->reco_control=$request->reco_control;
        $grabar->reco_higiene=$request->reco_higiene;
        $grabar->reco_ropa=$request->reco_ropa;
        $grabar->reco_tomar=$request->reco_tomar;
        $grabar->reco_clexane=$request->reco_clexane;
        $grabar->reco_ejercicios_res=$request->reco_ejercicios_res;
        $grabar->reco_sangre=$request->reco_sangre;
        $grabar->reco_avisar=$request->reco_avisar;
        $grabar->detalle=$request->detalle;

        $grabar->save();

        return redirect('/Cruds/Orden_ingreso/lista');
    }

    public function destroy($id)
    {
        Orden_ingreso::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Orden_ingreso/lista');
    }


 
}

