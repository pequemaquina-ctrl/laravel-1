@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                Añadir película
            </div>
            <div class="card-body" style="padding:30px">

                <form action="" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Introduce el título">
                    </div>

                    <div class="form-group mb-3">
                        <label for="year">Año</label>
                        <input type="text" name="year" id="year" class="form-control" placeholder="Ej: 1995">
                    </div>

                    <div class="form-group mb-3">
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-control" placeholder="Nombre del director">
                    </div>

                    <div class="form-group mb-3">
                        <label for="poster">URL del Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control" placeholder="http://enlace-a-la-imagen.jpg">
                    </div>

                    <div class="form-group mb-3">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3" placeholder="Escribe la sinopsis aquí..."></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px; margin-top:25px;">
                            Añadir película
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection