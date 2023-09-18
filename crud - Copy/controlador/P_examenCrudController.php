<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_examen;
use Session;
use DB;

class P_examenCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_examen::all();
        return view('crud/crudp_examen/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_examen';
        return view('crud/crudp_examen/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_examen::create([
        'codexa'=>$request->codexa,
        'codetip'=>$request->codetip,
        'examen'=>$request->examen,
        ]);
        return redirect('/Cruds/P_examen/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_examen::where('id','=',$id)->first();
        return view('crud/crudp_examen/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_examen::Find($id);

        $grabar->codexa=$request->codexa;
        $grabar->codetip=$request->codetip;
        $grabar->examen=$request->examen;

        $grabar->save();

        return redirect('/Cruds/P_examen/lista');
    }

    public function destroy($id)
    {
        P_examen::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_examen/lista');
    }


 
}

