<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pdiagno;
use Session;
use DB;

class PdiagnoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pdiagno::all();
        return view('crud/crudpdiagno/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pdiagno';
        return view('crud/crudpdiagno/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pdiagno::create([
        'nhisto'=>$request->nhisto,
        'nconsul'=>$request->nconsul,
        'codedia'=>$request->codedia,
        ]);
        return redirect('/Cruds/Pdiagno/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pdiagno::where('id','=',$id)->first();
        return view('crud/crudpdiagno/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pdiagno::Find($id);

        $grabar->nhisto=$request->nhisto;
        $grabar->nconsul=$request->nconsul;
        $grabar->codedia=$request->codedia;

        $grabar->save();

        return redirect('/Cruds/Pdiagno/lista');
    }

    public function destroy($id)
    {
        Pdiagno::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pdiagno/lista');
    }


 
}

