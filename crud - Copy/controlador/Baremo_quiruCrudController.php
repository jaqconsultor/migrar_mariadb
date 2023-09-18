<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Baremo_quiru;
use Session;
use DB;

class Baremo_quiruCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Baremo_quiru::all();
        return view('crud/crudbaremo_quiru/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Baremo_quiru';
        return view('crud/crudbaremo_quiru/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Baremo_quiru::create([
        'consecuti'=>$request->consecuti,
        'cod_inter'=>$request->cod_inter,
        'cod_clini'=>$request->cod_clini,
        'ced_paciente'=>$request->ced_paciente,
        'nom_interven'=>$request->nom_interven,
        'nom_paciente'=>$request->nom_paciente,
        'fecha_creado'=>$request->fecha_creado,
        'fecha_opera'=>$request->fecha_opera,
        'hora_opera'=>$request->hora_opera,
        'monto_opera'=>$request->monto_opera,
        'tipo_rol'=>$request->tipo_rol,
        'pagada'=>$request->pagada,
        'medico_prin'=>$request->medico_prin,
        'medico_aux'=>$request->medico_aux,
        'historia'=>$request->historia,
        'diagnostico'=>$request->diagnostico,
        'monto_abono'=>$request->monto_abono,
        'monto_resta'=>$request->monto_resta,
        'empre'=>$request->empre,
        'hora_fin'=>$request->hora_fin,
        'duracion'=>$request->duracion,
        ]);
        return redirect('/Cruds/Baremo_quiru/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Baremo_quiru::where('id','=',$id)->first();
        return view('crud/crudbaremo_quiru/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Baremo_quiru::Find($id);

        $grabar->consecuti=$request->consecuti;
        $grabar->cod_inter=$request->cod_inter;
        $grabar->cod_clini=$request->cod_clini;
        $grabar->ced_paciente=$request->ced_paciente;
        $grabar->nom_interven=$request->nom_interven;
        $grabar->nom_paciente=$request->nom_paciente;
        $grabar->fecha_creado=$request->fecha_creado;
        $grabar->fecha_opera=$request->fecha_opera;
        $grabar->hora_opera=$request->hora_opera;
        $grabar->monto_opera=$request->monto_opera;
        $grabar->tipo_rol=$request->tipo_rol;
        $grabar->pagada=$request->pagada;
        $grabar->medico_prin=$request->medico_prin;
        $grabar->medico_aux=$request->medico_aux;
        $grabar->historia=$request->historia;
        $grabar->diagnostico=$request->diagnostico;
        $grabar->monto_abono=$request->monto_abono;
        $grabar->monto_resta=$request->monto_resta;
        $grabar->empre=$request->empre;
        $grabar->hora_fin=$request->hora_fin;
        $grabar->duracion=$request->duracion;

        $grabar->save();

        return redirect('/Cruds/Baremo_quiru/lista');
    }

    public function destroy($id)
    {
        Baremo_quiru::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Baremo_quiru/lista');
    }


 
}

