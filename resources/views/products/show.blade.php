@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$product->name}}</h1>
    <a href="/">Home</a> > 
    <a href="{{route('categories.show', $product->category->id)}}">{{$product->category->name}}</a> >
    <a href="{{route('products.show', $product->id)}}">{{$product->name}}</a>

    <div class="row justify-content-center">

        <!-- productgedeelte -->
        <div class="col-md-9">  
            <div class="card">
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($product->productImages as $image)
                        <div class="carousel-item @if ($loop->first)active @endif">
                            <img src="../images/{{$image->image}}" class="d-block" id="carousel-image" alt="...">
                        </div>
                    @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>              
                                  
                <div class="card-body">
                    <h3 class="card-title">{{$product->name}}</h3> 
                    <h5 class="card-subtitle">Merk: <a href="{{route('manufacturers.show', $product->manufacturer->id)}}">{{$product->manufacturer->name}}</a>
                    , categorie: <a href="{{route('categories.show', $product->category->id)}}">{{$product->category->name}}</a></h5>  
                    <p>{{$product->description}}</p>                        
                </div>
            </div>
        </div>

        <!-- bestelopties -->
        <div class="col-md-3">
            <div class="container">
                <h2 style="color:red">{{$product->price}} Euro</h2>
                <h2>Bestelopties</h2>
                    <!-- Kleuropties -->
                    <div>
                        <label for="colour">Kies een kleur</label>
                    </div>
                    <div>
                        <select id="colour" name="colour">
                            @foreach ($colours as $colour)
                                <option value="{{$colour->id}}">{{$colour->name}}</option>
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
                                <option value="{{$size->id}}">{{$size->name}}</option>
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
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="add-to-cart">
                        <button p_id="{{$product->id}}">In winkelwagen</button>
                    </div>

                    <div class="product-variant">
                    </div>
            </div>
        </div>         
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.add-to-cart button', function(event){
            let size_id = $('#size').val()
            let colour_id = $('#colour').val()
            let gender_id =  $('#gender').val()
            let product_id = $(this).attr('p_id')

            axios({
                method: 'POST',
                url:    '{{ route("addToCart") }}',
                data: {
                    size_id: size_id,
                    colour_id: colour_id,
                    gender_id: gender_id,
                    product_id: product_id
                }
            }).then(function(response) {
                if (response.data.succes) {
                    console.log(response.data.variant.id)
                }
            }).catch(function(error){

            })
        })
    </script>   
@endpush