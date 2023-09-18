<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pcola;
use Session;
use DB;

class PcolaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pcola::all();
        return view('crud/crudpcola/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pcola';
        return view('crud/crudpcola/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pcola::create([
        'atendido'=>$request->atendido,
        'conse'=>$request->conse,
        'estado'=>$request->estado,
        'fecha'=>$request->fecha,
        'hora_fin'=>$request->hora_fin,
        'hora_ini'=>$request->hora_ini,
        'medico'=>$request->medico,
        'motivo'=>$request->motivo,
        'nhistoria'=>$request->nhistoria,
        'numorden'=>$request->numorden,
        'tipo'=>$request->tipo,
        'turno'=>$request->turno,
        'fechac'=>$request->fechac,
        ]);
        return redirect('/Cruds/Pcola/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pcola::where('id','=',$id)->first();
        return view('crud/crudpcola/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pcola::Find($id);

        $grabar->atendido=$request->atendido;
        $grabar->conse=$request->conse;
        $grabar->estado=$request->estado;
        $grabar->fecha=$request->fecha;
        $grabar->hora_fin=$request->hora_fin;
        $grabar->hora_ini=$request->hora_ini;
        $grabar->medico=$request->medico;
        $grabar->motivo=$request->motivo;
        $grabar->nhistoria=$request->nhistoria;
        $grabar->numorden=$request->numorden;
        $grabar->tipo=$request->tipo;
        $grabar->turno=$request->turno;
        $grabar->fechac=$request->fechac;

        $grabar->save();

        return redirect('/Cruds/Pcola/lista');
    }

    public function destroy($id)
    {
        Pcola::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pcola/lista');
    }


 
}

