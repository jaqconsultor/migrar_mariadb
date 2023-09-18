<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tipos_conceptos;
use Session;
use DB;

class Tipos_conceptosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Tipos_conceptos::all();
        return view('crud/crudtipos_conceptos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Tipos_conceptos';
        return view('crud/crudtipos_conceptos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Tipos_conceptos::create([
        'id_tipo_concepto'=>$request->id_tipo_concepto,
        'des_concepto'=>$request->des_concepto,
        ]);
        return redirect('/Cruds/Tipos_conceptos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Tipos_conceptos::where('id','=',$id)->first();
        return view('crud/crudtipos_conceptos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Tipos_conceptos::Find($id);

        $grabar->id_tipo_concepto=$request->id_tipo_concepto;
        $grabar->des_concepto=$request->des_concepto;

        $grabar->save();

        return redirect('/Cruds/Tipos_conceptos/lista');
    }

    public function destroy($id)
    {
        Tipos_conceptos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Tipos_conceptos/lista');
    }


 
}

