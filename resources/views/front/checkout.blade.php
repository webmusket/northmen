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


<section id="form" style="margin-top:20px;"><!--form-->
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Check Out</li>
            </ol>
        </div>
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif
        <form action="{{ url('/checkout') }}" method="post">{{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Bill To</h2>
                            <div class="form-group">
                                <input name="billing_name" id="billing_name" @if(!empty($userDetails->name)) value="{{ $userDetails->name }}" @endif type="text" placeholder="Billing Name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="billing_address" id="billing_address" @if(!empty($userDetails->address)) value="{{ $userDetails->address }}" @endif type="text" placeholder="Billing Address" class="form-control" />
                            </div>
                            <div class="form-group">    
                                <input name="billing_city" id="billing_city" @if(!empty($userDetails->city)) value="{{ $userDetails->city }}" @endif type="text" placeholder="Billing City" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="billing_state" id="billing_state" @if(!empty($userDetails->state)) value="{{ $userDetails->state }}" @endif type="text" placeholder="Billing State" class="form-control" />
                            </div>
                            <div class="form-group">
                                <select id="billing_country" name="billing_country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->country_name }}" @if(!empty($userDetails->country) && $country->country_name == $userDetails->country) selected @endif>{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="billing_pincode" id="billing_pincode" @if(!empty($userDetails->name)) value="{{ $userDetails->pincode }}" @endif type="text" placeholder="Billing Pincode" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="billing_mobile" id="billing_mobile" @if(!empty($userDetails->mobile)) value="{{ $userDetails->mobile }}" @endif type="text" placeholder="Billing Mobile" class="form-control" />
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="copyAddress">
                                <label class="form-check-label" for="copyAddress">Shipping Address same as Billing Address</label>
                            </div>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2></h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Ship To</h2>
                            <div class="form-group">
                                <input name="shipping_name" id="shipping_name" @if(!empty($shippingDetails->name)) value="{{ $shippingDetails->name }}" @endif type="text" placeholder="Shipping Name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="shipping_address" id="shipping_address" @if(!empty($shippingDetails->address)) value="{{ $shippingDetails->address }}" @endif type="text" placeholder="Shipping Address" class="form-control" />
                            </div>
                            <div class="form-group">    
                                <input name="shipping_city" id="shipping_city" @if(!empty($shippingDetails->city)) value="{{ $shippingDetails->city }}" @endif type="text" placeholder="Shipping City" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="shipping_state" id="shipping_state" @if(!empty($shippingDetails->state)) value="{{ $shippingDetails->state }}" @endif type="text" placeholder="Shipping State" class="form-control" />
                            </div>
                            <div class="form-group">
                                <select id="shipping_country" name="shipping_country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->country_name }}" @if(!empty($shippingDetails->country) && $country->country_name == $shippingDetails->country) selected @endif>{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="shipping_pincode" id="shipping_pincode" @if(!empty($shippingDetails->pincode)) value="{{ $shippingDetails->pincode }}" @endif type="text" placeholder="Shipping Pincode" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input name="shipping_mobile" id="shipping_mobile" @if(!empty($shippingDetails->mobile)) value="{{ $shippingDetails->mobile }}" @endif type="text" placeholder="Shipping Mobile" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">Check Out</button>
                    </div><!--/sign up form-->
                </div>
            </div>
        </form>
    </div>
</section><!--/form-->




    <script src="{{ asset('eshoper/js/jquery.js') }}"></script>
    <script src="{{ asset('eshoper/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('eshoper/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('eshoper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshoper/js/main.js') }}"></script>
</body>
</html>

@endsection