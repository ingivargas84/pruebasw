@extends('layouts.app')

@section('header')
<section class="content-header">
    <h1>
      Listado de Clientes
      <small>Todos los clientes</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active">Clientes</li>
    </ol>
  </section>

  @endsection

@section('content')
<div class="loader loader-bar is-active"></div>
<div class="box">
    <div class="box-header">
      <a class="btn btn-primary pull-right" href="{{route('clientes.new')}}">
        <i class="fa fa-plus"></i>Agregar Cliente</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <input type="hidden" name="urlActual" value="{{url()->current()}}"> 
        <h3>Listado de Clientes</h3>

        <br>
        <table border="1" cellspacing=0 cellpadding=2 width= 800 class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width=10% style="font-size:15px; text-align:center;">#</th>
                    <th width=40% style="font-size:15px; text-align:left;">Nombre Cliente</th>
                    <th width=25% style="font-size:15px; text-align:center;">Teléfono</th>
                    <th width=25% style="font-size:15px; text-align:center;">Tipo Cliente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cl)
                <tr>
                    <td style="font-size:14px; text-align:center;">{{$cl->id}}</td>
                    <td style="font-size:14px; text-align:left;">{{$cl->nombre_cliente}}</td>
                    <td style="font-size:14px; text-align:center;">{{$cl->telefono}}</td>
                    <td style="font-size:14px; text-align:center;">{{ $cl->tipo_cliente }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>    
        <br>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box --> 

@endsection

@push('styles')
 
 
@endpush

@push('scripts')
  
@endpush