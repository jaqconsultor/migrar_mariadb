<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Emision_pagos_detalle;
use Session;
use DB;

class Emision_pagos_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Emision_pagos_detalle::all();
        return view('crud/crudemision_pagos_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Emision_pagos_detalle';
        return view('crud/crudemision_pagos_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Emision_pagos_detalle::create([
        'nro_registro'=>$request->nro_registro,
        'nro_emision'=>$request->nro_emision,
        'nro_cxp'=>$request->nro_cxp,
        'nro_mov'=>$request->nro_mov,
        'origen_cxp'=>$request->origen_cxp,
        'cxp_codigo'=>$request->cxp_codigo,
        'cxp_descripcion'=>$request->cxp_descripcion,
        'fecha_emision'=>$request->fecha_emision,
        'nro_documento'=>$request->nro_documento,
        'tip_documento'=>$request->tip_documento,
        'saldo_pagar'=>$request->saldo_pagar,
        'monto_pagar'=>$request->monto_pagar,
        'estado'=>$request->estado,
        ]);
        return redirect('/Cruds/Emision_pagos_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Emision_pagos_detalle::where('id','=',$id)->first();
        return view('crud/crudemision_pagos_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Emision_pagos_detalle::Find($id);

        $grabar->nro_registro=$request->nro_registro;
        $grabar->nro_emision=$request->nro_emision;
        $grabar->nro_cxp=$request->nro_cxp;
        $grabar->nro_mov=$request->nro_mov;
        $grabar->origen_cxp=$request->origen_cxp;
        $grabar->cxp_codigo=$request->cxp_codigo;
        $grabar->cxp_descripcion=$request->cxp_descripcion;
        $grabar->fecha_emision=$request->fecha_emision;
        $grabar->nro_documento=$request->nro_documento;
        $grabar->tip_documento=$request->tip_documento;
        $grabar->saldo_pagar=$request->saldo_pagar;
        $grabar->monto_pagar=$request->monto_pagar;
        $grabar->estado=$request->estado;

        $grabar->save();

        return redirect('/Cruds/Emision_pagos_detalle/lista');
    }

    public function destroy($id)
    {
        Emision_pagos_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Emision_pagos_detalle/lista');
    }


 
}

