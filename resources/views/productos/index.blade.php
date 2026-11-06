@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')
    <div class="d-flex flex-column flex-md-row justify-content-between mb-4 gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1">Inventario de Productos - MAXTERCAN</h1>
            <p class="text-secondary mb-0">Listado de snacks y artículos para mascotas consultados desde la base de datos.</p>
        </div>
        <a href="{{ route('productos.create') }}" class="btn btn-cafe align-self-start">
            Registrar nuevo producto
        </a>
    </div>

    @if (session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td class="fw-bold">{{ $producto->nombre }}</td>
                                <td class="text-success fw-bold">${{ number_format($producto->precio, 2) }}</td>
                                <td>{{ $producto->cantidad }}</td>
                                <td>{{ $producto->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-secondary">
                                    Todavía no existen productos registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection