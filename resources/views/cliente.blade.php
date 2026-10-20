@extends('layouts.app')
 
@section('titulo', 'Inicio')
 
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

                <form method="POST" action="">
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


                </div>
            </div>
        </div>
    </div>

@endsection
