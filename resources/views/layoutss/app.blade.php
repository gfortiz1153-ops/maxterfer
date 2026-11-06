<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') | MAXTERCAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --cafe-oscuro: #f78f06ee;
            --cafe: #000000;
            --caramelo: #c8873a;
            --crema: #fff7ed;
            --texto: #2d201c;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #fffaf5;
            color: var(--texto);
        }
        .navbar-cafe {
            background: linear-gradient(90deg, var(--cafe-oscuro), var(--cafe));
        }
        .navbar .nav-link {
            border-radius: 0.6rem;
            padding-left: 0.9rem !important;
            padding-right: 0.9rem !important;
        }
        .navbar .nav-link.active,
        .navbar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.14);
        }
        .btn-cafe {
            color: white;
            background-color: var(--cafe);
            border-color: var(--cafe);
        }
        .btn-cafe:hover {
            color: white;
            background-color: var(--cafe-oscuro);
            border-color: var(--cafe-oscuro);
        }
        footer {
            margin-top: auto;
            background-color: var(--cafe-oscuro);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-cafe shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand fw-bold" href="{{ route('productos.index') }}">
                🐾 MAXTERCAN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto gap-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('productos.index') ? 'active' : '' }}" href="{{ route('productos.index') }}">Productos / Inventario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('contenido')
    </main>

    <footer class="text-white text-center py-4">
        <div class="container">
            <p class="mb-1 fw-semibold">MAXTERCAN - Tienda Para Mascotas</p>
            <p class="mb-0 small text-white-50">Laboratorio de Laravel y Base de Datos</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>