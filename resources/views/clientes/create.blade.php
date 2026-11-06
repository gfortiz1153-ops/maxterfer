@extends('layouts.app')

@section('title', 'Registrar cliente')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 fw-bold mb-2">Registrar cliente</h1>
                    <p class="text-secondary mb-4">
                        Complete los cinco campos para guardar la información.
                    </p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Revise los campos marcados antes de continuar.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input
                                type="text"
                                id="nombre"
                                name="nombre"
                                value="{{ old('nombre') }}"
                                class="form-control @error('nombre') is-invalid @enderror"
                            >
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input
                                type="email"
                                id="correo"
                                name="correo"
                                value="{{ old('correo') }}"
                                class="form-control @error('correo') is-invalid @enderror"
                            >
                            @error('correo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input
                                type="tel"
                                id="telefono"
                                name="telefono"
                                value="{{ old('telefono') }}"
                                class="form-control @error('telefono') is-invalid @enderror"
                            >
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input
                                type="text"
                                id="ciudad"
                                name="ciudad"
                                value="{{ old('ciudad', 'Pasto') }}"
                                class="form-control @error('ciudad') is-invalid @enderror"
                            >
                            @error('ciudad')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea
                                id="mensaje"
                                name="mensaje"
                                rows="4"
                                class="form-control @error('mensaje') is-invalid @enderror"
                            >{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-cafe px-4">
                            Guardar cliente
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
