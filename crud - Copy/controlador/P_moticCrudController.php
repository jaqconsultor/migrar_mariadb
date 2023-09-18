<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_motic;
use Session;
use DB;

class P_moticCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_motic::all();
        return view('crud/crudp_motic/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_motic';
        return view('crud/crudp_motic/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_motic::create([
        'codmoti'=>$request->codmoti,
        'descrip'=>$request->descrip,
        ]);
        return redirect('/Cruds/P_motic/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_motic::where('id','=',$id)->first();
        return view('crud/crudp_motic/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_motic::Find($id);

        $grabar->codmoti=$request->codmoti;
        $grabar->descrip=$request->descrip;

        $grabar->save();

        return redirect('/Cruds/P_motic/lista');
    }

    public function destroy($id)
    {
        P_motic::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_motic/lista');
    }


 
}

