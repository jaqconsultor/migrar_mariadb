<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Seg_emp;
use Session;
use DB;

class Seg_empCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Seg_emp::all();
        return view('crud/crudseg_emp/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Seg_emp';
        return view('crud/crudseg_emp/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Seg_emp::create([
        'codesegemp'=>$request->codesegemp,
        'nombre'=>$request->nombre,
        ]);
        return redirect('/Cruds/Seg_emp/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Seg_emp::where('id','=',$id)->first();
        return view('crud/crudseg_emp/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Seg_emp::Find($id);

        $grabar->codesegemp=$request->codesegemp;
        $grabar->nombre=$request->nombre;

        $grabar->save();

        return redirect('/Cruds/Seg_emp/lista');
    }

    public function destroy($id)
    {
        Seg_emp::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Seg_emp/lista');
    }


 
}

