<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_epecial;
use Session;
use DB;

class P_epecialCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_epecial::all();
        return view('crud/crudp_epecial/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_epecial';
        return view('crud/crudp_epecial/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_epecial::create([
        'codespe'=>$request->codespe,
        'especiali'=>$request->especiali,
        ]);
        return redirect('/Cruds/P_epecial/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_epecial::where('id','=',$id)->first();
        return view('crud/crudp_epecial/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_epecial::Find($id);

        $grabar->codespe=$request->codespe;
        $grabar->especiali=$request->especiali;

        $grabar->save();

        return redirect('/Cruds/P_epecial/lista');
    }

    public function destroy($id)
    {
        P_epecial::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_epecial/lista');
    }


 
}

