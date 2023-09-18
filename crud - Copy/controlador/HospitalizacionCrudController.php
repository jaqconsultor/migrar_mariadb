<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Hospitalizacion;
use Session;
use DB;

class HospitalizacionCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Hospitalizacion::all();
        return view('crud/crudhospitalizacion/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Hospitalizacion';
        return view('crud/crudhospitalizacion/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Hospitalizacion::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'diagprev'=>$request->diagprev,
        'indiprev'=>$request->indiprev,
        'dieta'=>$request->dieta,
        'habitacion'=>$request->habitacion,
        'hospital'=>$request->hospital,
        ]);
        return redirect('/Cruds/Hospitalizacion/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Hospitalizacion::where('id','=',$id)->first();
        return view('crud/crudhospitalizacion/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Hospitalizacion::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->diagprev=$request->diagprev;
        $grabar->indiprev=$request->indiprev;
        $grabar->dieta=$request->dieta;
        $grabar->habitacion=$request->habitacion;
        $grabar->hospital=$request->hospital;

        $grabar->save();

        return redirect('/Cruds/Hospitalizacion/lista');
    }

    public function destroy($id)
    {
        Hospitalizacion::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Hospitalizacion/lista');
    }


 
}

