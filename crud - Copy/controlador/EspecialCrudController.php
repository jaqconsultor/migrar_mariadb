<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Especial;
use Session;
use DB;

class EspecialCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Especial::all();
        return view('crud/crudespecial/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Especial';
        return view('crud/crudespecial/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Especial::create([
        'codeespecial'=>$request->codeespecial,
        'especialidad'=>$request->especialidad,
        ]);
        return redirect('/Cruds/Especial/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Especial::where('id','=',$id)->first();
        return view('crud/crudespecial/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Especial::Find($id);

        $grabar->codeespecial=$request->codeespecial;
        $grabar->especialidad=$request->especialidad;

        $grabar->save();

        return redirect('/Cruds/Especial/lista');
    }

    public function destroy($id)
    {
        Especial::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Especial/lista');
    }


 
}

