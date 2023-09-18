<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Personal_access_tokens;
use Session;
use DB;

class Personal_access_tokensCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Personal_access_tokens::all();
        return view('crud/crudpersonal_access_tokens/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Personal_access_tokens';
        return view('crud/crudpersonal_access_tokens/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Personal_access_tokens::create([
        'tokenable_type'=>$request->tokenable_type,
        'tokenable_id'=>$request->tokenable_id,
        'name'=>$request->name,
        'token'=>$request->token,
        'abilities'=>$request->abilities,
        'last_used_at'=>$request->last_used_at,
        'expires_at'=>$request->expires_at,
        ]);
        return redirect('/Cruds/Personal_access_tokens/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Personal_access_tokens::where('id','=',$id)->first();
        return view('crud/crudpersonal_access_tokens/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Personal_access_tokens::Find($id);

        $grabar->tokenable_type=$request->tokenable_type;
        $grabar->tokenable_id=$request->tokenable_id;
        $grabar->name=$request->name;
        $grabar->token=$request->token;
        $grabar->abilities=$request->abilities;
        $grabar->last_used_at=$request->last_used_at;
        $grabar->expires_at=$request->expires_at;

        $grabar->save();

        return redirect('/Cruds/Personal_access_tokens/lista');
    }

    public function destroy($id)
    {
        Personal_access_tokens::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Personal_access_tokens/lista');
    }


 
}

