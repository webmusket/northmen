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
<?php use App\Order; ?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Thanks</li>
			</ol>
		</div>
	</div>
</section>

<section id="do_action">
	<div class="container">
		<div class="heading" align="center">
			<h3>YOUR ORDER HAS BEEN PLACED</h3>
			<p>Your order number is {{ Session::get('order_id') }} and total payable about is INR {{ Session::get('grand_total') }}</p>
			<p>Please make payment by clicking on below Payment Button</p>
			<?php
			
			$orderDetails = Order::getOrderDetails(Session::get('order_id'));
			$orderDetails = json_decode(json_encode($orderDetails));
			//echo "<pre>"; print_r($orderDetails); die;
			$nameArr = explode(' ',$orderDetails->name);
			//$getCountryCode = Order::getCountryCode($orderDetails->country);
			?>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="amitphpprogrammer@gmail.com">
				<input type="hidden" name="item_name" value="{{ Session::get('order_id') }}">
				<input type="hidden" name="currency_code" value="INR">
				<input type="hidden" name="amount" value="{{ Session::get('grand_total') }}">
				<input type="hidden" name="first_name" value="{{ $nameArr[0] }}">
				<input type="hidden" name="last_name" value="{{ $nameArr[1] }}">
				<input type="hidden" name="address1" value="{{ $orderDetails->address }}">
				<input type="hidden" name="address2" value="">
				<input type="hidden" name="city" value="{{ $orderDetails->city }}">
				<input type="hidden" name="state" value="{{ $orderDetails->state }}">
				<input type="hidden" name="zip" value="{{ $orderDetails->pincode }}">
				<input type="hidden" name="email" value="{{ $orderDetails->user_email }}">

				<input type="hidden" name="return" value="{{ url('paypal/thanks') }}">
				<input type="hidden" name="cancel_return" value="{{ url('paypal/cancel') }}">
				<input type="image"
				    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_107x26.png" alt="Pay Now">
				  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif"
				    width="1" height="1">
			</form>
		</div>
	</div>
</section>


<?php
Session::forget('grand_total');
Session::forget('order_id');
?>



    <script src="{{ asset('eshoper/js/jquery.js') }}"></script>
    <script src="{{ asset('eshoper/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('eshoper/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('eshoper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshoper/js/main.js') }}"></script>
</body>
</html>
@endsection