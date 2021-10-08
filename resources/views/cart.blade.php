@extends('layouts.app')

@section('content')
<div class="container  cart-contents">
    <h1>Winkelwagen</h1>
    @isset($emptycart)
        Je winkelwagen is leeg!
    @endisset

    @isset($cart)
        <button id="empty-cart" class="btn btn-primary update-cart">Winkelwagen leegmaken</button>
        <a href="{{ route('payment') }}" class="btn btn-primary">Afrekenen</a>


        <div class="row text-center">
            @foreach($variants as $variant)
                <div class="col-12 card my-3 p-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 my-auto">
                            <img src="{{ asset('/images/' . $variant->product->productImages->first->image->image) }}"
                                alt="" class="cart-img d-block mx-auto my-2 rounded">
                            <span class="d-block">
                                <button id="add-one" pv_id="{{ $variant->id }}"
                                    class="d-inline btn btn-primary update-cart">+</button>
                                <button id="remove-one" pv_id="{{ $variant->id }}"
                                    class="d-inline btn btn-primary update-cart">-</button>
                                <button id="remove-all" pv_id="{{ $variant->id }}"
                                    class="d-inline btn btn-primary update-cart">
                                    <i class="far fa-trash-alt"></i></button>
                            </span>
                        </div>

                        <div class="col-md-4 col-lg-6 my-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 my-auto">
                                    <div class="my-3">
                                        <strong>Model:</strong>
                                    </div>
                                    <div>
                                        {{ $cart[$variant->id] }}x {{ $variant->product->name }}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 my-auto">
                                    <div class="my-3">
                                        <strong>Opties:</strong>
                                    </div>
                                    <div>
                                        {{ $variant->size->name }}, {{ $variant->colour->name }},
                                        {{ $variant->gender->name }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 my-auto">
                            <div class="my-3">
                                <strong>Prijs excl btw ({{ $variant->product->vatPercentage() }}%):</strong> &euro;
                                {{ $variant->product->price }}
                            </div>
                            <div>
                                <strong>Totaalprijs voor {{ $cart[$variant->id] }} stuk(s):</strong> &euro;
                                {{ $variant->product->vatIncPrice($cart[$variant->id]) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        Totaalprijs: &euro; {{ $totalprice }}
        <a href="{{ route('payment') }}" class="btn btn-primary">Afrekenen</a>
    @endisset
</div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '#add-one', function (event) {
            axios({
                method: 'POST',
                url: '{{ route("addToCart") }}',
                data: {
                    productVariantId: $(this).attr('pv_id')
                }
            }).then(function (response) {
                if (response.data.success) {
                    $('.cart-contents').html(response.data.html)
                }
            }).catch(function (error) {

            })
        })

        $(document).on('click', '#remove-one', function (event) {
            axios({
                method: 'POST',
                url: '{{ route("removeOneFromCart") }}',
                data: {
                    productVariantId: $(this).attr('pv_id')
                }
            }).then(function (response) {
                if (response.data.success) {
                    $('.cart-contents').html(response.data.html)
                }
            }).catch(function (error) {

            })
        })

        $(document).on('click', '#remove-all', function (event) {
            axios({
                method: 'POST',
                url: '{{ route("removeAllFromCart") }}',
                data: {
                    productVariantId: $(this).attr('pv_id')
                }
            }).then(function (response) {
                if (response.data.success) {
                    $('.cart-contents').html(response.data.html)
                }
            }).catch(function (error) {

            })
        })

        $(document).on('click', '#empty-cart', function (event) {
            axios({
                method: 'POST',
                url: '{{ route("emptyCart") }}',
                data: {
                }
            }).then(function (response) {
                if (response.data.success) {
                    $('.cart-contents').html(response.data.html)
                }
            }).catch(function (error) {

            })
        })

    </script>
@endpush
