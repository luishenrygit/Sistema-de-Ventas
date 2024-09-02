@extends('body.cuerpo')

@section('title', 'Login')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <form action="{{ route('login') }}" method="POST" onsubmit="saveCredentials()">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Verifica si ya hay datos en localStorage
        if (localStorage.getItem('email')) {
            document.getElementById('email').value = localStorage.getItem('email');
        }
    });

    function saveCredentials() {
        var email = document.getElementById('email').value;
        var rememberMe = document.getElementById('rememberMe').checked;

        if (rememberMe && email) {
            localStorage.setItem('email', email);
            console.log('Email saved:', email); // Verifica en la consola

        } else {
            localStorage.removeItem('email');
            console.log('Email removed'); 
        }
    }
</script>

@endsection
