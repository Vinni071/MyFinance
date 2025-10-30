@extends('app')

@section('title', 'Preços')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endsection

@section('content')
<section class="hero">
    <h1>MyFinance</h1>
    <p>O seu App de Finanças</p>
</section>

<section class="pricing-plans">
    <div class="card">
        <div class="content">
            <div class="title">GRÁTIS</div>
            <div class="price">R$0.00</div>
            <div class="description">Com anúncios. <p>Até apenas 5 faturas.</p> <p></p></div>
        </div>
        <button>Inscreva-se</button>
    </div>
    <div class="card">
        <div class="content">
            <div class="title">PRO</div>
            <div class="price">R$9.99</div>
            <div class="description">Sem anúncios. <p>O dobro de faturas.</p></div>
        </div>
        <button>Inscreva-se</button>
    </div>
    <div class="card">
        <div class="content">
            <div class="title">PREMIUM</div>
            <div class="price">R$19.99</div>
            <div class="description">Sem anúncios. <p>Organização de faturas ilimitadas.</p></div>
        </div>
        <button>Inscreva-se</button>
    </div>
</section>
@endsection