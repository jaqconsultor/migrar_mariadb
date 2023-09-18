<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Cola;
use Session;
use DB;

class ColaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Cola::all();
        return view('crud/crudcola/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Cola';
        return view('crud/crudcola/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Cola::create([
        'fecha'=>$request->fecha,
        'numhistoria'=>$request->numhistoria,
        'numorden'=>$request->numorden,
        'atendido'=>$request->atendido,
        'estado'=>$request->estado,
        'turno'=>$request->turno,
        'motivo'=>$request->motivo,
        'monto'=>$request->monto,
        'hora_ini'=>$request->hora_ini,
        'hora_fin'=>$request->hora_fin,
        'tiempo'=>$request->tiempo,
        'tipo'=>$request->tipo,
        'conse'=>$request->conse,
        'sms'=>$request->sms,
        'sms_text'=>$request->sms_text,
        'medico'=>$request->medico,
        ]);
        return redirect('/Cruds/Cola/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Cola::where('id','=',$id)->first();
        return view('crud/crudcola/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Cola::Find($id);

        $grabar->fecha=$request->fecha;
        $grabar->numhistoria=$request->numhistoria;
        $grabar->numorden=$request->numorden;
        $grabar->atendido=$request->atendido;
        $grabar->estado=$request->estado;
        $grabar->turno=$request->turno;
        $grabar->motivo=$request->motivo;
        $grabar->monto=$request->monto;
        $grabar->hora_ini=$request->hora_ini;
        $grabar->hora_fin=$request->hora_fin;
        $grabar->tiempo=$request->tiempo;
        $grabar->tipo=$request->tipo;
        $grabar->conse=$request->conse;
        $grabar->sms=$request->sms;
        $grabar->sms_text=$request->sms_text;
        $grabar->medico=$request->medico;

        $grabar->save();

        return redirect('/Cruds/Cola/lista');
    }

    public function destroy($id)
    {
        Cola::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Cola/lista');
    }


 
}

