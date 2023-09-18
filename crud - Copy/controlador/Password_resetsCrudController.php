<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Password_resets;
use Session;
use DB;

class Password_resetsCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Password_resets::all();
        return view('crud/crudpassword_resets/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Password_resets';
        return view('crud/crudpassword_resets/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Password_resets::create([
        'iclave'=>$request->iclave,
        'email'=>$request->email,
        'token'=>$request->token,
        ]);
        return redirect('/Cruds/Password_resets/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Password_resets::where('id','=',$id)->first();
        return view('crud/crudpassword_resets/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Password_resets::Find($id);

        $grabar->iclave=$request->iclave;
        $grabar->email=$request->email;
        $grabar->token=$request->token;

        $grabar->save();

        return redirect('/Cruds/Password_resets/lista');
    }

    public function destroy($id)
    {
        Password_resets::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Password_resets/lista');
    }


 
}

