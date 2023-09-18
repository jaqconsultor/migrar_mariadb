<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Representante;
use Session;
use DB;

class RepresentanteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Representante::all();
        return view('crud/crudrepresentante/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Representante';
        return view('crud/crudrepresentante/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Representante::create([
        'numhistoria'=>$request->numhistoria,
        'nombre'=>$request->nombre,
        'codeparentesco'=>$request->codeparentesco,
        'direccion'=>$request->direccion,
        ]);
        return redirect('/Cruds/Representante/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Representante::where('id','=',$id)->first();
        return view('crud/crudrepresentante/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Representante::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->nombre=$request->nombre;
        $grabar->codeparentesco=$request->codeparentesco;
        $grabar->direccion=$request->direccion;

        $grabar->save();

        return redirect('/Cruds/Representante/lista');
    }

    public function destroy($id)
    {
        Representante::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Representante/lista');
    }


 
}

