@extends('layouts.app')

@section('content')

<div class='container'>
    <div><h1>Klaar om te betalen?</h1> </div>
    <div>totaal: &euro; {{$totalprice}}</div>

<div>
<img src="{{ asset('images/payment.jpeg') }}">
</div>

<div>
<button onclick="location.href='checkout'" class="order_button">Bestel!</button>
    </div>
</div>


@endsection
