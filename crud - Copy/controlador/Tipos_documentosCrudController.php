<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tipos_documentos;
use Session;
use DB;

class Tipos_documentosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Tipos_documentos::all();
        return view('crud/crudtipos_documentos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Tipos_documentos';
        return view('crud/crudtipos_documentos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Tipos_documentos::create([
        'tip_documento'=>$request->tip_documento,
        'des_documento'=>$request->des_documento,
        ]);
        return redirect('/Cruds/Tipos_documentos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Tipos_documentos::where('id','=',$id)->first();
        return view('crud/crudtipos_documentos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Tipos_documentos::Find($id);

        $grabar->tip_documento=$request->tip_documento;
        $grabar->des_documento=$request->des_documento;

        $grabar->save();

        return redirect('/Cruds/Tipos_documentos/lista');
    }

    public function destroy($id)
    {
        Tipos_documentos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Tipos_documentos/lista');
    }


 
}

