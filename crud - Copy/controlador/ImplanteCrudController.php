<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Implante;
use Session;
use DB;

class ImplanteCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Implante::all();
        return view('crud/crudimplante/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Implante';
        return view('crud/crudimplante/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Implante::create([
        'historia'=>$request->historia,
        'consulta'=>$request->consulta,
        'fecha_reporte'=>$request->fecha_reporte,
        'fecha_opera'=>$request->fecha_opera,
        'diagnostico'=>$request->diagnostico,
        'plan_operatorio'=>$request->plan_operatorio,
        'texto'=>$request->texto,
        'estabilizada'=>$request->estabilizada,
        'componente_femoral'=>$request->componente_femoral,
        'componente_tibial'=>$request->componente_tibial,
        'componente_tibial_it'=>$request->componente_tibial_it,
        'componente_pastelar'=>$request->componente_pastelar,
        'reque_metilmeticatrilato'=>$request->reque_metilmeticatrilato,
        'reque_metilmeticatrilato_cant'=>$request->reque_metilmeticatrilato_cant,
        'reque_steridrape'=>$request->reque_steridrape,
        'reque_steridrape_cant'=>$request->reque_steridrape_cant,
        'reque_coban_esteril'=>$request->reque_coban_esteril,
        'reque_coban_esteril_cant'=>$request->reque_coban_esteril_cant,
        'reque_autosutura'=>$request->reque_autosutura,
        'reque_autosutura_cant'=>$request->reque_autosutura_cant,
        'reque_orthopack'=>$request->reque_orthopack,
        'reque_orthopack_cant'=>$request->reque_orthopack_cant,
        'sistema'=>$request->sistema,
        'marca'=>$request->marca,
        'tipo'=>$request->tipo,
        'puro_texto'=>$request->puro_texto,
        ]);
        return redirect('/Cruds/Implante/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Implante::where('id','=',$id)->first();
        return view('crud/crudimplante/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Implante::Find($id);

        $grabar->historia=$request->historia;
        $grabar->consulta=$request->consulta;
        $grabar->fecha_reporte=$request->fecha_reporte;
        $grabar->fecha_opera=$request->fecha_opera;
        $grabar->diagnostico=$request->diagnostico;
        $grabar->plan_operatorio=$request->plan_operatorio;
        $grabar->texto=$request->texto;
        $grabar->estabilizada=$request->estabilizada;
        $grabar->componente_femoral=$request->componente_femoral;
        $grabar->componente_tibial=$request->componente_tibial;
        $grabar->componente_tibial_it=$request->componente_tibial_it;
        $grabar->componente_pastelar=$request->componente_pastelar;
        $grabar->reque_metilmeticatrilato=$request->reque_metilmeticatrilato;
        $grabar->reque_metilmeticatrilato_cant=$request->reque_metilmeticatrilato_cant;
        $grabar->reque_steridrape=$request->reque_steridrape;
        $grabar->reque_steridrape_cant=$request->reque_steridrape_cant;
        $grabar->reque_coban_esteril=$request->reque_coban_esteril;
        $grabar->reque_coban_esteril_cant=$request->reque_coban_esteril_cant;
        $grabar->reque_autosutura=$request->reque_autosutura;
        $grabar->reque_autosutura_cant=$request->reque_autosutura_cant;
        $grabar->reque_orthopack=$request->reque_orthopack;
        $grabar->reque_orthopack_cant=$request->reque_orthopack_cant;
        $grabar->sistema=$request->sistema;
        $grabar->marca=$request->marca;
        $grabar->tipo=$request->tipo;
        $grabar->puro_texto=$request->puro_texto;

        $grabar->save();

        return redirect('/Cruds/Implante/lista');
    }

    public function destroy($id)
    {
        Implante::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Implante/lista');
    }


 
}

