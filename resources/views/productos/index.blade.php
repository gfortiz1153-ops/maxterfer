@extends('layouts.app')

@section('titulo', 'Catálogo de Productos')

@section('contenido')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1 text-dark">Inventario de Productos</h1>
            <p class="text-secondary mb-0">
                Consulta de dispositivos y componentes registrados en la base de datos.
            </p>
        </div>
        <a href="{{ route('productos.create') }}" class="btn btn-tech align-self-start fw-semibold">
            <i class="bi bi-plus-lg me-1"></i> Nuevo Producto
        </a>
    </div>

    @if (session('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('exito') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 ps-4">ID</th>
                            <th class="py-3">Nombre</th>
                            <th class="py-3">Precio</th>
                            <th class="py-3">Cantidad</th>
                            <th class="py-3 pe-4">Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                            <tr>
                                <td class="ps-4 fw-bold text-muted">#{{ $producto->id }}</td>
                                <td class="fw-semibold text-dark">{{ $producto->nombre }}</td>
                                <td class="text-primary fw-bold">${{ number_format($producto->precio, 2) }}</td>
                                <td>
                                    <span class="badge {{ $producto->cantidad > 0 ? 'bg-success' : 'bg-danger' }}">
                                        {{ $producto->cantidad }} unds
                                    </span>
                                </td>
                                <td class="pe-4 text-muted small">{{ $producto->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-secondary">
                                    <i class="bi bi-inbox display-4 d-block mb-2 text-muted"></i>
                                    Todavía no existen productos registrados en el inventario.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection