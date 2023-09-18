<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Registro_empleados;
use Session;
use DB;

class Registro_empleadosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Registro_empleados::all();
        return view('crud/crudregistro_empleados/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Registro_empleados';
        return view('crud/crudregistro_empleados/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Registro_empleados::create([
        'nro_empleado'=>$request->nro_empleado,
        'fecha_creacion'=>$request->fecha_creacion,
        'status'=>$request->status,
        'cedula_empleado'=>$request->cedula_empleado,
        'nombre_empleado'=>$request->nombre_empleado,
        'tipo_nomina'=>$request->tipo_nomina,
        'frecuencia_nomina'=>$request->frecuencia_nomina,
        'monto_s1'=>$request->monto_s1,
        'monto_s2'=>$request->monto_s2,
        'monto_s3'=>$request->monto_s3,
        'monto_s4'=>$request->monto_s4,
        'monto_total'=>$request->monto_total,
        ]);
        return redirect('/Cruds/Registro_empleados/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Registro_empleados::where('id','=',$id)->first();
        return view('crud/crudregistro_empleados/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Registro_empleados::Find($id);

        $grabar->nro_empleado=$request->nro_empleado;
        $grabar->fecha_creacion=$request->fecha_creacion;
        $grabar->status=$request->status;
        $grabar->cedula_empleado=$request->cedula_empleado;
        $grabar->nombre_empleado=$request->nombre_empleado;
        $grabar->tipo_nomina=$request->tipo_nomina;
        $grabar->frecuencia_nomina=$request->frecuencia_nomina;
        $grabar->monto_s1=$request->monto_s1;
        $grabar->monto_s2=$request->monto_s2;
        $grabar->monto_s3=$request->monto_s3;
        $grabar->monto_s4=$request->monto_s4;
        $grabar->monto_total=$request->monto_total;

        $grabar->save();

        return redirect('/Cruds/Registro_empleados/lista');
    }

    public function destroy($id)
    {
        Registro_empleados::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Registro_empleados/lista');
    }


 
}

