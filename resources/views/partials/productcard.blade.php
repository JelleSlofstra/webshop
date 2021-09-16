<div class="col-md-6">
    <a href="{{ route('products.show', $product->id) }}">
        <div class="card">
            <img src="../images/{{$product->productImages->first->image->image}}" class="card-img-top rounded" alt="...">                                               
            
            <div class="card-body">
                <h3 class="card-title">{{$product->name}} voor {{$product->price}} euro</h3> 
                <ul>
                    <li>Merk: {{$product->manufacturer->name}}</li>
                    <li>Categorie: {{$product->category->name}}</li>
                </ul>
                <p>{{$product->description}}</p>                        
            </div>
        </div>
    </a>                        
</div>