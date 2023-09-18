<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_tipoe;
use Session;
use DB;

class P_tipoeCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_tipoe::all();
        return view('crud/crudp_tipoe/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_tipoe';
        return view('crud/crudp_tipoe/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_tipoe::create([
        'codexam'=>$request->codexam,
        'descrip'=>$request->descrip,
        ]);
        return redirect('/Cruds/P_tipoe/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_tipoe::where('id','=',$id)->first();
        return view('crud/crudp_tipoe/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_tipoe::Find($id);

        $grabar->codexam=$request->codexam;
        $grabar->descrip=$request->descrip;

        $grabar->save();

        return redirect('/Cruds/P_tipoe/lista');
    }

    public function destroy($id)
    {
        P_tipoe::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_tipoe/lista');
    }


 
}

