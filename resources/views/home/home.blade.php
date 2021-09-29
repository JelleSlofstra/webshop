@extends('layouts.app')

@section('content')

<div class="container">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                <ul>
                <li>{!! \Session::get('success') !!}</li>
                </ul>
                </div>
                @endif
    <div class="row justify-content-center">
       
        <div class="col-md-9">
            <div class="row justify-content-center">
                <div class="container-fluid w-100">
                    <img src="../images/lotofbikes.jpg" id="frontpage-image" alt="..." class="img-fluid w-100">
                    <h1 class="centered text-primary">S&J Fietsen</h1>
                </div>
                 
                @foreach ($categories as $category)
                    <div class="col-md-6 my-3" >
                    <a href="{{ route('categories.show', $category) }}">
                        <div class="card category-card text-center">
                            <img src="../images/categories/{{$category->image}}" class="card-img-top rounded" id="category-image" alt="...">                                               
                            
                            <div class="card-body">
                                <h3 class="card-title">{{$category->name}}</h3> 
                        
                            </div>
                        </div>
                    </a>
                    </div>
                   
                @endforeach

                   
            </div>
        </div>           
    </div>
</div>

@endsection