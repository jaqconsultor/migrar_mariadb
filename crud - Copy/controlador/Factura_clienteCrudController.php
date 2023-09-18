<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Factura_cliente;
use Session;
use DB;

class Factura_clienteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Factura_cliente::all();
        return view('crud/crudfactura_cliente/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Factura_cliente';
        return view('crud/crudfactura_cliente/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Factura_cliente::create([
        'numfactura'=>$request->numfactura,
        'cedu_rif'=>$request->cedu_rif,
        'fecha_factura'=>$request->fecha_factura,
        'fecha_vence_fact'=>$request->fecha_vence_fact,
        'fecha_cance_fact'=>$request->fecha_cance_fact,
        'cliente'=>$request->cliente,
        'status_factura'=>$request->status_factura,
        'tipo_factura'=>$request->tipo_factura,
        'paciente'=>$request->paciente,
        'nom_paciente'=>$request->nom_paciente,
        'tipo_precio'=>$request->tipo_precio,
        'nro_orden'=>$request->nro_orden,
        'total_costo'=>$request->total_costo,
        'total_neto'=>$request->total_neto,
        'total_bruto'=>$request->total_bruto,
        'total_final'=>$request->total_final,
        'total_descuento'=>$request->total_descuento,
        'descuento_linea'=>$request->descuento_linea,
        'notas'=>$request->notas,
        'hora_documento'=>$request->hora_documento,
        'monto_pac'=>$request->monto_pac,
        'monto_emp'=>$request->monto_emp,
        'numero_consulta'=>$request->numero_consulta,
        'numero_historia'=>$request->numero_historia,
        'tipo_doc'=>$request->tipo_doc,
        'medico'=>$request->medico,
        'nro_cxp'=>$request->nro_cxp,
        ]);
        return redirect('/Cruds/Factura_cliente/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Factura_cliente::where('id','=',$id)->first();
        return view('crud/crudfactura_cliente/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Factura_cliente::Find($id);

        $grabar->numfactura=$request->numfactura;
        $grabar->cedu_rif=$request->cedu_rif;
        $grabar->fecha_factura=$request->fecha_factura;
        $grabar->fecha_vence_fact=$request->fecha_vence_fact;
        $grabar->fecha_cance_fact=$request->fecha_cance_fact;
        $grabar->cliente=$request->cliente;
        $grabar->status_factura=$request->status_factura;
        $grabar->tipo_factura=$request->tipo_factura;
        $grabar->paciente=$request->paciente;
        $grabar->nom_paciente=$request->nom_paciente;
        $grabar->tipo_precio=$request->tipo_precio;
        $grabar->nro_orden=$request->nro_orden;
        $grabar->total_costo=$request->total_costo;
        $grabar->total_neto=$request->total_neto;
        $grabar->total_bruto=$request->total_bruto;
        $grabar->total_final=$request->total_final;
        $grabar->total_descuento=$request->total_descuento;
        $grabar->descuento_linea=$request->descuento_linea;
        $grabar->notas=$request->notas;
        $grabar->hora_documento=$request->hora_documento;
        $grabar->monto_pac=$request->monto_pac;
        $grabar->monto_emp=$request->monto_emp;
        $grabar->numero_consulta=$request->numero_consulta;
        $grabar->numero_historia=$request->numero_historia;
        $grabar->tipo_doc=$request->tipo_doc;
        $grabar->medico=$request->medico;
        $grabar->nro_cxp=$request->nro_cxp;

        $grabar->save();

        return redirect('/Cruds/Factura_cliente/lista');
    }

    public function destroy($id)
    {
        Factura_cliente::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Factura_cliente/lista');
    }


 
}

