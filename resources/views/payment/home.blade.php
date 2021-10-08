@extends('layouts.app')

@section('content')

<div class='container text-center payment-container'>
    <div>
        <h1>Klaar om te betalen?</h1>
    </div>

    <div>
        <img src="{{ asset('images/payment.jpeg') }}" class='payment-image'>
    </div>

    <div> 
        totaal: &euro; {{ $totalprice }}   
    </div>

    <div>
        <form method="post" action="{{ route('checkout') }}" id="checkout">
            @csrf
            <button class="btn btn-primary" type="submit">Bestel!</button>
        </form>

        <div id="error-message" class="bg-primary text-white rounded mx-auto mt-3"></div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).on('submit', '#checkout', function(event) {
        event.preventDefault()

        axios({
            url: '{{ route("checkout") }}',
            method: 'post',
            
        }).then(function(response) {
            if (response.data.success) {
                window.location.href = response.data.redirect
            } else {
                $('#error-message').html(response.data.message)
            }
        }).catch(function(error) {

        })
    })
</script>
@endpush