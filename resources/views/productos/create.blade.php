@extends('layouts.app')

@section('titulo', 'Registrar Producto')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 fw-bold mb-2">Registrar Producto</h1>
                    <p class="text-secondary mb-4">Complete los campos para agregar un producto al inventario de MAXTERCAN.</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Revise los campos marcados antes de continuar.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control @error('nombre') is-invalid @enderror" placeholder="Ej. Snack Chunky Dog">
                            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" id="precio" name="precio" value="{{ old('precio') }}" class="form-control @error('precio') is-invalid @enderror" placeholder="Ej. 9000">
                            @error('precio')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" id="cantidad" name="cantidad" value="{{ old('cantidad') }}" class="form-control @error('cantidad') is-invalid @enderror" placeholder="Ej. 20">
                            @error('cantidad')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <button type="submit" class="btn btn-cafe px-4">Guardar producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary ms-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection