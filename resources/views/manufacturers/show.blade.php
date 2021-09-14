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
                    <div class="col-md-6">
                        <a href="{{ route('products.show', $product->id) }}">
                            <div class="card">
                                <img src="../images/{{$product->productImages->first->image->image}}" class="card-img-top rounded" alt="...">                                               
                                
                                <div class="card-body">
                                    <h3 class="card-title">{{$product->name}} voor {{$product->price}} euro</h3> 
                                    <h5 class="card-subtitle">{{$product->manufacturer->name}}</h2>  
                                    <p>{{$product->description}}</p>                        
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