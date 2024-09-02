@extends('body.cuerpo') 

@section('content')
@include('partials.navbar')
    <h1>Editar Cliente</h1>

    <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
