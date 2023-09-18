<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Consultas;
use Session;
use DB;

class ConsultasCrudController extends Controller
{

    public function index()
    {
        $title='Lista';
        $data=Consultas::all();
        return view('crud/crudconsultas/listar',compact('data','title'));
    }

    public function create()
    {
        $title='Crear Consultas';
        return view('crud/crudconsultas/crear')->with('title',$title);
    }

    public function store(Request $request)
    {
        Consultas::create([
        'numhistoria'=>$request->numhistoria,
        'nroconsulta'=>$request->nroconsulta,
        'fecha'=>$request->fecha,
        'enfermedadactual'=>$request->enfermedadactual,
        'peso'=>$request->peso,
        'talla'=>$request->talla,
        'fc'=>$request->fc,
        'pp'=>$request->pp,
        'circcefalica'=>$request->circcefalica,
        'circtoraxica'=>$request->circtoraxica,
        'circabdominal'=>$request->circabdominal,
        'tasentado'=>$request->tasentado,
        'taacostado'=>$request->taacostado,
        'tapie'=>$request->tapie,
        'resultadoexamencomp'=>$request->resultadoexamencomp,
        'eliminado'=>$request->eliminado,
        'faringe'=>$request->faringe,
        'nariz'=>$request->nariz,
        'oido'=>$request->oido,
        'laringe'=>$request->laringe,
        'cuello'=>$request->cuello,
        'otros'=>$request->otros,
        'evolucion'=>$request->evolucion,
        'observaciones'=>$request->observaciones,
        'medico'=>$request->medico,
        'receta'=>$request->receta,
        'receta_indi'=>$request->receta_indi,
        ]);
        return redirect('/Cruds/Consultas/lista');
    }

    public function show($id)
    {
        $title='Mofificar';
        $data=Consultas::where('id','=',$id)->first();
        return view('crud/crudconsultas/modificar')->with( array('data'=>$data,'title'=>$title));
    }

    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
        $grabar=Consultas::Find($id);

        $grabar->numhistoria=$request->numhistoria;
        $grabar->nroconsulta=$request->nroconsulta;
        $grabar->fecha=$request->fecha;
        $grabar->enfermedadactual=$request->enfermedadactual;
        $grabar->peso=$request->peso;
        $grabar->talla=$request->talla;
        $grabar->fc=$request->fc;
        $grabar->pp=$request->pp;
        $grabar->circcefalica=$request->circcefalica;
        $grabar->circtoraxica=$request->circtoraxica;
        $grabar->circabdominal=$request->circabdominal;
        $grabar->tasentado=$request->tasentado;
        $grabar->taacostado=$request->taacostado;
        $grabar->tapie=$request->tapie;
        $grabar->resultadoexamencomp=$request->resultadoexamencomp;
        $grabar->eliminado=$request->eliminado;
        $grabar->faringe=$request->faringe;
        $grabar->nariz=$request->nariz;
        $grabar->oido=$request->oido;
        $grabar->laringe=$request->laringe;
        $grabar->cuello=$request->cuello;
        $grabar->otros=$request->otros;
        $grabar->evolucion=$request->evolucion;
        $grabar->observaciones=$request->observaciones;
        $grabar->medico=$request->medico;
        $grabar->receta=$request->receta;
        $grabar->receta_indi=$request->receta_indi;

        $grabar->save();

        return redirect('/Cruds/Consultas/lista');
    }

    public function destroy($id)
    {
        Consultas::find($id)->delete(['id','=',$id]);
        return redirect('/Cruds/Consultas/lista');
    }


 
}

