<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Facturas_compras;
use Session;
use DB;

class Facturas_comprasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Facturas_compras::all();
        return view('crud/crudfacturas_compras/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Facturas_compras';
        return view('crud/crudfacturas_compras/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Facturas_compras::create([
        'id_factura_compra'=>$request->id_factura_compra,
        'cod_prov'=>$request->cod_prov,
        'id_tipo_concepto'=>$request->id_tipo_concepto,
        'fecha'=>$request->fecha,
        'estado'=>$request->estado,
        'nro_seniat'=>$request->nro_seniat,
        'nro_factura'=>$request->nro_factura,
        'mto_neto'=>$request->mto_neto,
        'mto_porc_iva'=>$request->mto_porc_iva,
        'mto_iva'=>$request->mto_iva,
        'mto_porc_ret_iva'=>$request->mto_porc_ret_iva,
        'mto_ret_iva'=>$request->mto_ret_iva,
        'mto_porc_ret_isrl'=>$request->mto_porc_ret_isrl,
        'mto_ret_isrl'=>$request->mto_ret_isrl,
        'mto_total_general'=>$request->mto_total_general,
        'nro_cxp'=>$request->nro_cxp,
        'mto_total'=>$request->mto_total,
        ]);
        return redirect('/Cruds/Facturas_compras/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Facturas_compras::where('id','=',$id)->first();
        return view('crud/crudfacturas_compras/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Facturas_compras::Find($id);

        $grabar->id_factura_compra=$request->id_factura_compra;
        $grabar->cod_prov=$request->cod_prov;
        $grabar->id_tipo_concepto=$request->id_tipo_concepto;
        $grabar->fecha=$request->fecha;
        $grabar->estado=$request->estado;
        $grabar->nro_seniat=$request->nro_seniat;
        $grabar->nro_factura=$request->nro_factura;
        $grabar->mto_neto=$request->mto_neto;
        $grabar->mto_porc_iva=$request->mto_porc_iva;
        $grabar->mto_iva=$request->mto_iva;
        $grabar->mto_porc_ret_iva=$request->mto_porc_ret_iva;
        $grabar->mto_ret_iva=$request->mto_ret_iva;
        $grabar->mto_porc_ret_isrl=$request->mto_porc_ret_isrl;
        $grabar->mto_ret_isrl=$request->mto_ret_isrl;
        $grabar->mto_total_general=$request->mto_total_general;
        $grabar->nro_cxp=$request->nro_cxp;
        $grabar->mto_total=$request->mto_total;

        $grabar->save();

        return redirect('/Cruds/Facturas_compras/lista');
    }

    public function destroy($id)
    {
        Facturas_compras::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Facturas_compras/lista');
    }


 
}

