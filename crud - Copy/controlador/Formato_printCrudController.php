<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Formato_print;
use Session;
use DB;

class Formato_printCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Formato_print::all();
        return view('crud/crudformato_print/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Formato_print';
        return view('crud/crudformato_print/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Formato_print::create([
        'codigo'=>$request->codigo,
        'titulo'=>$request->titulo,
        'descripcion'=>$request->descripcion,
        'tipo'=>$request->tipo,
        ]);
        return redirect('/Cruds/Formato_print/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Formato_print::where('id','=',$id)->first();
        return view('crud/crudformato_print/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Formato_print::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->titulo=$request->titulo;
        $grabar->descripcion=$request->descripcion;
        $grabar->tipo=$request->tipo;

        $grabar->save();

        return redirect('/Cruds/Formato_print/lista');
    }

    public function destroy($id)
    {
        Formato_print::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Formato_print/lista');
    }


 
}

