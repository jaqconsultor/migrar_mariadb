<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pprocedi;
use Session;
use DB;

class PprocediCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pprocedi::all();
        return view('crud/crudpprocedi/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pprocedi';
        return view('crud/crudpprocedi/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pprocedi::create([
        'nhisto'=>$request->nhisto,
        'nconsul'=>$request->nconsul,
        'procedi1'=>$request->procedi1,
        'procedi2'=>$request->procedi2,
        'procedi3'=>$request->procedi3,
        ]);
        return redirect('/Cruds/Pprocedi/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pprocedi::where('id','=',$id)->first();
        return view('crud/crudpprocedi/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pprocedi::Find($id);

        $grabar->nhisto=$request->nhisto;
        $grabar->nconsul=$request->nconsul;
        $grabar->procedi1=$request->procedi1;
        $grabar->procedi2=$request->procedi2;
        $grabar->procedi3=$request->procedi3;

        $grabar->save();

        return redirect('/Cruds/Pprocedi/lista');
    }

    public function destroy($id)
    {
        Pprocedi::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pprocedi/lista');
    }


 
}

