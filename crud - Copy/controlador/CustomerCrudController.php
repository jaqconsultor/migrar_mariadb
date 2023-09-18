<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
use DB;

class CustomerCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Customer::all();
        return view('crud/crudcustomer/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Customer';
        return view('crud/crudcustomer/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Customer::create([
        'fname'=>$request->fname,
        'lname'=>$request->lname,
        'address'=>$request->address,
        'city'=>$request->city,
        'company_name'=>$request->company_name,
        'phone'=>$request->phone,
        'telefono'=>$request->telefono,
        'state'=>$request->state,
        'zip'=>$request->zip,
        'sms'=>$request->sms,
        'email'=>$request->email
        ]);
        return redirect('/Cruds/Customer/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Customer::where('id','=',$id)->first();
        return view('crud/crudcustomer/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Customer::Find($id);

        $grabar->fname=$request->fname;
        $grabar->lname=$request->lname;
        $grabar->address=$request->address;
        $grabar->city=$request->city;
        $grabar->company_name=$request->company_name;
        $grabar->phone=$request->phone;
        $grabar->telefono=$request->telefono;
        $grabar->state=$request->state;
        $grabar->zip=$request->zip;
        $grabar->sms=$request->sms;
        $grabar->email=$request->email;

        $grabar->save();

        return redirect('/Cruds/Customer/lista');
    }

    public function destroy($id)
    {
        Customer::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Customer/lista');
    }


 
}

