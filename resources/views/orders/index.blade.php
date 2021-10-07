@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Orderoverzicht voor {{ Auth::user()->username }}</h1>
    @isset($message)
        <div class="bg-primary text-white rounded">{{ $message }}</div>
    @endisset

    @foreach(Auth::user()->orders as $order)
        <a href="{{ route('orders.show', $order) }}">
            <div class="row justify-content-center">
                <div class="card col-8 my-3 p-4">
                    <div class="row">
                        <div class="col-md-4 my-auto">
                            <div class="my-3">
                                <strong>Ordernummer:</strong>
                            </div>
                            <div>
                                {{ $order->id }}
                            </div>
                        </div>
                        <div class="col-md-4 my-auto">
                            <div class="my-3">
                                <strong>Datum:</strong>
                            </div>
                            <div>
                                {{ $order->created_at->format('j F, Y') }}
                            </div>
                        </div>
                        <div class="col-md-4 my-auto">
                            <div class="my-3">
                                <strong>Totaalprijs:</strong>
                            </div>
                            <div>
                                &euro; {{ $order->totalOrderPrice($order) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection
