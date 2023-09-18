<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pago_quiru;
use Session;
use DB;

class Pago_quiruCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pago_quiru::all();
        return view('crud/crudpago_quiru/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pago_quiru';
        return view('crud/crudpago_quiru/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pago_quiru::create([
        'cod_pagos'=>$request->cod_pagos,
        'consecuti'=>$request->consecuti,
        'fecha'=>$request->fecha,
        'monto_total'=>$request->monto_total,
        'abono'=>$request->abono,
        'resta'=>$request->resta,
        'pago'=>$request->pago,
        'hora_pago'=>$request->hora_pago,
        ]);
        return redirect('/Cruds/Pago_quiru/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pago_quiru::where('id','=',$id)->first();
        return view('crud/crudpago_quiru/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pago_quiru::Find($id);

        $grabar->cod_pagos=$request->cod_pagos;
        $grabar->consecuti=$request->consecuti;
        $grabar->fecha=$request->fecha;
        $grabar->monto_total=$request->monto_total;
        $grabar->abono=$request->abono;
        $grabar->resta=$request->resta;
        $grabar->pago=$request->pago;
        $grabar->hora_pago=$request->hora_pago;

        $grabar->save();

        return redirect('/Cruds/Pago_quiru/lista');
    }

    public function destroy($id)
    {
        Pago_quiru::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pago_quiru/lista');
    }


 
}

