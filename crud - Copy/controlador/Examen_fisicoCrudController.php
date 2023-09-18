<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Examen_fisico;
use Session;
use DB;

class Examen_fisicoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Examen_fisico::all();
        return view('crud/crudexamen_fisico/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Examen_fisico';
        return view('crud/crudexamen_fisico/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Examen_fisico::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'cardiopulmonal'=>$request->cardiopulmonal,
        'abdomen'=>$request->abdomen,
        'extremidades'=>$request->extremidades,
        'otros'=>$request->otros,
        'electrocardiograma'=>$request->electrocardiograma,
        'rx_de_torax'=>$request->rx_de_torax,
        'laboratorio'=>$request->laboratorio,
        'riesgo_operatorio'=>$request->riesgo_operatorio,
        'sugerencias'=>$request->sugerencias,
        ]);
        return redirect('/Cruds/Examen_fisico/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Examen_fisico::where('id','=',$id)->first();
        return view('crud/crudexamen_fisico/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Examen_fisico::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->cardiopulmonal=$request->cardiopulmonal;
        $grabar->abdomen=$request->abdomen;
        $grabar->extremidades=$request->extremidades;
        $grabar->otros=$request->otros;
        $grabar->electrocardiograma=$request->electrocardiograma;
        $grabar->rx_de_torax=$request->rx_de_torax;
        $grabar->laboratorio=$request->laboratorio;
        $grabar->riesgo_operatorio=$request->riesgo_operatorio;
        $grabar->sugerencias=$request->sugerencias;

        $grabar->save();

        return redirect('/Cruds/Examen_fisico/lista');
    }

    public function destroy($id)
    {
        Examen_fisico::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Examen_fisico/lista');
    }


 
}

