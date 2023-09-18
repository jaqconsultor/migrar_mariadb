<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Facturas_compras_detalle;
use Session;
use DB;

class Facturas_compras_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Facturas_compras_detalle::all();
        return view('crud/crudfacturas_compras_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Facturas_compras_detalle';
        return view('crud/crudfacturas_compras_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Facturas_compras_detalle::create([
        'id_registro'=>$request->id_registro,
        'id_fac_prov'=>$request->id_fac_prov,
        'des_concepto'=>$request->des_concepto,
        'cantidad'=>$request->cantidad,
        'monto'=>$request->monto,
        'monto_total'=>$request->monto_total,
        'id_factura_compra'=>$request->id_factura_compra,
        ]);
        return redirect('/Cruds/Facturas_compras_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Facturas_compras_detalle::where('id','=',$id)->first();
        return view('crud/crudfacturas_compras_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Facturas_compras_detalle::Find($id);

        $grabar->id_registro=$request->id_registro;
        $grabar->id_fac_prov=$request->id_fac_prov;
        $grabar->des_concepto=$request->des_concepto;
        $grabar->cantidad=$request->cantidad;
        $grabar->monto=$request->monto;
        $grabar->monto_total=$request->monto_total;
        $grabar->id_factura_compra=$request->id_factura_compra;

        $grabar->save();

        return redirect('/Cruds/Facturas_compras_detalle/lista');
    }

    public function destroy($id)
    {
        Facturas_compras_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Facturas_compras_detalle/lista');
    }


 
}

