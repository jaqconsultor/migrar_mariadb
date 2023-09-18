<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Cuentas_x_pagar_mov;
use Session;
use DB;

class Cuentas_x_pagar_movCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Cuentas_x_pagar_mov::all();
        return view('crud/crudcuentas_x_pagar_mov/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Cuentas_x_pagar_mov';
        return view('crud/crudcuentas_x_pagar_mov/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Cuentas_x_pagar_mov::create([
        'nro_registro'=>$request->nro_registro,
        'nro_cxp'=>$request->nro_cxp,
        'nro_mov'=>$request->nro_mov,
        'fecha_emision'=>$request->fecha_emision,
        'nro_documento'=>$request->nro_documento,
        'tip_documento'=>$request->tip_documento,
        'monto_pagar'=>$request->monto_pagar,
        ]);
        return redirect('/Cruds/Cuentas_x_pagar_mov/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Cuentas_x_pagar_mov::where('id','=',$id)->first();
        return view('crud/crudcuentas_x_pagar_mov/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Cuentas_x_pagar_mov::Find($id);

        $grabar->nro_registro=$request->nro_registro;
        $grabar->nro_cxp=$request->nro_cxp;
        $grabar->nro_mov=$request->nro_mov;
        $grabar->fecha_emision=$request->fecha_emision;
        $grabar->nro_documento=$request->nro_documento;
        $grabar->tip_documento=$request->tip_documento;
        $grabar->monto_pagar=$request->monto_pagar;

        $grabar->save();

        return redirect('/Cruds/Cuentas_x_pagar_mov/lista');
    }

    public function destroy($id)
    {
        Cuentas_x_pagar_mov::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Cuentas_x_pagar_mov/lista');
    }


 
}

