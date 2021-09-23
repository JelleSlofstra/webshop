@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-10">
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-md-6" >
                    <a href="{{ route('categories.show', $category->id) }}">
                        <div class="card category-card">
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