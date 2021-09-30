@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
  @foreach ($cart->cartcontents as $cartProduct)
        <div class="col-4 border" id="checkout">
            <ul>
                <li>Product:{{$cartProduct->amount}} keer {{$cartProduct->productVariant->product->name}}</li>                        
                <li>Model:{{$cartProduct->productvariant->gender->name}} </li>
             <li> Maat:{{$cartProduct->productvariant->size->name}}</li>
             <li> Kleur:{{$cartProduct->productvariant->colour->name}}</li>     
            </ul>
        </div>
        
            <div class="col-4 border" id="checkout">
                <img class="card-img-top" src="../images/{{$cartProduct->productvariant->product->ProductImages->first->image->image}}" alt="Card image cap">
            </div>
                <div class="col-4 border" id="checkout">
                    <ul>                        
                        <li>Prijs excl btw: &euro; {{$cartProduct->productvariant->product->price}}</li>
                        <li>BTW: {{$cartProduct->productvariant->product->vatPercentage()}}%</li>
                        <li>Totaalprijs voor {{$cartProduct->amount}} stuks, inclusief btw &euro; {{$cartProduct->productvariant->product->vatIncPrice($cartProduct->amount)}}
                    </ul>  
                </div>
    @endforeach
  </div>
</div>
@endsection
