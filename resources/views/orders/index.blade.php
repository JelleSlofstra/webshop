@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orderoverzicht voor {{ Auth::user()->username }}</h1>
    
    @foreach (Auth::user()->orders as $order)
        <a href="{{route('showOrder', $order)}}">
            <div class="card">
                Ordernummer: {{$order->id}}, datum: {{$order->created_at}}
            </div>
        </a>        
    @endforeach
</div>    
@endsection