<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Motivo_factura_prov;
use Session;
use DB;

class Motivo_factura_provCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Motivo_factura_prov::all();
        return view('crud/crudmotivo_factura_prov/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Motivo_factura_prov';
        return view('crud/crudmotivo_factura_prov/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Motivo_factura_prov::create([
        'id_fac_prov'=>$request->id_fac_prov,
        'des_concepto'=>$request->des_concepto,
        'monto'=>$request->monto,
        ]);
        return redirect('/Cruds/Motivo_factura_prov/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Motivo_factura_prov::where('id','=',$id)->first();
        return view('crud/crudmotivo_factura_prov/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Motivo_factura_prov::Find($id);

        $grabar->id_fac_prov=$request->id_fac_prov;
        $grabar->des_concepto=$request->des_concepto;
        $grabar->monto=$request->monto;

        $grabar->save();

        return redirect('/Cruds/Motivo_factura_prov/lista');
    }

    public function destroy($id)
    {
        Motivo_factura_prov::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Motivo_factura_prov/lista');
    }


 
}

