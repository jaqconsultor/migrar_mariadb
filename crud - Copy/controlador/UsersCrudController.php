<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Users;
use Session;
use DB;

class UsersCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Users::all();
        return view('crud/crudusers/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Users';
        return view('crud/crudusers/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Users::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'email_verified_at'=>$request->email_verified_at,
        'password'=>$request->password,
        'two_factor_secret'=>$request->two_factor_secret,
        'two_factor_recovery_codes'=>$request->two_factor_recovery_codes,
        'remember_token'=>$request->remember_token,
        'avatar'=>$request->avatar,
        'role'=>$request->role,
        'usercreated_at'=>$request->usercreated_at,
        'userupdated_at'=>$request->userupdated_at,
        'in_medico'=>$request->in_medico,
        'in_paciente'=>$request->in_paciente
        ]);
        return redirect('/Cruds/Users/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Users::where('id','=',$id)->first();
        return view('crud/crudusers/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Users::Find($id);

        $grabar->name=$request->name;
        $grabar->email=$request->email;
        $grabar->email_verified_at=$request->email_verified_at;
        $grabar->password=$request->password;
        $grabar->two_factor_secret=$request->two_factor_secret;
        $grabar->two_factor_recovery_codes=$request->two_factor_recovery_codes;
        $grabar->remember_token=$request->remember_token;
        $grabar->avatar=$request->avatar;
        $grabar->role=$request->role;
        $grabar->usercreated_at=$request->usercreated_at;
        $grabar->userupdated_at=$request->userupdated_at;
        $grabar->in_medico=$request->in_medico;
        $grabar->in_paciente=$request->in_paciente;

        $grabar->save();

        return redirect('/Cruds/Users/lista');
    }

    public function destroy($id)
    {
        Users::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Users/lista');
    }


 
}

