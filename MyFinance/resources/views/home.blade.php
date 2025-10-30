@extends('app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <h1>MyFinance</h1>
    <p>O seu App de Finanças</p>
    <div class="buttons">
        <a href="{{ route('login') }}"><button class="light-btn">Entrar</button></a>
        <a href="{{ route('register') }}"><button class="dark-btn">Registrar</button></a>
    </div>
</section>

<section class="accounts">
    <div class="card">
        <h2>CONTAS</h2>
        <p>Organize suas contas a pagar em um só lugar.</p>
        <div class="dropdown">
            
        </div>
        <button class="add-btn">+</button>
    </div>
</section>
@endsection