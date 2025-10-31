@extends('app')

@section('title', 'Registrar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<section class="accounts">
    <div class="card">
        <h2>CRIAR CONTA</h2>
        <p>Organize suas contas a pagar em um só lugar.</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="dropdown">
                <input type="text" name="name" id="00" placeholder="NOME" required>
                <input type="email" name="email" id="01" placeholder="EMAIL" required>
                <input type="email" name="email_confirmation" id="01" placeholder="CONFIRME SEU EMAIL" required>
                <input type="password" name="password" id="02" placeholder="SENHA" required>
                <input type="password" name="password_confirmation" id="02" placeholder="CONFIRME SUA SENHA" required>
            </div>
            <button class="loginBtn" type="submit">Criar Conta</button>
            <div class="registerlink"><a href="{{ route('login') }}">Já possui uma conta? Clique aqui</a></div>
        </form>
    </div>
</section>
@endsection