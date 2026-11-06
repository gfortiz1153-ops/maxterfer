@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <header class="text-white py-5" style="background-color: #eb8424;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-warning text-dark mb-3">MAXTERCAN</span>
                    <h1 class="display-3 fw-bold">
                        Más que una tienda, un hogar para los amantes de las mascotas.
                    </h1>
                    <p class="lead">
                        Encuentra alimentos, snacks y productos de calidad para cuidar, consentir y hacer feliz a tu mascota.
                    </p>
                    <a href="{{ route('productos.index') }}" class="btn btn-warning btn-lg mt-3 text-dark fw-bold">
                        Ver inventario de productos
                    </a>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">🐶🐱</span>
                    <h2 class="mt-3">🐾 Donde cada mascota encuentra amor, cuidado y felicidad.</h2>
                </div>
            </div>
        </div>
    </header>
@endsection