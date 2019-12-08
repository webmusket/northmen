@extends('layouts.master')
@section('content')

<div class="product-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="product-promo">
                    <h2>
                        {{$category->name}}
                    </h2>
                  <p>Our Premium collection includes suits of the highest quality fabrics; the best of the best. </p>
                </div>
                
            </div>
        </div>
    </div>
</div>



<div id="app">
   <products categories="{{$categories}}" url="{{$url}}"></products>
</div>



<script src="{{ asset('js/app.js') }} "></script>
@endsection