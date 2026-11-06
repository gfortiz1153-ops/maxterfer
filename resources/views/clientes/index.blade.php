@extends('layouts.app')

@section('titulo', 'Lista de Clientes')

@section('contenido')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h1 class="h3 fw-bold text-dark mb-1">Lista de Clientes</h1>
                            <p class="text-secondary mb-0">Clientes registrados en el sistema.</p>
                        </div>
                        <a href="{{ route('clientes.create') }}" class="btn btn-success px-4 py-2 fw-semibold">
                            <i class="bi bi-plus-lg me-1"></i> Nuevo Cliente
                        </a>
                    </div>

                    @if (session('exito'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('exito') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Ciudad</th>
                                    <th>Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clientes as $cliente)
                                    <tr>
                                        <td class="fw-semibold">{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->correo }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->ciudad }}</td>
                                        <td>{{ Str::limit($cliente->mensaje, 30) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-secondary py-4">
                                            No hay clientes registrados todavía.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection