<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use Session;
use DB;

class ProveedorCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Proveedor::all();
        return view('crud/crudproveedor/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Proveedor';
        return view('crud/crudproveedor/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Proveedor::create([
        'cod_prov'=>$request->cod_prov,
        'proveedor'=>$request->proveedor,
        'rif'=>$request->rif,
        'direccion'=>$request->direccion,
        'telefono'=>$request->telefono,
        'contacto'=>$request->contacto,
        'celular'=>$request->celular,
        ]);
        return redirect('/Cruds/Proveedor/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Proveedor::where('id','=',$id)->first();
        return view('crud/crudproveedor/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Proveedor::Find($id);

        $grabar->cod_prov=$request->cod_prov;
        $grabar->proveedor=$request->proveedor;
        $grabar->rif=$request->rif;
        $grabar->direccion=$request->direccion;
        $grabar->telefono=$request->telefono;
        $grabar->contacto=$request->contacto;
        $grabar->celular=$request->celular;

        $grabar->save();

        return redirect('/Cruds/Proveedor/lista');
    }

    public function destroy($id)
    {
        Proveedor::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Proveedor/lista');
    }


 
}

