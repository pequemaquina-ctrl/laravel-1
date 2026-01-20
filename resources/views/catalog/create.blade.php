@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Añadir película</h2>
            
            <form action="{{ url('catalog') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                
                <div class="form-group">
                    <label for="year">Año</label>
                    <input type="number" class="form-control" id="year" name="year" required>
                </div>
                
                <div class="form-group">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" name="director" required>
                </div>
                
                <div class="form-group">
                    <label for="poster">URL del póster</label>
                    <input type="url" class="form-control" id="poster" name="poster" required>
                </div>
                
                <div class="form-group">
                    <label for="synopsis">Sinopsis</label>
                    <textarea class="form-control" id="synopsis" name="synopsis" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Añadir película</button>
                <a href="{{ url('/catalog') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection