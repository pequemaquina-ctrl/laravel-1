<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoClub</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            padding-top: 70px;
        }
        .mt-3 {
            margin-top: 1rem !important;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    @if( Auth::check() )
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/catalog') }}">Catálogo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/catalog/create') }}">Nueva Película</a>
        </li>
        <li class="nav-item">
            {{-- Formulario de Logout (Breeze lo suele traer hecho) --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link btn btn-link">Cerrar sesión</button>
            </form>
        </li>
    </ul>
@endif

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>