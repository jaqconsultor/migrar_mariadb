<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Registro_empleados_eje;
use Session;
use DB;

class Registro_empleados_ejeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Registro_empleados_eje::all();
        return view('crud/crudregistro_empleados_eje/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Registro_empleados_eje';
        return view('crud/crudregistro_empleados_eje/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Registro_empleados_eje::create([
        'nro_nomina'=>$request->nro_nomina,
        'descripcion'=>$request->descripcion,
        'fecha_aplicacion'=>$request->fecha_aplicacion,
        'status'=>$request->status,
        'tipo_nomina'=>$request->tipo_nomina,
        'frecuencia_nomina'=>$request->frecuencia_nomina,
        'monto_total'=>$request->monto_total,
        ]);
        return redirect('/Cruds/Registro_empleados_eje/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Registro_empleados_eje::where('id','=',$id)->first();
        return view('crud/crudregistro_empleados_eje/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Registro_empleados_eje::Find($id);

        $grabar->nro_nomina=$request->nro_nomina;
        $grabar->descripcion=$request->descripcion;
        $grabar->fecha_aplicacion=$request->fecha_aplicacion;
        $grabar->status=$request->status;
        $grabar->tipo_nomina=$request->tipo_nomina;
        $grabar->frecuencia_nomina=$request->frecuencia_nomina;
        $grabar->monto_total=$request->monto_total;

        $grabar->save();

        return redirect('/Cruds/Registro_empleados_eje/lista');
    }

    public function destroy($id)
    {
        Registro_empleados_eje::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Registro_empleados_eje/lista');
    }


 
}

