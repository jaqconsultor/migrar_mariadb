<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pbcatedt;
use Session;
use DB;

class PbcatedtCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pbcatedt::all();
        return view('crud/crudpbcatedt/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pbcatedt';
        return view('crud/crudpbcatedt/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pbcatedt::create([
        'pbe_name'=>$request->pbe_name,
        'pbe_edit'=>$request->pbe_edit,
        'pbe_type'=>$request->pbe_type,
        'pbe_cntr'=>$request->pbe_cntr,
        'pbe_seqn'=>$request->pbe_seqn,
        'pbe_flag'=>$request->pbe_flag,
        'pbe_work'=>$request->pbe_work,
        ]);
        return redirect('/Cruds/Pbcatedt/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pbcatedt::where('id','=',$id)->first();
        return view('crud/crudpbcatedt/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pbcatedt::Find($id);

        $grabar->pbe_name=$request->pbe_name;
        $grabar->pbe_edit=$request->pbe_edit;
        $grabar->pbe_type=$request->pbe_type;
        $grabar->pbe_cntr=$request->pbe_cntr;
        $grabar->pbe_seqn=$request->pbe_seqn;
        $grabar->pbe_flag=$request->pbe_flag;
        $grabar->pbe_work=$request->pbe_work;

        $grabar->save();

        return redirect('/Cruds/Pbcatedt/lista');
    }

    public function destroy($id)
    {
        Pbcatedt::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pbcatedt/lista');
    }


 
}

