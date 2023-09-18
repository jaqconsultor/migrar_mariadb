<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pconsult;
use Session;
use DB;

class PconsultCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pconsult::all();
        return view('crud/crudpconsult/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pconsult';
        return view('crud/crudpconsult/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pconsult::create([
        'nconsul'=>$request->nconsul,
        'nhisto'=>$request->nhisto,
        'enfactual'=>$request->enfactual,
        'evolu'=>$request->evolu,
        'tratami'=>$request->tratami,
        'exa_fi'=>$request->exa_fi,
        'image'=>$request->image,
        ]);
        return redirect('/Cruds/Pconsult/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pconsult::where('id','=',$id)->first();
        return view('crud/crudpconsult/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pconsult::Find($id);

        $grabar->nconsul=$request->nconsul;
        $grabar->nhisto=$request->nhisto;
        $grabar->enfactual=$request->enfactual;
        $grabar->evolu=$request->evolu;
        $grabar->tratami=$request->tratami;
        $grabar->exa_fi=$request->exa_fi;
        $grabar->image=$request->image;

        $grabar->save();

        return redirect('/Cruds/Pconsult/lista');
    }

    public function destroy($id)
    {
        Pconsult::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pconsult/lista');
    }


 
}

