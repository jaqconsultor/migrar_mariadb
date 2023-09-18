<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pbcatvld;
use Session;
use DB;

class PbcatvldCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pbcatvld::all();
        return view('crud/crudpbcatvld/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pbcatvld';
        return view('crud/crudpbcatvld/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pbcatvld::create([
        'pbv_name'=>$request->pbv_name,
        'pbv_vald'=>$request->pbv_vald,
        'pbv_type'=>$request->pbv_type,
        'pbv_cntr'=>$request->pbv_cntr,
        'pbv_msg'=>$request->pbv_msg,
        ]);
        return redirect('/Cruds/Pbcatvld/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pbcatvld::where('id','=',$id)->first();
        return view('crud/crudpbcatvld/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pbcatvld::Find($id);

        $grabar->pbv_name=$request->pbv_name;
        $grabar->pbv_vald=$request->pbv_vald;
        $grabar->pbv_type=$request->pbv_type;
        $grabar->pbv_cntr=$request->pbv_cntr;
        $grabar->pbv_msg=$request->pbv_msg;

        $grabar->save();

        return redirect('/Cruds/Pbcatvld/lista');
    }

    public function destroy($id)
    {
        Pbcatvld::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pbcatvld/lista');
    }


 
}

