@extends('body.cuerpo') 

@section('content')
@include('partials.navbar')
    <h1>Lista de Clientes</h1>

    <a href="{{ route('cliente.create') }}">Agregar Cliente</a>

    <ul>
        @foreach($clientes as $cliente)
            <li>
                {{ $cliente->nombre }} - 
                <a href="{{ route('cliente.show', $cliente->id) }}">Ver</a> | 
                <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a> | 
                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
