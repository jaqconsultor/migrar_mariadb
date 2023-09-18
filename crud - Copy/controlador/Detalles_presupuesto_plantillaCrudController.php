<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Detalles_presupuesto_plantilla;
use Session;
use DB;

class Detalles_presupuesto_plantillaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Detalles_presupuesto_plantilla::all();
        return view('crud/cruddetalles_presupuesto_plantilla/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Detalles_presupuesto_plantilla';
        return view('crud/cruddetalles_presupuesto_plantilla/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Detalles_presupuesto_plantilla::create([
        'cod_inventario'=>$request->cod_inventario,
        'consecutivo'=>$request->consecutivo,
        'tipo_articulo'=>$request->tipo_articulo,
        'nombre'=>$request->nombre,
        'precio'=>$request->precio,
        'descuento'=>$request->descuento,
        'cantidad'=>$request->cantidad,
        'fecha_doc'=>$request->fecha_doc,
        'tipo_documento'=>$request->tipo_documento,
        'total_articulo'=>$request->total_articulo,
        ]);
        return redirect('/Cruds/Detalles_presupuesto_plantilla/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Detalles_presupuesto_plantilla::where('id','=',$id)->first();
        return view('crud/cruddetalles_presupuesto_plantilla/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Detalles_presupuesto_plantilla::Find($id);

        $grabar->cod_inventario=$request->cod_inventario;
        $grabar->consecutivo=$request->consecutivo;
        $grabar->tipo_articulo=$request->tipo_articulo;
        $grabar->nombre=$request->nombre;
        $grabar->precio=$request->precio;
        $grabar->descuento=$request->descuento;
        $grabar->cantidad=$request->cantidad;
        $grabar->fecha_doc=$request->fecha_doc;
        $grabar->tipo_documento=$request->tipo_documento;
        $grabar->total_articulo=$request->total_articulo;

        $grabar->save();

        return redirect('/Cruds/Detalles_presupuesto_plantilla/lista');
    }

    public function destroy($id)
    {
        Detalles_presupuesto_plantilla::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Detalles_presupuesto_plantilla/lista');
    }


 
}

