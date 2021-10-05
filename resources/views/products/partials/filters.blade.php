<button id="toggle-filters" class="btn btn-primary d-lg-none">Toon/verberg filters</button>
<div id="filter-container" class="d-none d-lg-block my-3">
    <h3>Filteropties</h3>

    <div class="row">
        <!-- merkenfilter -->
        @empty($manufacturer)
        <div class="col-md col-lg-12 my-3">
            <form id="manufilter">
                <h4>Merken</h4>
                <div>
                    <input type="radio" id="no-manufilter" name="manufacturer" class="filter" value="no-manufilter" checked>
                    <label for="no-manufilter">Geen filter</label>
                </div>
                @foreach ($manufacturers as $filtermanu)
                    <div>
                        <input type="radio" id="{{$filtermanu->id}}" name="manufacturer" class="filter" value="{{$filtermanu->id}}">
                        <label for="{{$filtermanu->id}}">{{$filtermanu->name}}</label>
                    </div>                
                @endforeach  
            </form>
        </div>
        @endempty

        <!-- categorienfilter -->
        @empty($category)
        <div class="col-md col-lg-12 my-3">
            <form id="catfilter">
                <h4>Categorieen</h4>
                <div>
                    <input type="radio" id="no-catfilter" name="category" class="filter" value="no-catfilter" checked>
                    <label for="no-catfilter">Geen filter</label>
                </div>
                @foreach ($categories as $filtercat)
                    <div>
                        <input type="radio" id="{{$filtercat->id}}" name="category" class="filter" value="{{$filtercat->id}}">
                        <label for="{{$filtercat->id}}">{{$filtercat->name}}</label>
                    </div>                
                @endforeach 
            </form>
        </div>
        @endempty

        <!-- prijzenfilter -->
        <div class="col-md col-lg-12 my-3">
            <form id="pricefilter">
                <h4>Prijzen</h4>
                <div>
                    <input type="radio" id="no-pricefilter" name="price" class="filter" value="no-pricefilter" checked>
                    <label for="no-pricefilter">Geen filter</label>
                </div>
                <div>
                    <input type="radio" id="0-20" name="price" class="filter" value="0-20">
                    <label for="0-20">tot 20</label>
                </div>
                <div>
                    <input type="radio" id="20-50" name="price" class="filter" value="20-50">
                    <label for="20-50">20-50</label>
                </div>
                <div>
                    <input type="radio" id="50-100" name="price" class="filter" value="50-100">
                    <label for="50-100">50-100</label>
                </div>
                <div>
                    <input type="radio" id="100-200" name="price" class="filter" value="100-200">
                    <label for="100-200">100-200</label>
                </div>
                <div>
                    <input type="radio" id="200-500" name="price" class="filter" value="200-500">
                    <label for="200-500">200-500</label>
                </div>
                <div>
                    <input type="radio" id="500-1000" name="price" class="filter" value="500-1000">
                    <label for="500-1000">500-1000</label>
                </div>
                <div>
                    <input type="radio" id="1000-2500" name="price" class="filter" value="1000-2500">
                    <label for="1000-2500">1000-2500</label>
                </div>
                <div>
                    <input type="radio" id="over2500" name="price" class="filter" value="over2500">
                    <label for="over2500">vanaf 2500</label>
                </div>
            </form> 
        </div>
    </div>
</div> 