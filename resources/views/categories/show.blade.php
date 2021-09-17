@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$category->name}}</h1>
    <a href="/">Home</a> > 
    <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
    @include('partials/productlist')
</div>
@endsection