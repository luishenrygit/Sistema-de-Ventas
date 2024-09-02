@extends('body.cuerpo') 

@section('content')
@include('partials.navbar')
    <h1>Crear Cliente</h1>

    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
