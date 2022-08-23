@extends('layouts.app')

@section('contenido')

                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                
                                    {{ $parametros['titulo'] }}
                                
                                <a href="{{ env('APP_URL') }}/{{ $parametros['uri'] }}/create" class="btn btn-primary">
                                    nuevo
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                                @foreach ($parametros['columnas'] as $columna)
                                                    <th>{{ $columna }}</th>
                                                @endforeach
                                            
                                            <th>accion</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        

                                            @foreach ($parametros['contenido'] as $club)
                                                    <tr>
                                                        <td class="col-2">{{ $club->name }}</td>
                                                        <td class="col-2">{{ $club->copas }}</td>
                                                        <td class="col-2">{{ $club->nacionales }}</td>
                                                        <td class="col-3">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <a href="{{ env('APP_URL') }}/{{ $parametros['uri'] }}/{{ $club->id }}/edit" class="btn btn-success">
                                                                        editar
                                                                    </a>
                                                                </div>
                                                                <div class="col-4">
                                                                    <form action="{{ env('APP_URL') }}/{{ $parametros['uri'] }}/{{ $club->id }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">eliminar</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

@endsection
