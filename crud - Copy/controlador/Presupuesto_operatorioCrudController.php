<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Presupuesto_operatorio;
use Session;
use DB;

class Presupuesto_operatorioCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Presupuesto_operatorio::all();
        return view('crud/crudpresupuesto_operatorio/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Presupuesto_operatorio';
        return view('crud/crudpresupuesto_operatorio/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Presupuesto_operatorio::create([
        'documento'=>$request->documento,
        'historia'=>$request->historia,
        'diagnostico'=>$request->diagnostico,
        'intervencion'=>$request->intervencion,
        'ayudantes'=>$request->ayudantes,
        'dias_hospi'=>$request->dias_hospi,
        'arco_c'=>$request->arco_c,
        'astroscopio'=>$request->astroscopio,
        'sangre_qx_tipo_1'=>$request->sangre_qx_tipo_1,
        'sangre_qx_tipo_2'=>$request->sangre_qx_tipo_2,
        'sangre_qx_tipo_1_cantidad'=>$request->sangre_qx_tipo_1_cantidad,
        'sangre_qx_tipo_2_cantidad'=>$request->sangre_qx_tipo_2_cantidad,
        'material_sintesis'=>$request->material_sintesis,
        'instrumental_traumatologico'=>$request->instrumental_traumatologico,
        'honorarios'=>$request->honorarios,
        'observaciones'=>$request->observaciones,
        'fecha'=>$request->fecha,
        'estado'=>$request->estado,
        'clinica'=>$request->clinica,
        'procedencia'=>$request->procedencia,
        'h_1_ayudante'=>$request->h_1_ayudante,
        'horas_quirofano'=>$request->horas_quirofano,
        'h_2_ayudante'=>$request->h_2_ayudante,
        'h_anestesiologo'=>$request->h_anestesiologo,
        'rx_postoperatoria'=>$request->rx_postoperatoria,
        'rx_torax'=>$request->rx_torax,
        'h_tratante'=>$request->h_tratante,
        'fluoroscopio'=>$request->fluoroscopio,
        'h_artroscopio'=>$request->h_artroscopio,
        'eval_preoperatoria'=>$request->eval_preoperatoria,
        'otros_estudios_de_imagenes'=>$request->otros_estudios_de_imagenes,
        'interconsultas'=>$request->interconsultas,
        'otro_1_tex'=>$request->otro_1_tex,
        'otro_1_deta'=>$request->otro_1_deta,
        'otro_2_tex'=>$request->otro_2_tex,
        'otro_2_deta'=>$request->otro_2_deta,
        ]);
        return redirect('/Cruds/Presupuesto_operatorio/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Presupuesto_operatorio::where('id','=',$id)->first();
        return view('crud/crudpresupuesto_operatorio/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Presupuesto_operatorio::Find($id);

        $grabar->documento=$request->documento;
        $grabar->historia=$request->historia;
        $grabar->diagnostico=$request->diagnostico;
        $grabar->intervencion=$request->intervencion;
        $grabar->ayudantes=$request->ayudantes;
        $grabar->dias_hospi=$request->dias_hospi;
        $grabar->arco_c=$request->arco_c;
        $grabar->astroscopio=$request->astroscopio;
        $grabar->sangre_qx_tipo_1=$request->sangre_qx_tipo_1;
        $grabar->sangre_qx_tipo_2=$request->sangre_qx_tipo_2;
        $grabar->sangre_qx_tipo_1_cantidad=$request->sangre_qx_tipo_1_cantidad;
        $grabar->sangre_qx_tipo_2_cantidad=$request->sangre_qx_tipo_2_cantidad;
        $grabar->material_sintesis=$request->material_sintesis;
        $grabar->instrumental_traumatologico=$request->instrumental_traumatologico;
        $grabar->honorarios=$request->honorarios;
        $grabar->observaciones=$request->observaciones;
        $grabar->fecha=$request->fecha;
        $grabar->estado=$request->estado;
        $grabar->clinica=$request->clinica;
        $grabar->procedencia=$request->procedencia;
        $grabar->h_1_ayudante=$request->h_1_ayudante;
        $grabar->horas_quirofano=$request->horas_quirofano;
        $grabar->h_2_ayudante=$request->h_2_ayudante;
        $grabar->h_anestesiologo=$request->h_anestesiologo;
        $grabar->rx_postoperatoria=$request->rx_postoperatoria;
        $grabar->rx_torax=$request->rx_torax;
        $grabar->h_tratante=$request->h_tratante;
        $grabar->fluoroscopio=$request->fluoroscopio;
        $grabar->h_artroscopio=$request->h_artroscopio;
        $grabar->eval_preoperatoria=$request->eval_preoperatoria;
        $grabar->otros_estudios_de_imagenes=$request->otros_estudios_de_imagenes;
        $grabar->interconsultas=$request->interconsultas;
        $grabar->otro_1_tex=$request->otro_1_tex;
        $grabar->otro_1_deta=$request->otro_1_deta;
        $grabar->otro_2_tex=$request->otro_2_tex;
        $grabar->otro_2_deta=$request->otro_2_deta;

        $grabar->save();

        return redirect('/Cruds/Presupuesto_operatorio/lista');
    }

    public function destroy($id)
    {
        Presupuesto_operatorio::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Presupuesto_operatorio/lista');
    }


 
}

