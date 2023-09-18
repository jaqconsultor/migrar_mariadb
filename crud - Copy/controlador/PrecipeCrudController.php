<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Precipe;
use Session;
use DB;

class PrecipeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Precipe::all();
        return view('crud/crudprecipe/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Precipe';
        return view('crud/crudprecipe/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Precipe::create([
        'nhisto'=>$request->nhisto,
        'nconsul'=>$request->nconsul,
        'codmedi'=>$request->codmedi,
        'indicacio'=>$request->indicacio,
        ]);
        return redirect('/Cruds/Precipe/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Precipe::where('id','=',$id)->first();
        return view('crud/crudprecipe/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Precipe::Find($id);

        $grabar->nhisto=$request->nhisto;
        $grabar->nconsul=$request->nconsul;
        $grabar->codmedi=$request->codmedi;
        $grabar->indicacio=$request->indicacio;

        $grabar->save();

        return redirect('/Cruds/Precipe/lista');
    }

    public function destroy($id)
    {
        Precipe::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Precipe/lista');
    }


 
}

