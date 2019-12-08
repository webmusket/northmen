<!--

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Account</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<a class="btn btn-primary" href="{{ url('/') }}">Continue Shopping</a>                    

                </div>
                
                <div>
                    
                </div>
                <div class="card-body">
                    <p> Id: {{$user->id}}</p>
                    <p> name: {{$user->name}}</p>
                    <p> email: {{$user->email}}</p>
                    <p> address: {{$user->address}}</p>
                    <p> city: {{$user->city}}</p>
                    <p> state: {{$user->state}}</p>
                    <p> country: {{$user->country}}</p>
                    <p> pincode: {{$user->pincode}}</p>
                    <p> mobile: {{$user->mobile}}</p>
                </div>
<!---
                <div class="card-body">

                    @if($user->refferal_url==null)
                        <a href="{{ url('/activate') }}">Activate</a>
                    @endif
                </div>

                <div class="card-body">
                    @if($user->refferal_url!=null)
                        <p>Your Refferal Link: <?php echo url(''); ?>/<?php echo $user->refferal_url; ?></p>
                    @endif
                </div>
--->
                @if(!Auth::user()->affiliate_id)
                    <input type="text" readonly="readonly" 
                           value="{{url('/register').'/?ref='.Auth::user()->affiliate_id}}">
                @endif

<?php


if(!Auth::user()->affiliate_id){

echo " <div>
     <h3>share your affiliate link with others</h3>
 </div>";
$url = url('/register').'/?ref='.Auth::user()->affiliate_id;

$share = Share::page($url)
	->facebook()
	->twitter()
	->googlePlus()
	->linkedin('Extra linkedin summary can be passed here')
	->whatsapp();


echo $share;

}
?>

{{$user}}
<?php

$referred_by = Cookie::get('referral');


?>


                
            </div>
        </div>
    </div>
</div>
@endsection

--->