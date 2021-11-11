<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Lista de Tareas</title>
</head>
<body>
    <div class="contenedor">
        <header class="cabecera">
            <h1>Lista de tareas</h1>
            <i class="fas fa-bars"></i>
        </header>
        <article class="articulo1">
            @yield('articulo1')
        </article>
        <article class="articulo2">
            @yield('articulo2')
        </article>
        <footer class="pie">
            <p>Adrián García González © DW32 Zubiri Manteo</p>
        </footer>
    </div>
</body>
</html>