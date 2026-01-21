@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">Modificar película</div>
            <div class="card-body" style="padding:30px">
                <form action="{{ url('/catalog/edit/' . $pelicula->id) }}" method="POST">
                    @csrf
                    @method('PUT') 
                    <input type="text" name="title" id="title" class="form-control" value="{{ $pelicula->title }}">

                    <button type="submit" class="btn btn-primary">Modificar película</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection