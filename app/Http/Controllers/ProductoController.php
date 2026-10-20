<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index(): View
    {
        $productos = Producto::latest()->get();
        return view('productos.index', compact('productos'));
    }

    public function create(): View
    {
        return view('productos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'precio' => ['required', 'numeric', 'min:0'],
            'cantidad' => ['required', 'integer', 'min:0'],
        ]);

        Producto::create($datos);

        return redirect()
            ->route('productos.index')
            ->with('exito', 'Producto registrado correctamente.');
    }
}
