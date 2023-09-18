<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Emision_pagos;
use Session;
use DB;

class Emision_pagosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Emision_pagos::all();
        return view('crud/crudemision_pagos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Emision_pagos';
        return view('crud/crudemision_pagos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Emision_pagos::create([
        'nro_emision'=>$request->nro_emision,
        'fecha_emision'=>$request->fecha_emision,
        'descripcion'=>$request->descripcion,
        'cod_banco'=>$request->cod_banco,
        'estado'=>$request->estado,
        'monto_pagar'=>$request->monto_pagar,
        ]);
        return redirect('/Cruds/Emision_pagos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Emision_pagos::where('id','=',$id)->first();
        return view('crud/crudemision_pagos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Emision_pagos::Find($id);

        $grabar->nro_emision=$request->nro_emision;
        $grabar->fecha_emision=$request->fecha_emision;
        $grabar->descripcion=$request->descripcion;
        $grabar->cod_banco=$request->cod_banco;
        $grabar->estado=$request->estado;
        $grabar->monto_pagar=$request->monto_pagar;

        $grabar->save();

        return redirect('/Cruds/Emision_pagos/lista');
    }

    public function destroy($id)
    {
        Emision_pagos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Emision_pagos/lista');
    }


 
}

