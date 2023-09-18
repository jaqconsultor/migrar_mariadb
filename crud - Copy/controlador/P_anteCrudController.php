<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\P_ante;
use Session;
use DB;

class P_anteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=P_ante::all();
        return view('crud/crudp_ante/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear P_ante';
        return view('crud/crudp_ante/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        P_ante::create([
        'codante'=>$request->codante,
        'codtipo'=>$request->codtipo,
        'descrip'=>$request->descrip,
        ]);
        return redirect('/Cruds/P_ante/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=P_ante::where('id','=',$id)->first();
        return view('crud/crudp_ante/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=P_ante::Find($id);

        $grabar->codante=$request->codante;
        $grabar->codtipo=$request->codtipo;
        $grabar->descrip=$request->descrip;

        $grabar->save();

        return redirect('/Cruds/P_ante/lista');
    }

    public function destroy($id)
    {
        P_ante::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/P_ante/lista');
    }


 
}

