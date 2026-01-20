@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">Modificar película</div>
            <div class="card-body" style="padding:30px">
                <form action="" method="POST">
                    @csrf
                    {{-- Por ahora dejamos el action vacío ya que solo estamos mostrando los datos --}}
                    <div class="form-group mb-3">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-group mb-3" value="{{ $pelicula->title }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="year">Año</label>
                        <input type="text" name="year" id="year" class="form-group mb-3" value="{{ $pelicula->year }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-group mb-3" value="{{ $pelicula->director }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="poster">URL Poster</label>
                        <input type="text" name="poster" id="poster" class="form-group mb-3" value="{{ $pelicula->poster }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{ $pelicula->synopsis }}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar película
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection