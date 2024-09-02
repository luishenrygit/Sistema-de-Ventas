@extends('body.cuerpo') 

@section('content')
@include('partials.navbar')
    <h1>Detalles del Cliente</h1>

    <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>

    <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</button>
    </form>

    <a href="{{ route('cliente.index') }}">Volver a la lista de clientes</a>
@endsection
