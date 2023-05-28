@extends('layouts.app')

@section('header')
    <section class="content-header">
        <h1>
          Clientes
          <small>Crear Cliente</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-tachometer-alt"></i> Inicio</a></li>
          <li><a href="{{route('clientes.index')}}"><i class="fa fa-list"></i> Clientes</a></li>
          <li class="active">Crear</li>
        </ol>
    </section>
@stop

@section('content')
    <form method="POST" id="ClienteForm"  action="{{route('clientes.save')}}">
            {{csrf_field()}}
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" placeholder="Teléfono:" name="telefono" >
                            </div>
                            <div class="col-sm-6">
                                <label for="nombre_cliente">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre del cliente" name="nombre_cliente" >
                            </div> 
                        </div>
                        <br>
                        <div class="row">
                            <label for="tipo_cliente_id">Tipo Cliente:</label>
                            <select name="tipo_cliente_id" class="form-control" id="tipo_cliente_id" >
                                <option value="default">Seleccione un tipo de cliente</option>
                                @foreach ($tipo_cliente as $tc)
                                <option value="{{$tc->id}}">{{$tc->tipo_cliente}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="text-right m-t-15">
                            <a class='btn btn-primary form-button' href="{{ route('clientes.index') }}">Regresar</a>
                            <button id="ButtonCliente" class="btn btn-success form-button">Guardar</button>
                        </div>

                    </div>
                </div>
            </div>
    </form>
    <div class="loader loader-bar"></div>

@stop


@push('styles')

@endpush


@push('scripts')

<script>

    
</script>

<script src="{{asset('js/clientes/create.js')}}"></script>
@endpush
