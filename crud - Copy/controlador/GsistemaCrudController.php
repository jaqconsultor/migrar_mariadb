<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Gsistema;
use Session;
use DB;

class GsistemaCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Gsistema::all();
        return view('crud/crudgsistema/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Gsistema';
        return view('crud/crudgsistema/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Gsistema::create([
        'id_medico'=>$request->id_medico,
        'nomcorto'=>$request->nomcorto,
        'clave'=>$request->clave,
        'ulthisto'=>$request->ulthisto,
        ]);
        return redirect('/Cruds/Gsistema/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Gsistema::where('id','=',$id)->first();
        return view('crud/crudgsistema/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Gsistema::Find($id);

        $grabar->id_medico=$request->id_medico;
        $grabar->nomcorto=$request->nomcorto;
        $grabar->clave=$request->clave;
        $grabar->ulthisto=$request->ulthisto;

        $grabar->save();

        return redirect('/Cruds/Gsistema/lista');
    }

    public function destroy($id)
    {
        Gsistema::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Gsistema/lista');
    }


 
}

