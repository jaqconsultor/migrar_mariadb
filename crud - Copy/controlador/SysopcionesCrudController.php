<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Sysopciones;
use Session;
use DB;

class SysopcionesCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Sysopciones::all();
        return view('crud/crudsysopciones/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Sysopciones';
        return view('crud/crudsysopciones/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Sysopciones::create([
        'sistema_id'=>$request->sistema_id,
        'caso'=>$request->caso,
        'contexto'=>$request->contexto,
        'modulo'=>$request->modulo,
        'menu'=>$request->menu,
        'submenu'=>$request->submenu,
        'ordernum'=>$request->ordernum,
        'ruta'=>$request->ruta,
        'icon'=>$request->icon,
        'activo'=>$request->activo,
        'title'=>$request->title,
        'imagen'=>$request->imagen,
        'role'=>$request->role
        ]);
        return redirect('/Cruds/Sysopciones/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Sysopciones::where('id','=',$id)->first();
        return view('crud/crudsysopciones/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Sysopciones::Find($id);

        $grabar->sistema_id=$request->sistema_id;
        $grabar->caso=$request->caso;
        $grabar->contexto=$request->contexto;
        $grabar->modulo=$request->modulo;
        $grabar->menu=$request->menu;
        $grabar->submenu=$request->submenu;
        $grabar->ordernum=$request->ordernum;
        $grabar->ruta=$request->ruta;
        $grabar->icon=$request->icon;
        $grabar->activo=$request->activo;
        $grabar->title=$request->title;
        $grabar->imagen=$request->imagen;
        $grabar->role=$request->role;

        $grabar->save();

        return redirect('/Cruds/Sysopciones/lista');
    }

    public function destroy($id)
    {
        Sysopciones::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Sysopciones/lista');
    }


 
}

