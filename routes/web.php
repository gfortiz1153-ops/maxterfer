<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

//rutas del proyecto protegidas
Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('Nosotros');
Route::get('/Contacto', function () {
    return view('Contacto');
})->name('Contacto');


Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');

Route::get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes.index');

Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'create'])
    ->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])
    ->name('productos.store');

//formulario de registro 

    Route::get('/clientes/crear', [ClienteController::class, 'create'])
    ->name('clientes.create');

Route::post('/clientes', [ClienteController::class, 'store'])
    ->name('clientes.store');


// inicio de la tienda
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('inicio');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
