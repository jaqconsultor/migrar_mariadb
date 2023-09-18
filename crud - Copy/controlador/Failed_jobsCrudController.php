<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Failed_jobs;
use Session;
use DB;

class Failed_jobsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Failed_jobs::all();
        return view('crud/crudfailed_jobs/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Failed_jobs';
        return view('crud/crudfailed_jobs/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Failed_jobs::create([
        'uuid'=>$request->uuid,
        'connection'=>$request->connection,
        'queue'=>$request->queue
        ]);
        return redirect('/Cruds/Failed_jobs/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Failed_jobs::where('id','=',$id)->first();
        return view('crud/crudfailed_jobs/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Failed_jobs::Find($id);

        $grabar->uuid=$request->uuid;
        $grabar->connection=$request->connection;
        $grabar->queue=$request->queue;

        $grabar->save();

        return redirect('/Cruds/Failed_jobs/lista');
    }

    public function destroy($id)
    {
        Failed_jobs::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Failed_jobs/lista');
    }


 
}

