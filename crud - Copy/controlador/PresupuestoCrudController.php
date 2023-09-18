<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Presupuesto;
use Session;
use DB;

class PresupuestoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Presupuesto::all();
        return view('crud/crudpresupuesto/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Presupuesto';
        return view('crud/crudpresupuesto/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Presupuesto::create([
        'cedula'=>$request->cedula,
        'nombre'=>$request->nombre,
        'direccion'=>$request->direccion,
        'telefono'=>$request->telefono,
        'nropresupuesto'=>$request->nropresupuesto,
        'fecha'=>$request->fecha,
        'cliente'=>$request->cliente,
        'nota'=>$request->nota,
        'numhistoria'=>$request->numhistoria,
        ]);
        return redirect('/Cruds/Presupuesto/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Presupuesto::where('id','=',$id)->first();
        return view('crud/crudpresupuesto/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Presupuesto::Find($id);

        $grabar->cedula=$request->cedula;
        $grabar->nombre=$request->nombre;
        $grabar->direccion=$request->direccion;
        $grabar->telefono=$request->telefono;
        $grabar->nropresupuesto=$request->nropresupuesto;
        $grabar->fecha=$request->fecha;
        $grabar->cliente=$request->cliente;
        $grabar->nota=$request->nota;
        $grabar->numhistoria=$request->numhistoria;

        $grabar->save();

        return redirect('/Cruds/Presupuesto/lista');
    }

    public function destroy($id)
    {
        Presupuesto::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Presupuesto/lista');
    }


 
}

