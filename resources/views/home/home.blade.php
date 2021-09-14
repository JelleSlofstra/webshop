@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Hier komen de filters
        </div>
        <div class="col-md-10">
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-md-6">
                        <div class="card">
                            <img src="../images/{{$images->first->image->image}}" class="card-img-top rounded" alt="...">                                               
                            
                            <div class="card-body">
                                <h3 class="card-title">{{$category->name}}</h3> 
        <a href="{{ Route('categories.show', $category->id) }}">
        <button>Naar alle {{$category->name}}</button>
        </a> 
                            </div>

                        </div>
                    </div>
                   
                @endforeach

                
            </div>
        </div>           
    </div>
</div>

@endsection