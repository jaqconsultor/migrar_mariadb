<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Cola_dia_no_labor;
use Session;
use DB;

class Cola_dia_no_laborCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Cola_dia_no_labor::all();
        return view('crud/crudcola_dia_no_labor/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Cola_dia_no_labor';
        return view('crud/crudcola_dia_no_labor/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Cola_dia_no_labor::create([
        'dia'=>$request->dia,
        'tipo'=>$request->tipo,
        'motivo'=>$request->motivo,
        'medico'=>$request->medico,
        ]);
        return redirect('/Cruds/Cola_dia_no_labor/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Cola_dia_no_labor::where('id','=',$id)->first();
        return view('crud/crudcola_dia_no_labor/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Cola_dia_no_labor::Find($id);

        $grabar->dia=$request->dia;
        $grabar->tipo=$request->tipo;
        $grabar->motivo=$request->motivo;
        $grabar->medico=$request->medico;

        $grabar->save();

        return redirect('/Cruds/Cola_dia_no_labor/lista');
    }

    public function destroy($id)
    {
        Cola_dia_no_labor::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Cola_dia_no_labor/lista');
    }


 
}

