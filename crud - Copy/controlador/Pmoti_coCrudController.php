<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pmoti_co;
use Session;
use DB;

class Pmoti_coCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pmoti_co::all();
        return view('crud/crudpmoti_co/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pmoti_co';
        return view('crud/crudpmoti_co/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pmoti_co::create([
        'codmoti'=>$request->codmoti,
        'nhistori'=>$request->nhistori,
        'nconsul'=>$request->nconsul,
        ]);
        return redirect('/Cruds/Pmoti_co/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pmoti_co::where('id','=',$id)->first();
        return view('crud/crudpmoti_co/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pmoti_co::Find($id);

        $grabar->codmoti=$request->codmoti;
        $grabar->nhistori=$request->nhistori;
        $grabar->nconsul=$request->nconsul;

        $grabar->save();

        return redirect('/Cruds/Pmoti_co/lista');
    }

    public function destroy($id)
    {
        Pmoti_co::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pmoti_co/lista');
    }


 
}

