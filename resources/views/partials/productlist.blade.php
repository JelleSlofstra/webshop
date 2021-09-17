<div class="row justify-content-center">
    <div class="col-md-2">
        Hier komen de extra filters, eventueel
    </div>
    <div class="col-md-10">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                @include('partials.productcard')
            @endforeach
        </div>
    </div>           
</div>