@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alles van het merk '{{$manufacturer->name}}'</h1>
    @include('partials/productlist')
</div>
@endsection