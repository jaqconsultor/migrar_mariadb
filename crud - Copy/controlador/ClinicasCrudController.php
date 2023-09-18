<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Clinicas;
use Session;
use DB;

class ClinicasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Clinicas::all();
        return view('crud/crudclinicas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Clinicas';
        return view('crud/crudclinicas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Clinicas::create([
        'cod_clin'=>$request->cod_clin,
        'nom_clin'=>$request->nom_clin,
        ]);
        return redirect('/Cruds/Clinicas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Clinicas::where('id','=',$id)->first();
        return view('crud/crudclinicas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Clinicas::Find($id);

        $grabar->cod_clin=$request->cod_clin;
        $grabar->nom_clin=$request->nom_clin;

        $grabar->save();

        return redirect('/Cruds/Clinicas/lista');
    }

    public function destroy($id)
    {
        Clinicas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Clinicas/lista');
    }


 
}

