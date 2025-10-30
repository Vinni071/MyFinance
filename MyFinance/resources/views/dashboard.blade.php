@extends('app')

@section('title', 'Dashboard')

@section('content')
<section class="dashboard">
    <h1>Dashboard</h1>
    <p>Bem-vindo ao seu painel de controle financeiro</p>
    
    <div class="accounts-summary">
        <div class="card">
            <h2>CONTAS</h2>
            <p>Organize suas contas a pagar em um só lugar.</p>
            <div class="dropdown">
                <!-- Account list will go here -->
            </div>
            <button class="add-btn">+</button>
        </div>
    </div>
</section>
@endsection