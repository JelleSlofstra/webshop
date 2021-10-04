@extends('layouts.app')

@section('content')


 
<div id="header_order">
<h1> Deze producten heeft u zojuist besteld </h1>
</div>
    
    @foreach ($cart->cartcontents as $cartProduct)
    <div class="cart_section cart_body">
    <div class="container" id="test">
        <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="cart_container container-fluid">
                <div class="row">
                    <div class="cart_item_quantity col-6 col-md-3"><img src="../images/{{$cartProduct->productvariant->product->ProductImages->first->image->image}}" alt="" id="testimage">
                    </div>    
                    <div class="cart_item_name cart_info_col col-6 col-md-3">
                        <div class="cart_item_title">Name</div>
                        <div class="cart_item_text">{{$cartProduct->productVariant->product->name}}</div>
                    </div>
                    <div class="cart_item_quantity cart_info_col col-6 col-md-3">
                        <div class="cart_item_title">Kleur</div>
                        <div class="cart_item_text">{{$cartProduct->productvariant->colour->name}}</div>
                    </div>
                    <div class="cart_item_quantity cart_info_col col-6 col-md-3">
                        <div class="cart_item_title">Maat</div>
                        <div class="cart_item_text">{{$cartProduct->productvariant->size->name}}</div>
                    </div>
                    </div>  
            </div>
        </div>
        
        
      
            <div class="col-xs-12 col-lg-6">
                <div class="cart_container container-fluid">
                        <div class="row">    
                            <div class="cart_item_quantity cart_info_col col-6 col-md-3">
                                        <div class="cart_item_title">Model</div>
                                        <div class="cart_item_text">{{$cartProduct->productvariant->gender->name}} </div>
                                        </div>
                                    <div class="cart_item_quantity cart_info_col col-6 col-md-3">
                                    <div class="cart_item_title">Quantity</div>
                                    <div class="cart_item_text">{{$cartProduct->amount}}</div>
                                    </div>
                                        <div class="cart_item_price cart_info_col col-6 col-md-3">
                                        <div class="cart_item_title">Prijs</div>
                                        <div class="cart_item_text">{{$cartProduct->productvariant->product->price}}</div>
                                        </div>
                                    <div class="cart_item_total cart_info_col col-6 col-md-3">
                                    <div class="cart_item_title">Inc. Btw</div>
                                     <div class="cart_item_text">{{$cartProduct->productvariant->product->vatIncPrice($cartProduct->amount)}}</div>
                                    </div>
                       
                        </div>
                    
                </div>
            </div>
        
        </div>
    </div>
</div>

        @endforeach
      
        <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount"><div>&euro;{{$totalprice}}</div></div>
                        </div>
                    </div>
    </div>
</div>


@endsection

