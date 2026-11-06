@extends('layouts.app')

@section('titulo', 'Editar Cliente')

@section('contenido')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-md-5">
                    
                    <h1 class="h3 fw-bold mb-2 text-dark">Editar Cliente</h1>
                    <p class="text-secondary mb-4">
                        Modifique los datos correspondientes del cliente.
                    </p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Revise los campos marcados antes de continuar.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('clientes.update', $cliente) }}">
                        @csrf
                        @method('PUT')

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">Nombre completo</label>
                            <input
                                type="text"
                                id="nombre"
                                name="nombre"
                                value="{{ old('nombre', $cliente->nombre) }}"
                                maxlength="100"
                                class="form-control @error('nombre') is-invalid @enderror"
                                placeholder="Ej. Juan Pérez"
                                required
                            >
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="correo" class="form-label fw-semibold">Correo Electrónico</label>
                            <input
                                type="email"
                                id="correo"
                                name="correo"
                                value="{{ old('correo', $cliente->correo) }}"
                                maxlength="150"
                                class="form-control @error('correo') is-invalid @enderror"
                                placeholder="Ej. correo@ejemplo.com"
                                required
                            >
                            @error('correo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                            <input
                                type="text"
                                id="telefono"
                                name="telefono"
                                value="{{ old('telefono', $cliente->telefono) }}"
                                maxlength="20"
                                class="form-control @error('telefono') is-invalid @enderror"
                                placeholder="Ej. 3123456789"
                                required
                            >
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ciudad -->
                        <div class="mb-3">
                            <label for="ciudad" class="form-label fw-semibold">Ciudad</label>
                            <input
                                type="text"
                                id="ciudad"
                                name="ciudad"
                                value="{{ old('ciudad', $cliente->ciudad) }}"
                                maxlength="80"
                                class="form-control @error('ciudad') is-invalid @enderror"
                                placeholder="Ej. Pasto"
                                required
                            >
                            @error('ciudad')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-4">
                            <label for="mensaje" class="form-label fw-semibold">Mensaje o Comentarios</label>
                            <textarea
                                id="mensaje"
                                name="mensaje"
                                rows="4"
                                maxlength="1000"
                                class="form-control @error('mensaje') is-invalid @enderror"
                                placeholder="Escriba un mensaje o detalles adicionales..."
                            >{{ old('mensaje', $cliente->mensaje) }}</textarea>
                            @error('mensaje')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botones de Acción -->
                        <button type="submit" class="btn btn-success px-4 py-2 fw-semibold">
                            <i class="bi bi-save me-1"></i> Guardar cambios
                        </button>
                        
                        <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                            Cancelar
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

