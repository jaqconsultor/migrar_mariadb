<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pbcattbl;
use Session;
use DB;

class PbcattblCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pbcattbl::all();
        return view('crud/crudpbcattbl/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pbcattbl';
        return view('crud/crudpbcattbl/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pbcattbl::create([
        'pbt_tnam'=>$request->pbt_tnam,
        'pbt_tid'=>$request->pbt_tid,
        'pbt_ownr'=>$request->pbt_ownr,
        'pbd_fhgt'=>$request->pbd_fhgt,
        'pbd_fwgt'=>$request->pbd_fwgt,
        'pbd_fitl'=>$request->pbd_fitl,
        'pbd_funl'=>$request->pbd_funl,
        'pbd_fchr'=>$request->pbd_fchr,
        'pbd_fptc'=>$request->pbd_fptc,
        'pbd_ffce'=>$request->pbd_ffce,
        'pbh_fhgt'=>$request->pbh_fhgt,
        'pbh_fwgt'=>$request->pbh_fwgt,
        'pbh_fitl'=>$request->pbh_fitl,
        'pbh_funl'=>$request->pbh_funl,
        'pbh_fchr'=>$request->pbh_fchr,
        'pbh_fptc'=>$request->pbh_fptc,
        'pbh_ffce'=>$request->pbh_ffce,
        'pbl_fhgt'=>$request->pbl_fhgt,
        'pbl_fwgt'=>$request->pbl_fwgt,
        'pbl_fitl'=>$request->pbl_fitl,
        'pbl_funl'=>$request->pbl_funl,
        'pbl_fchr'=>$request->pbl_fchr,
        'pbl_fptc'=>$request->pbl_fptc,
        'pbl_ffce'=>$request->pbl_ffce,
        'pbt_cmnt'=>$request->pbt_cmnt,
        ]);
        return redirect('/Cruds/Pbcattbl/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pbcattbl::where('id','=',$id)->first();
        return view('crud/crudpbcattbl/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pbcattbl::Find($id);

        $grabar->pbt_tnam=$request->pbt_tnam;
        $grabar->pbt_tid=$request->pbt_tid;
        $grabar->pbt_ownr=$request->pbt_ownr;
        $grabar->pbd_fhgt=$request->pbd_fhgt;
        $grabar->pbd_fwgt=$request->pbd_fwgt;
        $grabar->pbd_fitl=$request->pbd_fitl;
        $grabar->pbd_funl=$request->pbd_funl;
        $grabar->pbd_fchr=$request->pbd_fchr;
        $grabar->pbd_fptc=$request->pbd_fptc;
        $grabar->pbd_ffce=$request->pbd_ffce;
        $grabar->pbh_fhgt=$request->pbh_fhgt;
        $grabar->pbh_fwgt=$request->pbh_fwgt;
        $grabar->pbh_fitl=$request->pbh_fitl;
        $grabar->pbh_funl=$request->pbh_funl;
        $grabar->pbh_fchr=$request->pbh_fchr;
        $grabar->pbh_fptc=$request->pbh_fptc;
        $grabar->pbh_ffce=$request->pbh_ffce;
        $grabar->pbl_fhgt=$request->pbl_fhgt;
        $grabar->pbl_fwgt=$request->pbl_fwgt;
        $grabar->pbl_fitl=$request->pbl_fitl;
        $grabar->pbl_funl=$request->pbl_funl;
        $grabar->pbl_fchr=$request->pbl_fchr;
        $grabar->pbl_fptc=$request->pbl_fptc;
        $grabar->pbl_ffce=$request->pbl_ffce;
        $grabar->pbt_cmnt=$request->pbt_cmnt;

        $grabar->save();

        return redirect('/Cruds/Pbcattbl/lista');
    }

    public function destroy($id)
    {
        Pbcattbl::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pbcattbl/lista');
    }


 
}

