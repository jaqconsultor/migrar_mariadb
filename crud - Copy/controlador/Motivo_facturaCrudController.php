<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motivo_factura;
use Session;
use DB;

class Motivo_facturaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motivo_factura::all();
        return view('crud/crudmotivo_factura/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motivo_factura';
        return view('crud/crudmotivo_factura/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motivo_factura::create([
        'codigo'=>$request->codigo,
        'descripcion'=>$request->descripcion,
        'monto'=>$request->monto,
        'monto_seg'=>$request->monto_seg,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Motivo_factura/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motivo_factura::where('id','=',$id)->first();
        return view('crud/crudmotivo_factura/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motivo_factura::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->descripcion=$request->descripcion;
        $grabar->monto=$request->monto;
        $grabar->monto_seg=$request->monto_seg;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Motivo_factura/lista');
    }

    public function destroy($id)
    {
        Motivo_factura::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motivo_factura/lista');
    }


 
}

