@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src="{{ $pelicula->poster }}" class="img-fluid rounded shadow" />
    </div>
    <div class="col-sm-8">
        <h1>{{ $pelicula->title }}</h1>
        <h3>Año: {{ $pelicula->year }}</h3>
        <h3>Director: {{ $pelicula->director }}</h3>
        <p><b>Sinopsis:</b> {{ $pelicula->synopsis }}</p>
        
        <p><b>Estado:</b> 
            @if($pelicula->rented)
                Película actualmente alquilada
            @else
                Película disponible
            @endif
        </p>

        <div class="mt-4">
            @if($pelicula->rented)
                <button class="btn btn-danger">Devolver película</button>
            @else
                <button class="btn btn-primary">Alquilar película</button>
            @endif

            <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $pelicula->id) }}">
                <span class="bi bi-pencil"></span> Editar película
            </a>
            <a class="btn btn-outline-secondary" href="{{ url('/catalog') }}">Volver al listado</a>
        </div>
    </div>
</div>
@endsection