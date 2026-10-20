<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('titulo') | TECNOLOGÍA SUREÑA</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >

    <style>
        :root {
            --azul-oscuro: #0f172a;  /* Azul noche / marino */
            --azul-primario: #0284c7;/* Azul tecnológico brillante */
            --azul-medio: #0369a1;   /* Azul cobalto para hovers */
            --azul-claro: #f0f9ff;   /* Fondo muy suave */
            --azul-icono: #e0f2fe;   /* Contenedor de íconos */
            --texto: #1e293b;        /* Texto gris oscuro profesional */
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: var(--azul-claro);
            color: var(--texto);
        }

        .navbar-tech {
            background: linear-gradient(
                90deg,
                var(--azul-oscuro),
                var(--azul-medio)
            );
        }

        .navbar .nav-link {
            border-radius: 0.6rem;
            padding-left: 0.9rem !important;
            padding-right: 0.9rem !important;
            transition: all 0.2s ease;
        }

        .navbar .nav-link.active,
        .navbar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff !important;
        }

        .hero-tech {
            background:
                radial-gradient(
                    circle at top right,
                    rgba(2, 132, 199, 0.18),
                    transparent 40%
                ),
                linear-gradient(135deg, #ffffff, #e0f2fe);
            border-radius: 1.5rem;
            border: 1px solid #bae6fd;
        }

        .card-tech {
            border: 0;
            border-radius: 1.2rem;
            background-color: #ffffff;
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .card-tech:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(15, 23, 42, 0.12);
        }

        .icono-tech {
            width: 78px;
            height: 78px;
            display: grid;
            place-items: center;
            margin: 0 auto;
            border-radius: 50%;
            background-color: var(--azul-icono);
            color: var(--azul-primario);
            font-size: 2rem;
        }

        .btn-tech {
            color: white;
            background-color: var(--azul-primario);
            border-color: var(--azul-primario);
        }

        .btn-tech:hover {
            color: white;
            background-color: var(--azul-medio);
            border-color: var(--azul-medio);
        }

        .titulo-seccion {
            color: var(--azul-oscuro);
        }

        footer {
            margin-top: auto;
            background-color: var(--azul-oscuro);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-tech shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <i class="bi bi-cpu-fill text-info"></i>
                TECNOLOGÍA SUREÑA
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Abrir menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto gap-lg-1">
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}"
                            href="#"
                        >
                            <i class="bi bi-house-door me-1"></i> Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}"
                            href="{{ route('menu') }}"
                        >
                            <i class="bi bi-laptop me-1"></i> Catálogo
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                            href="{{ route('Nosotros') }}"
                        >
                            <i class="bi bi-info-circle me-1"></i> Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                            href="{{ route('Contacto') }}"
                        >
                            <i class="bi bi-envelope me-1"></i> Contacto
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('clientes.index') ? 'active' : '' }}"
                            href="{{ route('clientes.index') }}"
                        >
                            <i class="bi bi-people me-1"></i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }}"
                            href="{{ route('productos.index') }}"
                        >
                            <i class="bi bi-box-seam me-1"></i> Productos
                        </a>
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
            <p class="mb-1 fw-semibold">TECNOLOGÍA SUREÑA &copy; {{ date('Y') }}</p>
            <p class="mb-0 small text-white-50">
                Soluciones Tecnológicas & Equipamiento
            </p>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html>