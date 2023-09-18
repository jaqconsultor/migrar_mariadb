<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Cuentas_x_pagar;
use Session;
use DB;

class Cuentas_x_pagarCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Cuentas_x_pagar::all();
        return view('crud/crudcuentas_x_pagar/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Cuentas_x_pagar';
        return view('crud/crudcuentas_x_pagar/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Cuentas_x_pagar::create([
        'nro_cxp'=>$request->nro_cxp,
        'origen_cxp'=>$request->origen_cxp,
        'fec_cxp'=>$request->fec_cxp,
        'edo_cxp'=>$request->edo_cxp,
        'tipo_cxp'=>$request->tipo_cxp,
        'conc_cxp'=>$request->conc_cxp,
        'cxp_codigo'=>$request->cxp_codigo,
        'cxp_descripcion'=>$request->cxp_descripcion,
        'fec_docum'=>$request->fec_docum,
        'cxp_nro_control'=>$request->cxp_nro_control,
        'cxp_nro_factura'=>$request->cxp_nro_factura,
        'cxp_referencia'=>$request->cxp_referencia,
        'cxp_mto_neto'=>$request->cxp_mto_neto,
        'cxp_ret_isrl'=>$request->cxp_ret_isrl,
        'cxp_m_ret_isrl'=>$request->cxp_m_ret_isrl,
        'cxp_iva'=>$request->cxp_iva,
        'cxp_mto_iva'=>$request->cxp_mto_iva,
        'cxp_mto_total'=>$request->cxp_mto_total,
        'cxp_ret_iva'=>$request->cxp_ret_iva,
        'cxp_m_ret_iva'=>$request->cxp_m_ret_iva,
        'cxp_mto_total_pagar'=>$request->cxp_mto_total_pagar,
        'cxp_saldo_a_pagar'=>$request->cxp_saldo_a_pagar,
        'cxp_chekear'=>$request->cxp_chekear,
        'cxp_forma'=>$request->cxp_forma,
        ]);
        return redirect('/Cruds/Cuentas_x_pagar/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Cuentas_x_pagar::where('id','=',$id)->first();
        return view('crud/crudcuentas_x_pagar/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Cuentas_x_pagar::Find($id);

        $grabar->nro_cxp=$request->nro_cxp;
        $grabar->origen_cxp=$request->origen_cxp;
        $grabar->fec_cxp=$request->fec_cxp;
        $grabar->edo_cxp=$request->edo_cxp;
        $grabar->tipo_cxp=$request->tipo_cxp;
        $grabar->conc_cxp=$request->conc_cxp;
        $grabar->cxp_codigo=$request->cxp_codigo;
        $grabar->cxp_descripcion=$request->cxp_descripcion;
        $grabar->fec_docum=$request->fec_docum;
        $grabar->cxp_nro_control=$request->cxp_nro_control;
        $grabar->cxp_nro_factura=$request->cxp_nro_factura;
        $grabar->cxp_referencia=$request->cxp_referencia;
        $grabar->cxp_mto_neto=$request->cxp_mto_neto;
        $grabar->cxp_ret_isrl=$request->cxp_ret_isrl;
        $grabar->cxp_m_ret_isrl=$request->cxp_m_ret_isrl;
        $grabar->cxp_iva=$request->cxp_iva;
        $grabar->cxp_mto_iva=$request->cxp_mto_iva;
        $grabar->cxp_mto_total=$request->cxp_mto_total;
        $grabar->cxp_ret_iva=$request->cxp_ret_iva;
        $grabar->cxp_m_ret_iva=$request->cxp_m_ret_iva;
        $grabar->cxp_mto_total_pagar=$request->cxp_mto_total_pagar;
        $grabar->cxp_saldo_a_pagar=$request->cxp_saldo_a_pagar;
        $grabar->cxp_chekear=$request->cxp_chekear;
        $grabar->cxp_forma=$request->cxp_forma;

        $grabar->save();

        return redirect('/Cruds/Cuentas_x_pagar/lista');
    }

    public function destroy($id)
    {
        Cuentas_x_pagar::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Cuentas_x_pagar/lista');
    }


 
}

