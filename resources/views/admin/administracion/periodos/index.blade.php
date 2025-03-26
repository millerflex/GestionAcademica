@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')


    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>PERIODOS</strong></h3>
        </div>

        <div class="card-body">

            {{-- <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> NUEVO REGISTRO</a> --}}

            <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-plus"></i> GENERAR NUEVO PERIODO
            </a>

            {{-- <form class="form-inline my-2 my-lg-0 float-right">

                <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" value="">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                
            </form> --}}
        
            @if (session('datos'))
                <div id="alerta-datos" class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    {{ session('datos') }}
                    <button id="alerta-cerrar" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="table table-bordered">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Periodo</th>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Fin</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periodos as $periodo)
                        <tr>
                            <td>{{ $periodo->año }} - {{ $periodo->semestre }}</td>
                            <td>{{ $periodo->inicio }}</td>
                            <td>{{ $periodo->termino }}</td>
                            <td>
                                @if($periodo->activo == 1)
                                    <span class="text-success"><i class="fas fa-check-circle"></i> Activo</span>
                                @else
                                    {{-- <a href="{{ route('periodos.toggle', $periodo->id) }}" class="btn btn-outline-danger btn-sm"> --}}
                                    <a href="" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-exclamation-circle"></i> Activar
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>

            {{ $periodos->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- /.card -->

    @include('admin.administracion.periodos.create')
    
@stop

@section('css')
@stop

@section('js')
@stop