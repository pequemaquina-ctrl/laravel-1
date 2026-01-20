@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $pelicula['poster'] }}" style="width:100%;" alt="{{ $pelicula['title'] }}">
        </div>
        <div class="col-sm-8">
            <h2>{{ $pelicula['title'] }}</h2>
            <p><strong>Año:</strong> {{ $pelicula['year'] }}</p>
            <p><strong>Director:</strong> {{ $pelicula['director'] }}</p>
            <p><strong>Sinopsis:</strong></p>
            <p>{{ $pelicula['synopsis'] }}</p>
            
            <p><strong>Estado:</strong></p>
            @if($pelicula['rented'])
                <p class="text-danger">Película actualmente alquilada</p>
                <a href="#" class="btn btn-danger">Devolver película</a>
            @else
                <p class="text-success">Película disponible</p>
                <a href="#" class="btn btn-primary">Alquilar película</a>
            @endif
            
            <div class="mt-3">
                <a href="{{ url('/catalog/edit/' . $id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Editar película
                </a>
                <a href="{{ url('/catalog') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
            </div>
        </div>
    </div>
@endsection