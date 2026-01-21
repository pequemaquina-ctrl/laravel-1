@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                Añadir película
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/catalog/create') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Añadir película</button>
                </form>

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