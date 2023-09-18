<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Diagnosticos;
use Session;
use DB;

class DiagnosticosCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Diagnosticos::all();
        return view('crud/cruddiagnosticos/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Diagnosticos';
        return view('crud/cruddiagnosticos/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Diagnosticos::create([
        'codediagnostico'=>$request->codediagnostico,
        'descripcion'=>$request->descripcion,
        ]);
        return redirect('/Cruds/Diagnosticos/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Diagnosticos::where('id','=',$id)->first();
        return view('crud/cruddiagnosticos/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Diagnosticos::Find($id);

        $grabar->codediagnostico=$request->codediagnostico;
        $grabar->descripcion=$request->descripcion;

        $grabar->save();

        return redirect('/Cruds/Diagnosticos/lista');
    }

    public function destroy($id)
    {
        Diagnosticos::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Diagnosticos/lista');
    }


 
}

