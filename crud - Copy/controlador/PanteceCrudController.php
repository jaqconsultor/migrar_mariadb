<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pantece;
use Session;
use DB;

class PanteceCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pantece::all();
        return view('crud/crudpantece/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pantece';
        return view('crud/crudpantece/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pantece::create([
        'nhisto'=>$request->nhisto,
        'codante'=>$request->codante,
        'detalle'=>$request->detalle,
        'tipo'=>$request->tipo,
        'descrip'=>$request->descrip,
        'consul'=>$request->consul,
        ]);
        return redirect('/Cruds/Pantece/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pantece::where('id','=',$id)->first();
        return view('crud/crudpantece/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pantece::Find($id);

        $grabar->nhisto=$request->nhisto;
        $grabar->codante=$request->codante;
        $grabar->detalle=$request->detalle;
        $grabar->tipo=$request->tipo;
        $grabar->descrip=$request->descrip;
        $grabar->consul=$request->consul;

        $grabar->save();

        return redirect('/Cruds/Pantece/lista');
    }

    public function destroy($id)
    {
        Pantece::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pantece/lista');
    }


 
}

