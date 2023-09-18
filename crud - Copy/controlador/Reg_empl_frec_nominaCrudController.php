<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Reg_empl_frec_nomina;
use Session;
use DB;

class Reg_empl_frec_nominaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Reg_empl_frec_nomina::all();
        return view('crud/crudreg_empl_frec_nomina/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Reg_empl_frec_nomina';
        return view('crud/crudreg_empl_frec_nomina/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Reg_empl_frec_nomina::create([
        'frecuencia_nomina'=>$request->frecuencia_nomina,
        'nombre_frecuencia'=>$request->nombre_frecuencia,
        ]);
        return redirect('/Cruds/Reg_empl_frec_nomina/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Reg_empl_frec_nomina::where('id','=',$id)->first();
        return view('crud/crudreg_empl_frec_nomina/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Reg_empl_frec_nomina::Find($id);

        $grabar->frecuencia_nomina=$request->frecuencia_nomina;
        $grabar->nombre_frecuencia=$request->nombre_frecuencia;

        $grabar->save();

        return redirect('/Cruds/Reg_empl_frec_nomina/lista');
    }

    public function destroy($id)
    {
        Reg_empl_frec_nomina::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Reg_empl_frec_nomina/lista');
    }


 
}

