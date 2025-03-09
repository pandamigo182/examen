<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('projects.index') }}">Gestor de Proyectos</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <footer class="mt-4 mb-4">
        <div class="container text-center">
            <img src="{{ asset('img/logogob.svg') }}" alt="Logo Gobierno de El Salvador" style="max-width: 200px; height: auto;">
            <p class="mt-2">&copy; {{ date('Y') }} Gestor de Proyectos</p>
            <p>Edwin Efrain Juárez Mezquita - 04886271-3 </p>
        </div>
    </footer>
</body>
</html>