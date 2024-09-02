<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:clientes',
            'telefono' => 'required',
        ]);

        Cliente::create($request->all());
        return redirect()->route('cliente.index');
    }

    public function show(Cliente $cliente)
    {
        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'required',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
