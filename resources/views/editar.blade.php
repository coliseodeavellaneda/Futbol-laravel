@extends('layouts.app')   

@section('contenido')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Ingresar datos
            </h6>
        </div>
        <div class="card-body">

            <form action="{{ env('APP_URL') }}/{{ $parametros['uri'] }}/{{ $parametros['id'] }}" method="POST">
                @csrf
                @method('PUT')
                {{-- ['nombre' => [valorEtiqueta, valorEscrito],
                        'copas' => [valorEtiqueta, valorEscrito],
                        'nacionales' => [valorEtiqueta, valorEscrito]] --}}
                <input value="{{ $parametros['id'] }}" type="hidden" name="id" class="form-control" id="id" aria-describedby="emailHelp">
               
                    @foreach($parametros["labels"] as $name => $array)
                        
                            <div class="mb-3">
                                <label for="club" class="form-label">{{ $array[0] }}</label>
                                <input value="{{ $array[1] }}" type="name" name="{{ $name }}" class="form-control" id="club" aria-describedby="emailHelp">
                            </div>
                    @endforeach
                                   
                <button type="submit" class="btn btn-primary">guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection
