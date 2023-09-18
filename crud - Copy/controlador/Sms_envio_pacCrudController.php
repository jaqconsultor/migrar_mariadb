<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Sms_envio_pac;
use Session;
use DB;

class Sms_envio_pacCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Sms_envio_pac::all();
        return view('crud/crudsms_envio_pac/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Sms_envio_pac';
        return view('crud/crudsms_envio_pac/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Sms_envio_pac::create([
        'nrohistoria'=>$request->nrohistoria,
        'nroconsulta'=>$request->nroconsulta,
        'numero_cel'=>$request->numero_cel,
        'texto_sms'=>$request->texto_sms,
        'orden'=>$request->orden,
        ]);
        return redirect('/Cruds/Sms_envio_pac/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Sms_envio_pac::where('id','=',$id)->first();
        return view('crud/crudsms_envio_pac/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Sms_envio_pac::Find($id);

        $grabar->nrohistoria=$request->nrohistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->numero_cel=$request->numero_cel;
        $grabar->texto_sms=$request->texto_sms;
        $grabar->orden=$request->orden;

        $grabar->save();

        return redirect('/Cruds/Sms_envio_pac/lista');
    }

    public function destroy($id)
    {
        Sms_envio_pac::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Sms_envio_pac/lista');
    }


 
}

