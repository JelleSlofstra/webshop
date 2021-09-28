@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alles van het merk '{{$manufacturer->name}}'</h1>
    @include('partials/productlist')
</div>
@endsection

@push('scripts')
    <script>
        $('.filter').on('change', function(event){
            manufilter = $('input[name=manufacturer]:checked', '#manufilter').val()
            catfilter = $('input[name=category]:checked', '#catfilter').val()
            pricefilter = $('input[name=price]:checked', '#pricefilter').val()

            switch (pricefilter) {
                case 'no-pricefilter':
                    lowerprice = 0
                    upperprice = 1000000
                    break;
                case '0-20':
                    lowerprice = 0
                    upperprice = 20
                    break;
                case '20-50':
                    lowerprice = 20
                    upperprice = 50
                    break;
                case '50-100':
                    lowerprice = 50
                    upperprice = 100
                    break;
                case '100-200':
                    lowerprice = 100
                    upperprice = 200
                    break;
                case '200-500':
                    lowerprice = 200
                    upperprice = 500
                    break;
                case '500-1000':
                    lowerprice = 500
                    upperprice = 1000
                    break;
                case '1000-2500':
                    lowerprice = 1000
                    upperprice = 2500
                    break;
                case 'over2500':
                    lowerprice = 2500
                    upperprice = 1000000
                    break;
            }

            //foreach product-container, show it, then hide if it's not part of the filter
            $('.product-container').each(function(event){                
                //re-show the container
                $(this).show()                

                //if a filter for manufacturer is set, hide products from other manufacturers
                if (manufilter !== 'no-manufilter' && manufilter !== $(this).attr('manu')) {
                    $(this).hide()
                }

                //if a filter for category is set, hide products from other categories
                if (catfilter !== 'no-catfilter' && catfilter !== $(this).attr('cat')) {
                    $(this).hide()
                }
                
                //if the price is out of the bounds of the pricefilter, hide this product
                if ($(this).attr('price') < lowerprice || $(this).attr('price') > upperprice) {
                    $(this).hide()
                }
            })
        })
    </script>
@endpush