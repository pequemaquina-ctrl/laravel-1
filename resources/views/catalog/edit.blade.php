@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Modificar película</h2>
            
            <form action="{{ url('catalog/' . $id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $pelicula['title'] }}" required>
                </div>
                
                <div class="form-group">
                    <label for="year">Año</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{ $pelicula['year'] }}" required>
                </div>
                
                <div class="form-group">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" name="director" value="{{ $pelicula['director'] }}" required>
                </div>
                
                <div class="form-group">
                    <label for="poster">URL del póster</label>
                    <input type="url" class="form-control" id="poster" name="poster" value="{{ $pelicula['poster'] }}" required>
                </div>
                
                <div class="form-group">
                    <label for="synopsis">Sinopsis</label>
                    <textarea class="form-control" id="synopsis" name="synopsis" rows="5" required>{{ $pelicula['synopsis'] }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Modificar película</button>
                <a href="{{ url('/catalog/show/' . $id) }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection