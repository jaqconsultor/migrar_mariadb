<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pbcatcol;
use Session;
use DB;

class PbcatcolCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Pbcatcol::all();
        return view('crud/crudpbcatcol/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Pbcatcol';
        return view('crud/crudpbcatcol/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Pbcatcol::create([
        'pbc_tnam'=>$request->pbc_tnam,
        'pbc_tid'=>$request->pbc_tid,
        'pbc_ownr'=>$request->pbc_ownr,
        'pbc_cnam'=>$request->pbc_cnam,
        'pbc_cid'=>$request->pbc_cid,
        'pbc_labl'=>$request->pbc_labl,
        'pbc_lpos'=>$request->pbc_lpos,
        'pbc_hdr'=>$request->pbc_hdr,
        'pbc_hpos'=>$request->pbc_hpos,
        'pbc_jtfy'=>$request->pbc_jtfy,
        'pbc_mask'=>$request->pbc_mask,
        'pbc_case'=>$request->pbc_case,
        'pbc_hght'=>$request->pbc_hght,
        'pbc_wdth'=>$request->pbc_wdth,
        'pbc_ptrn'=>$request->pbc_ptrn,
        'pbc_bmap'=>$request->pbc_bmap,
        'pbc_init'=>$request->pbc_init,
        'pbc_cmnt'=>$request->pbc_cmnt,
        'pbc_edit'=>$request->pbc_edit,
        'pbc_tag'=>$request->pbc_tag,
        ]);
        return redirect('/Cruds/Pbcatcol/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Pbcatcol::where('id','=',$id)->first();
        return view('crud/crudpbcatcol/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Pbcatcol::Find($id);

        $grabar->pbc_tnam=$request->pbc_tnam;
        $grabar->pbc_tid=$request->pbc_tid;
        $grabar->pbc_ownr=$request->pbc_ownr;
        $grabar->pbc_cnam=$request->pbc_cnam;
        $grabar->pbc_cid=$request->pbc_cid;
        $grabar->pbc_labl=$request->pbc_labl;
        $grabar->pbc_lpos=$request->pbc_lpos;
        $grabar->pbc_hdr=$request->pbc_hdr;
        $grabar->pbc_hpos=$request->pbc_hpos;
        $grabar->pbc_jtfy=$request->pbc_jtfy;
        $grabar->pbc_mask=$request->pbc_mask;
        $grabar->pbc_case=$request->pbc_case;
        $grabar->pbc_hght=$request->pbc_hght;
        $grabar->pbc_wdth=$request->pbc_wdth;
        $grabar->pbc_ptrn=$request->pbc_ptrn;
        $grabar->pbc_bmap=$request->pbc_bmap;
        $grabar->pbc_init=$request->pbc_init;
        $grabar->pbc_cmnt=$request->pbc_cmnt;
        $grabar->pbc_edit=$request->pbc_edit;
        $grabar->pbc_tag=$request->pbc_tag;

        $grabar->save();

        return redirect('/Cruds/Pbcatcol/lista');
    }

    public function destroy($id)
    {
        Pbcatcol::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Pbcatcol/lista');
    }


 
}

