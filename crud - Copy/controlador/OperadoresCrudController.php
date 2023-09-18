<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Operadores;
use Session;
use DB;

class OperadoresCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Operadores::all();
        return view('crud/crudoperadores/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Operadores';
        return view('crud/crudoperadores/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Operadores::create([
        'primera'=>$request->primera,
        'segunda'=>$request->segunda,
        'nonbre'=>$request->nonbre,
        'nivel'=>$request->nivel,
        ]);
        return redirect('/Cruds/Operadores/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Operadores::where('id','=',$id)->first();
        return view('crud/crudoperadores/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Operadores::Find($id);

        $grabar->primera=$request->primera;
        $grabar->segunda=$request->segunda;
        $grabar->nonbre=$request->nonbre;
        $grabar->nivel=$request->nivel;

        $grabar->save();

        return redirect('/Cruds/Operadores/lista');
    }

    public function destroy($id)
    {
        Operadores::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Operadores/lista');
    }


 
}

