@extends('layouts.master')
@section('content')
<div class="product-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="product-promo">
                    <h2>{{$name}}</h2>
<!--                    <p>Our Premium collection includes suits of the highest quality fabrics; the best of the best. </p>-->
                </div>
                <div class="submenu">
                    <ul>
@if(!empty($other_cat))

@foreach($other_cat as $cats)

<li><a href="/products/{{$maincategory_name}}/{{$cats->slug}}">{{$cats->name}}</a></li>

@endforeach

@endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                

                <!-- Build your select: -->
                <!-- Note the missing multiple attribute! -->

<!-- Note the missing multiple attribute! -->


<example-component></example-component>


</div>
               
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" id="filter_data">
       

<?php 

use App\Discount;

 ?>

@foreach($products as $product)
        <div class="col-lg-3 ">
            <a href="/products/{{$maincategory_name}}/{{$category_name}}/{{$product->slug}}" class="single-product-box">
                <!--                <span class="tiker">New</span>-->
                <div class="single-product-img">
                    <div class="single-product-img">
                        <div class="single-image">
                            <img src="/storage/<?php echo $product->fabric_image ?>" alt="Product image">
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3>{{$product->name}}</h3>
                    <div class="product-tag">
                    
<?php 

$discount_count = Discount::where(['status'=> 1])->count();

$reg_price = $product->reg_price;

if ($discount_count == 0) {   

    echo "<span class='orginal-price'><span>$</span>$reg_price</span>";

}else{

$discount = Discount::where(['status'=> 1])->first();

$amount_type = $discount->amount_type;


if($amount_type == "Percentage") {  

$discount = Discount::where(['status'=> 1])->first();

$reg_price = $product->reg_price;

$amount = $discount->amount; 

$discount_price = $reg_price-($reg_price*$amount)/100;

echo "<span class='orginal-price'><del><span>$</span>$reg_price</del></span>

<span class='sales-price'><span>$</span>$discount_price</span>

<span class='discounttg'>$amount % OFF</span>";
                        

}elseif($amount_type == "Fixed"){

$discount = Discount::where(['status'=> 1])->first();

$amount = $discount->amount;

$reg_price = $product->reg_price;

$discount_price = $reg_price-$amount;

echo "<span class='orginal-price'><del><span>$</span>$reg_price</del></span>
<span class='sales-price'><span>$</span>$discount_price</span>
<span class='discounttg'>$amount Dollar OFF</span>";


}

}


 ?>


                    </span>
                    </div>
                </div>
            </a>
        </div>
@endforeach


        

    </div>

    
    
</div>




<div class="container">
    <div class="row">



    </div>
</div>
@endsection