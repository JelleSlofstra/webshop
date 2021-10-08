<div class="col-md-6 my-3 product-container" cat="{{ $product->category->id }}" manu="{{ $product->manufacturer->id }}" price="{{ $product->price }}">
    <a href="{{ route('products.show', $product) }}">
        <div class="card product-card">
            <img src="{{ asset('/images/' . $product->productImages->first->image->image)}}" class="rounded card-img-top" alt="...">                                               
            
            
            <div class="card-body">
                <h3 class="card-title">{{ $product->name }} voor &euro; {{ $product->price }}</h3> 
                <ul>
                    <li>Merk: {{ $product->manufacturer->name }}</li>
                    <li>Categorie: {{ $product->category->name }}</li>
                </ul>
                <p>{{ $product->description }}</p>                        
            </div>
        </div>
    </a>                        
</div>