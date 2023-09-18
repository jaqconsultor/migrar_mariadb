<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Examenes;
use Session;
use DB;

class ExamenesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Examenes::all();
        return view('crud/crudexamenes/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Examenes';
        return view('crud/crudexamenes/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Examenes::create([
        'codeexamen'=>$request->codeexamen,
        'examen'=>$request->examen,
        'codetipo'=>$request->codetipo,
        ]);
        return redirect('/Cruds/Examenes/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Examenes::where('id','=',$id)->first();
        return view('crud/crudexamenes/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Examenes::Find($id);

        $grabar->codeexamen=$request->codeexamen;
        $grabar->examen=$request->examen;
        $grabar->codetipo=$request->codetipo;

        $grabar->save();

        return redirect('/Cruds/Examenes/lista');
    }

    public function destroy($id)
    {
        Examenes::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Examenes/lista');
    }


 
}

