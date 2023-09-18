<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Detalles_factura_cliente;
use Session;
use DB;

class Detalles_factura_clienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Detalles_factura_cliente::all();
        return view('crud/cruddetalles_factura_cliente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Detalles_factura_cliente';
        return view('crud/cruddetalles_factura_cliente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Detalles_factura_cliente::create([
        'cod_inventario'=>$request->cod_inventario,
        'numfactura'=>$request->numfactura,
        'tipo_articulo'=>$request->tipo_articulo,
        'nombre'=>$request->nombre,
        'precio'=>$request->precio,
        'descuento'=>$request->descuento,
        'cantidad'=>$request->cantidad,
        'fecha_doc'=>$request->fecha_doc,
        'tipo_precio'=>$request->tipo_precio,
        'total_articulo'=>$request->total_articulo,
        ]);
        return redirect('/Cruds/Detalles_factura_cliente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Detalles_factura_cliente::where('id','=',$id)->first();
        return view('crud/cruddetalles_factura_cliente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Detalles_factura_cliente::Find($id);

        $grabar->cod_inventario=$request->cod_inventario;
        $grabar->numfactura=$request->numfactura;
        $grabar->tipo_articulo=$request->tipo_articulo;
        $grabar->nombre=$request->nombre;
        $grabar->precio=$request->precio;
        $grabar->descuento=$request->descuento;
        $grabar->cantidad=$request->cantidad;
        $grabar->fecha_doc=$request->fecha_doc;
        $grabar->tipo_precio=$request->tipo_precio;
        $grabar->total_articulo=$request->total_articulo;

        $grabar->save();

        return redirect('/Cruds/Detalles_factura_cliente/lista');
    }

    public function destroy($id)
    {
        Detalles_factura_cliente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Detalles_factura_cliente/lista');
    }


 
}

