@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$product->name}}</h1>
    <a href="/">Home</a> > 
    <a href="route(categories.show, $product->category->id)">{{$product->category->name}}</a> >
    <a href="route(products.show, $product->id">{{$product->name}}</a>

    <div class="row justify-content-center">

        <!-- productgedeelte -->
        <div class="col-md-9">            
            <div class="card">
                <img src="../images/{{$product->productImages->first->image->image}}" class="card-img-top rounded" alt="...">                                               
                
                <div class="card-body">
                    <h3 class="card-title">{{$product->name}}</h3> 
                    <h5 class="card-subtitle">Merk: {{$product->manufacturer->name}}, categorie: {{$product->category->name}}</h2>  
                    <p>{{$product->description}}</p>                        
                </div>
            </div>
        </div>

        <!-- bestelopties -->
        <div class="col-md-3">
            <div class="card">
                <h2 style="color:red">{{$product->price}} Euro</h2>
                <h2>Bestelopties</h2>
                <form action="">

                    <!-- Kleuropties -->
                    <div>
                        <label for="colour">Kies een kleur</label>
                    </div>
                    <div>
                        <select id="colour" name="colour">
                            @foreach ($colours as $colour)
                                <option value="{{$colour->colour}}">{{$colour->colour}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Maatopties -->
                    <div>
                        <label for="size">Kies een maat</label>
                    </div>
                    <div>
                        <select id="size" name="size">
                            @foreach ($sizes as $size)
                                <option value="{{$size->name}}">{{$size->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Genderopties -->
                    <div>
                        <label for="gender">Kies een type</label>
                    </div>
                    <div>
                        <select id="gender" name="gender">
                            @foreach ($genders as $gender)
                                <option value="{{$gender->gender}}">{{$gender->gender}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <button type="submit">In winkelwagen</button>
                    </div>
                
                </form>
            </div>
        </div>         
    </div>
</div>
@endsection