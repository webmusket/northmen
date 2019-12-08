@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="{{ asset('eshoper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshoper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshoper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('eshoper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('eshoper/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('eshoper/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('eshoper/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('eshoper/js/html5shiv.js') }}""></script>
    <script src="{{ asset('eshoper/js/respond.min.js') }}""></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>



<div class="cart-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive-lg">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-active text-center">
                                <th scope="col">Item Description</th>
                                <th scope="col">Your Customizations</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="cart-product">
                                        <span><i class="fa fa-times"></i></span>
                                        <a href="#">Forest Green Tie</a>
                                        <img src="{{ asset('assets/img/cart/Forest-Green-Tie-Roll-petite.jpg') }}" alt="cart item">
                                    </div>
                                </th>
                                <td>
                                    <ul>
                                        <li>View Customizations</li>
                                    </ul>
                                </td>
                                <td>
                                    <input type="number">

                                </td>
                                <td> $139</td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="cart-product">
                                        <span><i class="fa fa-times"></i></span>
                                        <a href="#">Forest Green Tie</a>
                                        <img src="./assets/img/cart/Forest-Green-Tie-Roll-petite.jpg" alt="cart item">
                                    </div>
                                </th>
                                <td>
                                    <ul>
                                        <li>View Customizations</li>
                                        <li><strong>Additions</strong></li>
                                        <li>Jacket Type ($50)</li>
                                        <li>Add Vest ($150)</li>
                                        <li>Extra Pair of Pants ($190)</li>
                                    </ul>
                                </td>
                                <td>
                                    <input type="number">

                                </td>
                                <td> $139</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-price-section">
                    <ul class="pricing-tag">
                        <li>
                            <label for="Subtotal">Subtotal:</label> <span>$650</span>
                        </li>
                        <li>
                            <label for="Shipping">Shipping:</label> <span>$100</span>
                        </li>
                        <li>
                            <label for="Total">Total:</label> <span>$750</span>
                        </li>
                    </ul>
                    <div class="promo-code">
                        <p>Have a Promo Code?</p>
                        <input type="text"><input type="submit" value="Apply">
                    </div>
                </div>
                <div class="check-now">
                <p>Hey there! We’re all set to make your outfit flawless-fit approved.</p>
                <a href="#" class="checkuotbtn">Checkout now</a> or
                <a href="measurements.php" class="mbtn">Update Mesurement</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				@if(Session::has('flash_message_success'))
		            <div class="alert alert-success alert-block">
		                <button type="button" class="close" data-dismiss="alert">×</button> 
		                    <strong>{!! session('flash_message_success') !!}</strong>
		            </div>
		        @endif
		        @if(Session::has('flash_message_error'))
		            <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
		                <button type="button" class="close" data-dismiss="alert">×</button> 
		                    <strong>{!! session('flash_message_error') !!}</strong>
		            </div>
        		@endif   
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $total_amount = 0; ?>
						@foreach($userCart as $cart)
							<tr>
								<td class="cart_product">
									<a href=""><img style="width:100px;" src="/storage/{{$cart->image}}" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">{{ $cart->product_name }}</a></h4>
									<p>Product Code: {{ $cart->product_code }}</p>
								</td>
								<td class="cart_price">
									<p>$ {{ $cart->price }}</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href="{{ url('/cart/update-quantity/'.$cart->id.'/1') }}"> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" size="2">
										@if($cart->quantity>1)
											<a class="cart_quantity_down" href="{{ url('/cart/update-quantity/'.$cart->id.'/-1') }}"> - </a>
										@endif
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$ {{ $cart->price*$cart->quantity }}</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ url('/cart/delete-product/'.$cart->id) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a coupon code you want to use.</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="chose_area">
					<ul class="user_option">
						<li>
							<form action="{{ url('cart/apply-coupon') }}" method="post">{{ csrf_field() }}
								<label>Coupon Code</label>
								<input type="text" name="coupon_code">
								<input type="submit" value="Apply" class="btn btn-default">
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
					    

					    
					    
					    
						@if(!empty(Session::get('CouponAmount')))
							<li>Sub Total <span> <?php echo $total_amount; ?></span></li>
							<li>Coupon Discount <span> <?php echo Session::get('CouponAmount'); ?></span></li>
						
							<li>Grand Total <span> <?php echo $total_amount - Session::get('CouponAmount'); ?></span></li>
							
						@elseif(Cookie::get('referral') !== false)
						    <h1>You are affiliated and you will get discount.</h1>
                            <li>Grand Total <span> <?php echo $total_amount - 10; ?></span></li>
						@else
							<li>Grand Total <span> <?php echo $total_amount; ?></span></li>
						@endif
						
<?php
if(Cookie::get('referral') !== false){
    $refferal_url = Cookie::get('referral');
    //echo $refferal_url; die;
    //$user = User::where('refferal_url','');
    
}
?>


					</ul>
						<a class="btn btn-default update" href="">Update</a>
						<a class="btn btn-default check_out" href="{{ url('/checkout') }}">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->



    <script src="{{ asset('eshoper/js/jquery.js') }}"></script>
	<script src="{{ asset('eshoper/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('eshoper/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('eshoper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshoper/js/main.js') }}"></script>
</body>
</html>
@endsection