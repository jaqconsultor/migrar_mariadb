<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Ortopedia;
use Session;
use DB;

class OrtopediaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Ortopedia::all();
        return view('crud/crudortopedia/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Ortopedia';
        return view('crud/crudortopedia/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Ortopedia::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'botas'=>$request->botas,
        'zapatos'=>$request->zapatos,
        'soporte'=>$request->soporte,
        'thomas'=>$request->thomas,
        'normal'=>$request->normal,
        'tacon_int'=>$request->tacon_int,
        'tacon_ext'=>$request->tacon_ext,
        'suela_int'=>$request->suela_int,
        'suela_ext'=>$request->suela_ext,
        'borde_int_rect'=>$request->borde_int_rect,
        'borde_int_abdu'=>$request->borde_int_abdu,
        'suela_normal'=>$request->suela_normal,
        'suela_antirres'=>$request->suela_antirres,
        'aparatos'=>$request->aparatos,
        'observacion'=>$request->observacion,
        'plantilla'=>$request->plantilla,
        'aae'=>$request->aae,
        'api'=>$request->api,
        ]);
        return redirect('/Cruds/Ortopedia/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Ortopedia::where('id','=',$id)->first();
        return view('crud/crudortopedia/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Ortopedia::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->botas=$request->botas;
        $grabar->zapatos=$request->zapatos;
        $grabar->soporte=$request->soporte;
        $grabar->thomas=$request->thomas;
        $grabar->normal=$request->normal;
        $grabar->tacon_int=$request->tacon_int;
        $grabar->tacon_ext=$request->tacon_ext;
        $grabar->suela_int=$request->suela_int;
        $grabar->suela_ext=$request->suela_ext;
        $grabar->borde_int_rect=$request->borde_int_rect;
        $grabar->borde_int_abdu=$request->borde_int_abdu;
        $grabar->suela_normal=$request->suela_normal;
        $grabar->suela_antirres=$request->suela_antirres;
        $grabar->aparatos=$request->aparatos;
        $grabar->observacion=$request->observacion;
        $grabar->plantilla=$request->plantilla;
        $grabar->aae=$request->aae;
        $grabar->api=$request->api;

        $grabar->save();

        return redirect('/Cruds/Ortopedia/lista');
    }

    public function destroy($id)
    {
        Ortopedia::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Ortopedia/lista');
    }


 
}

