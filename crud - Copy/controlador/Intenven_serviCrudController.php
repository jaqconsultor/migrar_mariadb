<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Intenven_servi;
use Session;
use DB;

class Intenven_serviCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Intenven_servi::all();
        return view('crud/crudintenven_servi/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Intenven_servi';
        return view('crud/crudintenven_servi/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Intenven_servi::create([
        'codigo'=>$request->codigo,
        'nombre'=>$request->nombre,
        'precio_principal'=>$request->precio_principal,
        'precio_auxiliar'=>$request->precio_auxiliar,
        ]);
        return redirect('/Cruds/Intenven_servi/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Intenven_servi::where('id','=',$id)->first();
        return view('crud/crudintenven_servi/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Intenven_servi::Find($id);

        $grabar->codigo=$request->codigo;
        $grabar->nombre=$request->nombre;
        $grabar->precio_principal=$request->precio_principal;
        $grabar->precio_auxiliar=$request->precio_auxiliar;

        $grabar->save();

        return redirect('/Cruds/Intenven_servi/lista');
    }

    public function destroy($id)
    {
        Intenven_servi::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Intenven_servi/lista');
    }


 
}

