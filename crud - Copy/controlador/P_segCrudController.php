<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_seg;
use Session;
use DB;

class P_segCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_seg::all();
        return view('crud/crudp_seg/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_seg';
        return view('crud/crudp_seg/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_seg::create([
        'codeseg'=>$request->codeseg,
        'nombre'=>$request->nombre,
        ]);
        return redirect('/Cruds/P_seg/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_seg::where('id','=',$id)->first();
        return view('crud/crudp_seg/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_seg::Find($id);

        $grabar->codeseg=$request->codeseg;
        $grabar->nombre=$request->nombre;

        $grabar->save();

        return redirect('/Cruds/P_seg/lista');
    }

    public function destroy($id)
    {
        P_seg::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_seg/lista');
    }


 
}

