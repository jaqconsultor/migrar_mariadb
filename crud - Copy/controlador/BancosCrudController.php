<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Bancos;
use Session;
use DB;

class BancosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Bancos::all();
        return view('crud/crudbancos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Bancos';
        return view('crud/crudbancos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Bancos::create([
        'cod_banco'=>$request->cod_banco,
        'nombre_banco'=>$request->nombre_banco,
        ]);
        return redirect('/Cruds/Bancos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Bancos::where('id','=',$id)->first();
        return view('crud/crudbancos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Bancos::Find($id);

        $grabar->cod_banco=$request->cod_banco;
        $grabar->nombre_banco=$request->nombre_banco;

        $grabar->save();

        return redirect('/Cruds/Bancos/lista');
    }

    public function destroy($id)
    {
        Bancos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Bancos/lista');
    }


 
}

