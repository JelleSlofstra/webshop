@extends('layouts.app')

@section('content')
<div class="container text-center">


    <div class="row justify-content-center">

        <!-- productgedeelte -->
        <div class="col-lg-9 my-2">
            <h1>{{ $product->name }}</h1>
            <a href="/">Home</a> >
            <a
                href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a>
            >
            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            <div class="card">
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($product->productImages as $image)
                            <div class="carousel-item @if ($loop->first)active @endif">
                                <img src="{{ asset('/images/' . $image->image) }}" id="carousel-image" alt="...">
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
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <h5 class="card-subtitle">
                        Merk: <a href="{{ route('manufacturers.show', $product->manufacturer) }}">{{ $product->manufacturer->name }}</a>,
                        categorie: <a href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a>
                    </h5>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>

        <!-- bestelopties -->
        <div class="col-lg-3 my-auto">
            <div class="container">
                <h2 class="text-danger font-weight-bold">&euro; {{ $product->price }}</h2>
                <h2>Bestelopties</h2>

                <div class="row">
                    <!-- Kleuropties -->
                    <div class="col-md-4 col-lg-12 mt-3">
                        <div>
                            <label for="colour">Kies een kleur</label>
                        </div>
                        <div>
                            <select id="colour" name="colour" class="form-control text-center">
                                @foreach($colours as $colour)
                                    <option value="{{ $colour->id }}">{{ $colour->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Maatopties -->
                    <div class="col-md-4 col-lg-12 mt-3">
                        <div>
                            <label for="size">Kies een maat</label>
                        </div>
                        <div>
                            <select id="size" name="size" class="form-control text-center">
                                @foreach($sizes as $size)
                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Genderopties -->
                    <div class="col-md-4 col-lg-12 mt-3">
                        <div>
                            <label for="gender">Kies een model</label>
                        </div>
                        <div>
                            <select id="gender" name="gender" class="form-control text-center ">
                                @foreach($genders as $gender)
                                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="add-to-cart mt-4">
                    <button p_id="{{ $product->id }}" class="btn btn-primary">In winkelwagen</button>
                </div>

                <a href="{{ route('cart') }}" class="btn btn-primary mt-4">Open je winkelwagen</a>

                <div id="flash" class="bg-primary text-white rounded text-center mt-3">
                    Toegevoegd aan winkelwagen!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.add-to-cart button', function (event) {
            let size_id = $('#size').val()
            let colour_id = $('#colour').val()
            let gender_id = $('#gender').val()
            let product_id = $(this).attr('p_id')

            axios({
                method: 'POST',
                url: '{{ route("addToCart") }}',
                data: {
                    size_id: size_id,
                    colour_id: colour_id,
                    gender_id: gender_id,
                    product_id: product_id
                }
            }).then(function (response) {
                if (response.data.success) {
                    $('#flash').fadeIn(1250).fadeOut(1250)
                }
            }).catch(function (error) {

            })
        })

    </script>
@endpush
