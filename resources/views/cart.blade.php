@extends('layouts.app')

@section('content')
<div class="container  cart-contents">
    <h1>Winkelwagen</h1>
    @isset($emptycart)
        Je winkelwagen is leeg!
    @endisset

    @isset($cart)
    <button id="empty-cart" class="btn btn-primary update-cart">Winkelwagen leegmaken</button>
    <a href="{{ route('checkout') }}"><button class="btn btn-primary">Afrekenen</button></a>

    
    <div class="row">
        @foreach($variants as $variant)
            <div class="col-12 card my-3 py-3">
                <div class="row">
                    <div class="col-8">
                        {{$cart[$variant->id]}}x Model {{ $variant->product->name }}: 
                        <ul>
                            <li>Kleur: {{ $variant->colour->name }}</li>
                            <li>Gender: {{ $variant->gender->name }}</li>
                            <li>Maat: {{ $variant->size->name }}</li>
                        </ul>

                        <div>
                            <button id="add-one" pv_id="{{$variant->id}}" class="btn btn-primary update-cart">+</button>
                            <button id="remove-one" pv_id="{{$variant->id}}" class="btn btn-primary update-cart">-</button>
                            <button id="remove-all" pv_id="{{$variant->id}}" class="btn btn-primary update-cart"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <ul>                        
                            <li>Prijs excl btw: &euro; {{$variant->product->price}}</li>
                            <li>BTW: {{$variant->product->vatPercentage()}}%</li>
                            <li>Totaalprijs voor {{$cart[$variant->id]}} stuks: &euro; {{$variant->product->vatIncPrice($cart[$variant->id])}}</li>
                        </ul>                
                    </div>
                </div>                
            </div>   
        @endforeach
    </div>
    Totaalprijs: &euro; {{$totalprice}}
    <a href="{{ route('payment') }}"><button class="btn btn-primary">Afrekenen</button></a>
    @endisset 
</div>
@endsection

@push('scripts')
<script>
    $(document).on('click', '.update-cart', function(event){
        axios({
            method: 'POST',
            url:    '{{ route("updateCart") }}',
            data: {
                method: $(this).attr('id'),
                productVariantId: $(this).attr('pv_id')
            }
        }).then(function(response) {
            if (response.data.success) {
                $('.cart-contents').html(response.data.html)
            }
        }).catch(function(error){

        })
    })    
</script>
@endpush