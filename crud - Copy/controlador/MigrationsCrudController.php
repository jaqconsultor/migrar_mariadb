<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Migrations;
use Session;
use DB;

class MigrationsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Migrations::all();
        return view('crud/crudmigrations/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Migrations';
        return view('crud/crudmigrations/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Migrations::create([
        'migration'=>$request->migration,
        'batch'=>$request->batch
        ]);
        return redirect('/Cruds/Migrations/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Migrations::where('id','=',$id)->first();
        return view('crud/crudmigrations/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Migrations::Find($id);

        $grabar->migration=$request->migration;
        $grabar->batch=$request->batch;

        $grabar->save();

        return redirect('/Cruds/Migrations/lista');
    }

    public function destroy($id)
    {
        Migrations::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Migrations/lista');
    }


 
}

