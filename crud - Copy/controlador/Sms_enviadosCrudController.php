<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Sms_enviados;
use Session;
use DB;

class Sms_enviadosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Sms_enviados::all();
        return view('crud/crudsms_enviados/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Sms_enviados';
        return view('crud/crudsms_enviados/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Sms_enviados::create([
        'conta'=>$request->conta,
        'usuario'=>$request->usuario,
        'medico'=>$request->medico,
        'proveedor'=>$request->proveedor,
        'numero'=>$request->numero,
        'mensaje'=>$request->mensaje,
        'fecha'=>$request->fecha,
        'tipo'=>$request->tipo,
        'historia'=>$request->historia,
        'consulta'=>$request->consulta,
        ]);
        return redirect('/Cruds/Sms_enviados/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Sms_enviados::where('id','=',$id)->first();
        return view('crud/crudsms_enviados/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Sms_enviados::Find($id);

        $grabar->conta=$request->conta;
        $grabar->usuario=$request->usuario;
        $grabar->medico=$request->medico;
        $grabar->proveedor=$request->proveedor;
        $grabar->numero=$request->numero;
        $grabar->mensaje=$request->mensaje;
        $grabar->fecha=$request->fecha;
        $grabar->tipo=$request->tipo;
        $grabar->historia=$request->historia;
        $grabar->consulta=$request->consulta;

        $grabar->save();

        return redirect('/Cruds/Sms_enviados/lista');
    }

    public function destroy($id)
    {
        Sms_enviados::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Sms_enviados/lista');
    }


 
}

