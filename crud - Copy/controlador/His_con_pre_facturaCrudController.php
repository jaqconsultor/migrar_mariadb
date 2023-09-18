<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\His_con_pre_factura;
use Session;
use DB;

class His_con_pre_facturaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=His_con_pre_factura::all();
        return view('crud/crudhis_con_pre_factura/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear His_con_pre_factura';
        return view('crud/crudhis_con_pre_factura/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        His_con_pre_factura::create([
        'id_registro'=>$request->id_registro,
        'numhistoria'=>$request->numhistoria,
        'nroconsulta'=>$request->nroconsulta,
        'codigo'=>$request->codigo,
        'descripcion'=>$request->descripcion,
        'cantidad'=>$request->cantidad,
        'monto'=>$request->monto,
        ]);
        return redirect('/Cruds/His_con_pre_factura/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=His_con_pre_factura::where('id','=',$id)->first();
        return view('crud/crudhis_con_pre_factura/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=His_con_pre_factura::Find($id);

        $grabar->id_registro=$request->id_registro;
        $grabar->numhistoria=$request->numhistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->codigo=$request->codigo;
        $grabar->descripcion=$request->descripcion;
        $grabar->cantidad=$request->cantidad;
        $grabar->monto=$request->monto;

        $grabar->save();

        return redirect('/Cruds/His_con_pre_factura/lista');
    }

    public function destroy($id)
    {
        His_con_pre_factura::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/His_con_pre_factura/lista');
    }


 
}

