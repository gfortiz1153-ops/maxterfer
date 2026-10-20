@extends('layouts.app')

@section('titulo', 'Registrar Producto')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-md-5">
                    
                    <h1 class="h3 fw-bold mb-2 text-dark">Registrar Nuevo Producto</h1>
                    <p class="text-secondary mb-4">
                        Ingrese los datos del equipo o componente tecnológico.
                    </p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Revise los campos marcados antes de continuar.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">Nombre del producto</label>
                            <input
                                type="text"
                                id="nombre"
                                name="nombre"
                                value="{{ old('nombre') }}"
                                class="form-control @error('nombre') is-invalid @enderror"
                                placeholder="Ej. Laptop Core i7 / Router Wi-Fi"
                            >
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label fw-semibold">Precio ($)</label>
                            <input
                                type="number"
                                step="0.01"
                                id="precio"
                                name="precio"
                                value="{{ old('precio') }}"
                                class="form-control @error('precio') is-invalid @enderror"
                                placeholder="0.00"
                            >
                            @error('precio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cantidad" class="form-label fw-semibold">Cantidad en stock</label>
                            <input
                                type="number"
                                id="cantidad"
                                name="cantidad"
                                value="{{ old('cantidad') }}"
                                class="form-control @error('cantidad') is-invalid @enderror"
                                placeholder="Ej. 15"
                            >
                            @error('cantidad')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-tech px-4 py-2 fw-semibold">
                            <i class="bi bi-save me-1"></i> Guardar Producto
                        </button>
                        
                        <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                            Cancelar
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection