<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pbcatfmt;
use Session;
use DB;

class PbcatfmtCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pbcatfmt::all();
        return view('crud/crudpbcatfmt/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pbcatfmt';
        return view('crud/crudpbcatfmt/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pbcatfmt::create([
        'pbf_name'=>$request->pbf_name,
        'pbf_frmt'=>$request->pbf_frmt,
        'pbf_type'=>$request->pbf_type,
        'pbf_cntr'=>$request->pbf_cntr,
        ]);
        return redirect('/Cruds/Pbcatfmt/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pbcatfmt::where('id','=',$id)->first();
        return view('crud/crudpbcatfmt/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pbcatfmt::Find($id);

        $grabar->pbf_name=$request->pbf_name;
        $grabar->pbf_frmt=$request->pbf_frmt;
        $grabar->pbf_type=$request->pbf_type;
        $grabar->pbf_cntr=$request->pbf_cntr;

        $grabar->save();

        return redirect('/Cruds/Pbcatfmt/lista');
    }

    public function destroy($id)
    {
        Pbcatfmt::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pbcatfmt/lista');
    }


 
}

