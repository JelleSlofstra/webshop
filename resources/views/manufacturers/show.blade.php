@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Hier komen de filters
        </div>
        <div class="col-md-10">
            <h1>Alles van het merk '{{$manufacturer->name}}'</h1>
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    @include('partials.productcard')
                @endforeach
            </div>
        </div>           
    </div>
</div>
@endsection