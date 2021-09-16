@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$category->name}}</h1>
    <a href="/">Home</a> > 
    <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
    <div class="row justify-content-center">
        <div class="col-md-2">
            Hier komen de extra filters, eventueel
        </div>
        <div class="col-md-10">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    @include('partials.productcard')
                @endforeach
            </div>
        </div>           
    </div>
</div>
@endsection