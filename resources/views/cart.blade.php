@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Winkelwagen</h1>
    @isset($emptycart)
        Je winkelwagen is leeg!
    @endisset

    @isset($cart)
    <a href="/emptycart">
        <button>Winkelwagen leegmaken</button>
    </a>
    
    <div class="row cart-contents">
        @foreach($variants as $variant)
            <div class="col-12 card">
                {{$cart[$variant->id]}}x Model {{ $variant->product->name }}: 
                <ul>
                    <li>Kleur: {{ $variant->colour->name }}</li>
                    <li>Gender: {{ $variant->gender->name }}</li>
                    <li>Maat: {{ $variant->size->name }}</li>
                </ul>

                <div class="add-to-cart">
                    <button pv_id="{{$variant->id}}">Voeg toe</button>
                </div>
            </div>   
        @endforeach
    </div>
    @endisset 
</div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.add-to-cart button', function(event){
            axios({
                method: 'POST',
                url:    '{{ route("addToCart") }}',
                data: {
                    productVariantId: $(this).attr('pv_id'),
                    cart: true
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