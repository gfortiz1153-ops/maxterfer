<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClienteController extends Controller
{
    public function index(): View
    {
        $clientes = Cliente::latest()->get();

        return view('clientes.index', compact('clientes'));
    }

    public function create(): View
    {
        return view('clientes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'email', 'max:150', 'unique:clientes,correo'],
            'telefono' => ['required', 'string', 'max:20'],
            'ciudad' => ['required', 'string', 'max:80'],
            'mensaje' => ['required', 'string', 'max:1000'],
        ]);

        Cliente::create($datos);

        return redirect()
            ->route('clientes.index')
            ->with('exito', 'Cliente registrado correctamente.');
    }
}
