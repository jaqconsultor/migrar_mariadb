<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Ppacient;
use Session;
use DB;

class PpacientCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Ppacient::all();
        return view('crud/crudppacient/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Ppacient';
        return view('crud/crudppacient/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Ppacient::create([
        'cedula'=>$request->cedula,
        'apellidos'=>$request->apellidos,
        'nombres'=>$request->nombres,
        'sexo'=>$request->sexo,
        'fnacimient'=>$request->fnacimient,
        'telefono'=>$request->telefono,
        'codesegemp'=>$request->codesegemp,
        'nhistoria'=>$request->nhistoria,
        'ultconsu'=>$request->ultconsu,
        ]);
        return redirect('/Cruds/Ppacient/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Ppacient::where('id','=',$id)->first();
        return view('crud/crudppacient/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Ppacient::Find($id);

        $grabar->cedula=$request->cedula;
        $grabar->apellidos=$request->apellidos;
        $grabar->nombres=$request->nombres;
        $grabar->sexo=$request->sexo;
        $grabar->fnacimient=$request->fnacimient;
        $grabar->telefono=$request->telefono;
        $grabar->codesegemp=$request->codesegemp;
        $grabar->nhistoria=$request->nhistoria;
        $grabar->ultconsu=$request->ultconsu;

        $grabar->save();

        return redirect('/Cruds/Ppacient/lista');
    }

    public function destroy($id)
    {
        Ppacient::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Ppacient/lista');
    }


 
}

