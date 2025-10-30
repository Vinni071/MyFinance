@extends('app')

@section('title', 'Login')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<section class="accounts">
    <div class="card">
        <h2>LOGIN</h2>
        <p>Organize suas contas a pagar em um só lugar.</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="dropdown">
                <input type="email" name="email" id="01" placeholder="USUÁRIO" required>
                <input type="password" name="password" id="02" placeholder="SENHA" required>
            </div>
            <button class="loginBtn" type="submit">Fazer Login</button>
            <div class="registerlink"><a href="{{ route('register') }}">Ainda não tem uma conta? Cadastre-se</a></div>
        </form>
    </div>
</section>
@endsection