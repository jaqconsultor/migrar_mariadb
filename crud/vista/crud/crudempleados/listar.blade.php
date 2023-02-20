@extends('template/template')

@section('site-page')
<div class="container-fluid">
    <div  class="row">
        <div class="col-xs-12 ">
            <div class="box">
             <div class="box-header">
                <div class="box-name">
                    <i class=""></i>
                    <span>
Listar EMPLEADOS
                        </span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
          <div class="box-content">
            @if($errors->any())
                <div class="alert alert-danger">
                 <ul>
                   @foreach($errors->all() as $e)
                      <li>{{$e}}</li>
                   @endforeach
                  </ul>
               </div>
         @endif
        @if(session('mensaje'))
             <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif
        <a href="{{url('
/Cruds/Empleados/CrearNuevo
        ')}}" >
            <button  type="button" class="btn btn-primary">Añadir</button>
        </a>

       <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
            <thead>
                 <tr>
<th>ID</th><th>NOMBRE</th>
                    <th>Operaciones</th>
                           
                </tr>
             </thead>
            @if(count($data)>=1)
                @foreach($data as $d)
                    <tr>
<td>{{$d->id}}</td><td>{{$d->nombre}}</td>
                        <td>
<a href="{{url('/Cruds/Empleados/Eliminar/'.$d->id)}}"><input type='button' class='btn'  value='Eliminar'></a>
<a href="{{url('/Cruds/Empleados/Modificar/'.$d->id)}}"><input type='button' class='btn'  value='Modificar' ></a>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr >
                    <td colspan="3">
                        No hay Registros Disponibles
                    </td>
                </tr>
            @endif
        </table>  
                    
         </div>
            
            </div>
        </div>
    </div>
</div>

            
@endsection
@section('javascript-code')


@endsection
