<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Evolucion;
use Session;
use DB;

class EvolucionCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Evolucion::all();
        return view('crud/crudevolucion/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Evolucion';
        return view('crud/crudevolucion/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Evolucion::create([
        'especialidad'=>$request->especialidad,
        'ciudad'=>$request->ciudad,
        'logo'=>$request->logo,
        'linea_1'=>$request->linea_1,
        'linea_2'=>$request->linea_2,
        'linea_3'=>$request->linea_3,
        'lineag_1'=>$request->lineag_1,
        'lineag_2'=>$request->lineag_2,
        'clave'=>$request->clave,
        'fecha'=>$request->fecha,
        'rif'=>$request->rif,
        'reporte_vacio'=>$request->reporte_vacio,
        'moneda'=>$request->moneda,
        'impuesto'=>$request->impuesto,
        'por_impues'=>$request->por_impues,
        'am_pm'=>$request->am_pm,
        'cantidad_paciente'=>$request->cantidad_paciente,
        'lunes_i'=>$request->lunes_i,
        'lunes_f'=>$request->lunes_f,
        'martes_i'=>$request->martes_i,
        'martes_f'=>$request->martes_f,
        'miercoles_i'=>$request->miercoles_i,
        'miercoles_f'=>$request->miercoles_f,
        'jueves_i'=>$request->jueves_i,
        'jueves_f'=>$request->jueves_f,
        'vienes_i'=>$request->vienes_i,
        'viernes_f'=>$request->viernes_f,
        'sabado_i'=>$request->sabado_i,
        'sabado_f'=>$request->sabado_f,
        'tiempo_paci'=>$request->tiempo_paci,
        'domingo_i'=>$request->domingo_i,
        'domigo_f'=>$request->domigo_f,
        'lunes'=>$request->lunes,
        'martes'=>$request->martes,
        'miercoles'=>$request->miercoles,
        'jueves'=>$request->jueves,
        'viernes'=>$request->viernes,
        'sabado'=>$request->sabado,
        'domingo'=>$request->domingo,
        'feriado'=>$request->feriado,
        'cedula'=>$request->cedula,
        'min_salud'=>$request->min_salud,
        'col_med'=>$request->col_med,
        'cita_previa'=>$request->cita_previa,
        'telefono'=>$request->telefono,
        'cobra_honorarios'=>$request->cobra_honorarios,
        'por_cobranza'=>$request->por_cobranza,
        'por_retención_seg'=>$request->por_retención_seg,
        'por_retención_part'=>$request->por_retención_part,
        'accionista'=>$request->accionista,
        'consultorio'=>$request->consultorio,
        'contrasena'=>$request->contrasena,
        'paga_iva'=>$request->paga_iva,
        'sms_proveedor'=>$request->sms_proveedor,
        'sms_user'=>$request->sms_user,
        'sms_clave'=>$request->sms_clave,
        'sms_cantidad_total'=>$request->sms_cantidad_total,
        'sms_telefono_llamada'=>$request->sms_telefono_llamada,
        'sms_sexo_medico'=>$request->sms_sexo_medico,
        'correo_med'=>$request->correo_med,
        ]);
        return redirect('/Cruds/Evolucion/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Evolucion::where('id','=',$id)->first();
        return view('crud/crudevolucion/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Evolucion::Find($id);

        $grabar->especialidad=$request->especialidad;
        $grabar->ciudad=$request->ciudad;
        $grabar->logo=$request->logo;
        $grabar->linea_1=$request->linea_1;
        $grabar->linea_2=$request->linea_2;
        $grabar->linea_3=$request->linea_3;
        $grabar->lineag_1=$request->lineag_1;
        $grabar->lineag_2=$request->lineag_2;
        $grabar->clave=$request->clave;
        $grabar->fecha=$request->fecha;
        $grabar->rif=$request->rif;
        $grabar->reporte_vacio=$request->reporte_vacio;
        $grabar->moneda=$request->moneda;
        $grabar->impuesto=$request->impuesto;
        $grabar->por_impues=$request->por_impues;
        $grabar->am_pm=$request->am_pm;
        $grabar->cantidad_paciente=$request->cantidad_paciente;
        $grabar->lunes_i=$request->lunes_i;
        $grabar->lunes_f=$request->lunes_f;
        $grabar->martes_i=$request->martes_i;
        $grabar->martes_f=$request->martes_f;
        $grabar->miercoles_i=$request->miercoles_i;
        $grabar->miercoles_f=$request->miercoles_f;
        $grabar->jueves_i=$request->jueves_i;
        $grabar->jueves_f=$request->jueves_f;
        $grabar->vienes_i=$request->vienes_i;
        $grabar->viernes_f=$request->viernes_f;
        $grabar->sabado_i=$request->sabado_i;
        $grabar->sabado_f=$request->sabado_f;
        $grabar->tiempo_paci=$request->tiempo_paci;
        $grabar->domingo_i=$request->domingo_i;
        $grabar->domigo_f=$request->domigo_f;
        $grabar->lunes=$request->lunes;
        $grabar->martes=$request->martes;
        $grabar->miercoles=$request->miercoles;
        $grabar->jueves=$request->jueves;
        $grabar->viernes=$request->viernes;
        $grabar->sabado=$request->sabado;
        $grabar->domingo=$request->domingo;
        $grabar->feriado=$request->feriado;
        $grabar->cedula=$request->cedula;
        $grabar->min_salud=$request->min_salud;
        $grabar->col_med=$request->col_med;
        $grabar->cita_previa=$request->cita_previa;
        $grabar->telefono=$request->telefono;
        $grabar->cobra_honorarios=$request->cobra_honorarios;
        $grabar->por_cobranza=$request->por_cobranza;
        $grabar->por_retención_seg=$request->por_retención_seg;
        $grabar->por_retención_part=$request->por_retención_part;
        $grabar->accionista=$request->accionista;
        $grabar->consultorio=$request->consultorio;
        $grabar->contrasena=$request->contrasena;
        $grabar->paga_iva=$request->paga_iva;
        $grabar->sms_proveedor=$request->sms_proveedor;
        $grabar->sms_user=$request->sms_user;
        $grabar->sms_clave=$request->sms_clave;
        $grabar->sms_cantidad_total=$request->sms_cantidad_total;
        $grabar->sms_telefono_llamada=$request->sms_telefono_llamada;
        $grabar->sms_sexo_medico=$request->sms_sexo_medico;
        $grabar->correo_med=$request->correo_med;

        $grabar->save();

        return redirect('/Cruds/Evolucion/lista');
    }

    public function destroy($id)
    {
        Evolucion::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Evolucion/lista');
    }


 
}

