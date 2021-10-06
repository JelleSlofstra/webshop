@extends('layouts.app')

@section('content')

<div class='container payment-container'>


<div class='row justify-content-center'> 
        <h1>Klaar om te betalen?</h1>
    </div>
    <div class='row justify-content-center'> 
        <img src="{{ asset('images/payment.jpeg') }}" class='payment-image'>
    </div>
    <div class='row justify-content-center'> totaal: &euro; {{$totalprice}}</div>
    <div>
        <a href="{{ route('checkout') }}" class='row justify-content-center'> <button class="btn btn-primary">Bestel!</button></a>

    </div>
</div>
</div>   


@endsection