<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Registro_empleados_eje_detalle;
use Session;
use DB;

class Registro_empleados_eje_detalleCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Registro_empleados_eje_detalle::all();
        return view('crud/crudregistro_empleados_eje_detalle/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Registro_empleados_eje_detalle';
        return view('crud/crudregistro_empleados_eje_detalle/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Registro_empleados_eje_detalle::create([
        'nro_nomina'=>$request->nro_nomina,
        'nro_empleado'=>$request->nro_empleado,
        'nro_cxp'=>$request->nro_cxp,
        'monto_empleado'=>$request->monto_empleado,
        ]);
        return redirect('/Cruds/Registro_empleados_eje_detalle/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Registro_empleados_eje_detalle::where('id','=',$id)->first();
        return view('crud/crudregistro_empleados_eje_detalle/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Registro_empleados_eje_detalle::Find($id);

        $grabar->nro_nomina=$request->nro_nomina;
        $grabar->nro_empleado=$request->nro_empleado;
        $grabar->nro_cxp=$request->nro_cxp;
        $grabar->monto_empleado=$request->monto_empleado;

        $grabar->save();

        return redirect('/Cruds/Registro_empleados_eje_detalle/lista');
    }

    public function destroy($id)
    {
        Registro_empleados_eje_detalle::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Registro_empleados_eje_detalle/lista');
    }


 
}

