@extends('layouts.app')

@section('content')
<div class="container  cart-contents">
    <h1>Winkelwagen</h1>
    @isset($emptycart)
        Je winkelwagen is leeg!
    @endisset

    @isset($cart)
    <a href="{{ route('emptyCart') }}"><button>Winkelwagen leegmaken</button></a>
    <a href="{{ route('checkout') }}"><button>Afrekenen</button></a>

    
    <div class="row">
        @foreach($variants as $variant)
            <div class="col-12 card">
                <div class="row">
                    <div class="col-8">
                        {{$cart[$variant->id]}}x Model {{ $variant->product->name }}: 
                        <ul>
                            <li>Kleur: {{ $variant->colour->name }}</li>
                            <li>Gender: {{ $variant->gender->name }}</li>
                            <li>Maat: {{ $variant->size->name }}</li>
                        </ul>

                        <div>
                            <button id="add-one" pv_id="{{$variant->id}}">+</button>
                            <button id="remove-one" pv_id="{{$variant->id}}">-</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <ul>                        
                            <li>Prijs excl btw: &euro;{{$variant->product->price}}</li>
                            <li>BTW: {{$variant->product->vatPercentage()}}%</li>
                            <li>Totaalprijs voor {{$cart[$variant->id]}} stuks: &euro;{{$variant->product->vatIncPrice($cart[$variant->id])}}</li>
                        </ul>                
                    </div>
                </div>                
            </div>   
        @endforeach
    </div>
    Totaalprijs: &euro;{{$totalprice}}
    <a href="{{ route('checkout') }}"><button>Afrekenen</button></a>
    @endisset 
</div>
@endsection

@push('scripts')
    @include('partials/scripts/addOne') 
    @include('partials/scripts/removeOne')     
@endpush