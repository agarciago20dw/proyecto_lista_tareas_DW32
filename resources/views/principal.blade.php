<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Oswald:wght@200&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Gestor de tareas</title>
</head>
<body>
    <div class="contenedor">
        <nav class="navbar navbar-light cabecera">
            <div class="container">
                <a href="{{ route('tareas.mostrar') }}" class="col-6 navbar-brand">
                    <h1 class="m-0">GESTOR DE TAREAS</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-6 collapse navbar-collapse text-center justify-content-center mt-4" id="collapsibleNavbar">
                    <ul class="navbar-nav d-flex gap-3">
                        <li class="nav-item">
                            <a href="{{ route('tareas.mostrar') }}" class="nav-link links">Lista Tareas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tareas.formulario') }}" class="nav-link links">Añadir Tarea</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('usuarios.formulario') }}" class="nav-link links">Añadir Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tareas.buscar') }}" class="nav-link links">Buscar Tarea</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('articulo1')
        @yield('articulo2')
        @yield('articulo3')
        @yield('articulo4')
        <footer class="pie">
            <p class="m-0">Adrián García González © DW32 Zubiri Manteo</p>
        </footer>
    </div>
</body>
</html>