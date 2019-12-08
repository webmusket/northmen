@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Refferal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-lg-6">
            <br>
                  <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" value="{{$user->email}}" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" value="{{$user->password}}" id="inputPassword4" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" value="{{$user->address}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" value="{{$user->city}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">City</label>
                          <input type="text" class="form-control" value="{{$user->city}}" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">State</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                      </div>
                      
                      
                    </form>
        </div>
        <div class="col-lg-6">
            
        </div>
    </div>  

      
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
        
        <div class="col-lg-6">
           
            <br>
            @if(Auth::user()->affiliate_id)
                <div class="form-group">
                    <label for="inputAddress">Your Affiliate Link</label>
                    <input type="text" class="form-control" value="{{url('/register').'/?ref='.Auth::user()->affiliate_id}}">
                 </div>
                
            @endif
            
            
        </div>
        
        
        <div class="col-lg-6">
            <?php


if(Auth::user()->affiliate_id){

echo " <div>
     <h4>share your affiliate link with others</h4>
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
        </div>
        <div class="col-lg-6">
            
<?php

echo "<h4>Reffered By</h4>";
use App\User;

$user_referal = Auth::user()->referred_by;

echo $user_referal;
if($user_referal != null){
    $referer_info = User::where('affiliate_id',$user_referal)->get();

    foreach($referer_info as $refer){
        echo "<h2>$refer->name<h2>";
        echo "<h2>$refer->email<h2>";
    }
}





?>


        </div>
        
        
    </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

@endsection