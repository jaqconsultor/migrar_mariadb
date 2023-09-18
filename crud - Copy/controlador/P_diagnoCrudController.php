<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_diagno;
use Session;
use DB;

class P_diagnoCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_diagno::all();
        return view('crud/crudp_diagno/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_diagno';
        return view('crud/crudp_diagno/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_diagno::create([
        'codiagn'=>$request->codiagn,
        'descrip'=>$request->descrip,
        ]);
        return redirect('/Cruds/P_diagno/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_diagno::where('id','=',$id)->first();
        return view('crud/crudp_diagno/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_diagno::Find($id);

        $grabar->codiagn=$request->codiagn;
        $grabar->descrip=$request->descrip;

        $grabar->save();

        return redirect('/Cruds/P_diagno/lista');
    }

    public function destroy($id)
    {
        P_diagno::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_diagno/lista');
    }


 
}

