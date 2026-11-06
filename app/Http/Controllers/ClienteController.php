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
//funcion para guardar datos del formulario
    public function store(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'nombre' => [ 'string', 'max:100'],
            'correo' => ['email', 'max:150', 'unique:clientes,correo'],
            'telefono' => [ 'string', 'max:20'],
            'ciudad' => [ 'string', 'max:80'],
            'mensaje' => [ 'string', 'max:1000'],
        ]);

        Cliente::create($datos);

        return redirect()
            ->route('clientes.index')
            ->with('exito', 'Cliente registrado correctamente.');
    }


}
