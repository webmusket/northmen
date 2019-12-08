@extends('layouts.master')
@section('content')
<div class="container">

@if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{!! session('flash_message_success') !!}</strong>
    </div>
@endif

    <div class="row">
        

        <div class="col-lg-6">
            <div class="single-img-big">
                <img src="/storage/<?php echo $products->fabric_image ?>" alt="product">
            </div>
        </div>
        <div class="col-lg-4">
            
            <div class="product-button">


<?php 

use App\Discount;

foreach ($products->product_inventory as $inventory) {
    $quantity = $inventory['quantity'];
    $color = $inventory['color'];
}

 ?>             




<div class="product-title">
            <h1>{{$products->name}}</h1>



<?php 

$discount_count = Discount::where(['status'=> 1])->count();

$price = $products->reg_price;

if ($discount_count == 0) {   

    echo "<span class='orginal-price'><span>$</span>$price</span>";

}else{

$discount = Discount::where(['status'=> 1])->first();

$amount_type = $discount->amount_type;


if($amount_type == "Percentage") {  

$discount = Discount::where(['status'=> 1])->first();

$reg_price = $products->reg_price;

$amount = $discount->amount; 

$price = $reg_price-($reg_price*$amount)/100;

echo "<span class='orginal-price'><span>$</span>$price</span>";
                        

}elseif($amount_type == "Fixed"){

$discount = Discount::where(['status'=> 1])->first();

$amount = $discount->amount;

$reg_price = $products->reg_price;

$price = $reg_price-$amount;

echo "<span class='orginal-price'><span>$</span>$price</span>";


}

}


 ?>

 </div>

<form name="addtoCartForm" id="addtoCartForm" action="{{ url('add-cart') }}" method="post">{{ csrf_field() }}
    <input type="hidden" name="product_id" value="{{ $products->id }}">
    <input type="hidden" name="product_name" value="{{ $products->name }}">
    <input type="hidden" name="product_code" value="{{ $products->barcode }}">
    <input type="hidden" name="image" value="{{ $products->fabric_image }}">
    <input type="hidden" name="product_color" value="{{ $color }}">
    <input type="hidden" name="price" id="price" value="{{ $price }}">
    <div class="product-information"><!--/product-information-->






        <img src="images/product-details/rating.png" alt="" />
        <span>
            <label>Quantity:</label>
            <input name="quantity" type="text" value="1" />
        </span>
        <p><b>Availability: </b><span id="Availability"> @if($quantity>0) In Stock @else Out Of Stock @endif</span></p>
        <p><b>Condition:</b> New</p>

        <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>

         @if($quantity >0)
            <button type="submit" class="btn btn-secondary cart" id="cartButton">
                <i class="fa fa-shopping-cart"></i>
                Add to cart
            </button>
        @endif  
    </div><!--/product-information-->
</form>
                <!--<a  href="{{ url('/order/'.$products->id) }}" class="btn-submit">Order Now</a>-->


@if($products->custom == 1)
<a href="http://makehub.co/customization" class="btn-submit">Customize Now</a>
@endif





            </div>
        </div>
    </div>

        
    
    <div class="row">
            <div class="single-product-tabs">
                        <div class="col-lg-12">
            <ul class="nav product-tab" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Shipping Details</a>
                </li>
            </ul>
            <div class="tab-content single-product-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <h4>Pattern : {{$products->pattern}}</h4>
                    <h4>Color : {{$products->color}}</h4>
                    <h4>Season : {{$products->season}}</h4>
                    <h4>Occation : {{$products->occation}}</h4>
                    <h4>Fabric : {{$products->fabric}}</h4>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h4>Weight : {{$products->weight}}</h4>
                    <h4>Height : {{$products->height}}</h4>
                    <h4>Width : {{$products->width}}</h4>
                    <h4>Length : {{$products->length}}</h4>

                </div>

            </div>
        </div>
            </div>
    </div>


</div>


@endsection