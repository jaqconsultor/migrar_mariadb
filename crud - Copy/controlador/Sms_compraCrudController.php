<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Sms_compra;
use Session;
use DB;

class Sms_compraCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Sms_compra::all();
        return view('crud/crudsms_compra/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Sms_compra';
        return view('crud/crudsms_compra/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Sms_compra::create([
        'conse_compra'=>$request->conse_compra,
        'fecha_compra'=>$request->fecha_compra,
        'monto_compra'=>$request->monto_compra,
        'cantidad_compra'=>$request->cantidad_compra,
        ]);
        return redirect('/Cruds/Sms_compra/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Sms_compra::where('id','=',$id)->first();
        return view('crud/crudsms_compra/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Sms_compra::Find($id);

        $grabar->conse_compra=$request->conse_compra;
        $grabar->fecha_compra=$request->fecha_compra;
        $grabar->monto_compra=$request->monto_compra;
        $grabar->cantidad_compra=$request->cantidad_compra;

        $grabar->save();

        return redirect('/Cruds/Sms_compra/lista');
    }

    public function destroy($id)
    {
        Sms_compra::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Sms_compra/lista');
    }


 
}

