@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    <!-- Sección Hero / Banner Principal -->
    <header id="inicio" class="text-white py-5 shadow-sm" style="background: linear-gradient(135deg, #0f172a 0%, #0369a1 100%);">
        <div class="container py-4">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge bg-info text-dark mb-3 px-3 py-2 fw-bold">
                        TECNOLOGÍA SUREÑA
                    </span>

                    <h1 class="display-4 fw-bold">
                        Tu aliado estratégico en cómputo, redes y tecnología.
                    </h1>

                    <p class="lead text-light opacity-90 fs-5 mt-3">
                        Encuentra equipos de cómputo, componentes, accesorios y soluciones
                        tecnológicas de alta calidad con el mejor respaldo de la región.
                    </p>

                    <a href="#productos" class="btn btn-info text-dark font-weight-bold btn-lg mt-3 shadow-sm px-4">
                        <i class="bi bi-grid-3x3-gap-fill me-2"></i> Ver catálogo de productos
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px);">
                        <i class="bi bi-cpu display-1 text-info"></i>
                        <h2 class="h4 mt-3 text-white fw-bold">
                            Innovación y rendimiento a tu alcance
                        </h2>
                        <p class="small text-light opacity-75 mb-0">
                            Equipamiento garantizado para estudiantes, profesionales y empresas.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- Sección de Productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">
                    Equipos y Accesorios Destacados
                </h2>
                <p class="text-muted">
                    Selecciona el dispositivo o componente que necesitas
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="ratio ratio-4x3">
                            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top object-fit-cover rounded-top"
                                 alt="Laptop Pro">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">Portátiles</span>

                            <h3 class="card-title h5 fw-bold">
                                Laptop Ultra Pro 15"
                            </h3>

                            <p class="card-text text-secondary small">
                                Procesador Intel Core i7, 16GB RAM, 512GB SSD NVMe. Alto rendimiento.
                            </p>

                            <div class="mt-auto pt-3">
                                <p class="fs-5 fw-bold text-primary mb-2">
                                    $3.200.000
                                </p>

                                <button class="btn btn-tech w-100 fw-semibold">
                                    <i class="bi bi-cart-plus me-1"></i> Seleccionar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="ratio ratio-4x3">
                            <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top object-fit-cover rounded-top"
                                 alt="Mouse Gamer">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">Periféricos</span>

                            <h3 class="card-title h5 fw-bold">
                                Mouse Ergonómico
                            </h3>

                            <p class="card-text text-secondary small">
                                Conexión inalámbrica 2.4GHz, alta precisión DPI ajustable y batería recargable.
                            </p>

                            <div class="mt-auto pt-3">
                                <p class="fs-5 fw-bold text-primary mb-2">
                                    $85.000
                                </p>

                                <button class="btn btn-tech w-100 fw-semibold">
                                    <i class="bi bi-cart-plus me-1"></i> Seleccionar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="ratio ratio-4x3">
                            <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top object-fit-cover rounded-top"
                                 alt="Tablet Pro">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-secondary align-self-start mb-2">Móviles</span>

                            <h3 class="card-title h5 fw-bold">
                                Tablet HD 10.1"
                            </h3>

                            <p class="card-text text-secondary small">
                                Pantalla IPS, 64GB almacenamiento expandible, ideal para estudio y trabajo remoto.
                            </p>

                            <div class="mt-auto pt-3">
                                <p class="fs-5 fw-bold text-primary mb-2">
                                    $650.000
                                </p>

                                <button class="btn btn-tech w-100 fw-semibold">
                                    <i class="bi bi-cart-plus me-1"></i> Seleccionar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="ratio ratio-4x3">
                            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top object-fit-cover rounded-top"
                                 alt="Router Wi-Fi">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-dark align-self-start mb-2">Redes</span>

                            <h3 class="card-title h5 fw-bold">
                                Router Wi-Fi 6 Dual
                            </h3>

                            <p class="card-text text-secondary small">
                                Alta velocidad Gigabit, cobertura extendida con 4 antenas de alto rendimiento.
                            </p>

                            <div class="mt-auto pt-3">
                                <p class="fs-5 fw-bold text-primary mb-2">
                                    $210.000
                                </p>

                                <button class="btn btn-tech w-100 fw-semibold">
                                    <i class="bi bi-cart-plus me-1"></i> Seleccionar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección Nosotros / Ventajas -->
    <section id="nosotros" class="bg-white py-5 border-top border-bottom">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <div class="d-inline-block p-3 rounded-circle bg-light text-primary mb-3">
                        <i class="bi bi-shield-check display-3"></i>
                    </div>

                    <h2 class="fw-bold text-dark">
                        Tecnología confiable para tus proyectos
                    </h2>

                    <p class="text-secondary">
                        En **Tecnología Sureña** nos dedicamos a proveer soluciones de hardware,
                        conectividad e informática. Ofrecemos asesoría técnica personalizada para garantizar
                        que adquieras el equipo que mejor se adapte a tus necesidades.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 rounded-4" style="background-color: #e0f2fe;">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold text-dark mb-3">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i> Equipos de marcas líderes con garantía real
                                </li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i> Asesoría técnica especializada
                                </li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i> Envíos rápidos y seguros en la región
                                </li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i> Soporte postventa dedicado
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold text-dark">
                Nuestra Ubicación & Contacto
            </h2>

            <p class="text-secondary">
                Visítanos o contáctanos para cotizaciones y atención directa.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100 rounded-3">
                        <div class="card-body p-4">
                            <div class="fs-1 text-primary mb-2"><i class="bi bi-geo-alt-fill"></i></div>
                            <h3 class="h5 fw-bold">Ubicación</h3>
                            <p class="mb-0 text-muted">
                                San Juan de Pasto, Nariño
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100 rounded-3">
                        <div class="card-body p-4">
                            <div class="fs-1 text-primary mb-2"><i class="bi bi-clock-fill"></i></div>
                            <h3 class="h5 fw-bold">Horario de Atención</h3>
                            <p class="mb-0 text-muted">
                                Lunes a sábado, 8:00 a. m. – 7:00 p. m.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100 rounded-3">
                        <div class="card-body p-4">
                            <div class="fs-1 text-primary mb-2"><i class="bi bi-telephone-fill"></i></div>
                            <h3 class="h5 fw-bold">Línea Directa</h3>
                            <p class="mb-0 text-muted">
                                +57 300 000 0000
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection