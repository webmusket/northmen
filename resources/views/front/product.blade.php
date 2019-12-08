@extends('layouts.master')
@section('content')

<div class="single-product-container">
    <div class="section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ct-preview-box clearfix">
                        <div class="ct-multi-img">
                            <div class="side-preview">
                                <img src="{{ asset('assets/img/customization/front-img.jpg') }}" alt="multiple img">
                                <span>Front Preview</span>
                            </div>
                            <div class="side-preview"><img src="{{ asset('assets/img/customization/back-img.jpg') }}" alt="multiple img">
                                <span>Back Preview</span>
                            </div>
                            <div class="side-preview"><img src="{{ asset('assets/img/customization/back-img.jpg') }}" alt="multiple img">
                                <span>Fabrics</span>
                            </div>
                        </div>
                        <div class="single-preview-img">
                           <a href="./assets/img/customization/Notrchman-Live-Model_for-tony.png') }}" class="mobileLightBox">
  <img src="{{ asset('assets/img/customization/Notrchman-Live-Model_for-tony.png') }}" alt="multiple img">
  </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 single-product-padding">
                    <div class="product-title">
                        <h1>WARM GRAY CHECK SUIT</h1>
                    </div>
                    
                    <div class="singlepricebox">
                        <div class="row">
                        <div class="col-lg-2"><strong>$600</strong></div>
                        <div class="col-lg-5"><span data-toggle="tooltip" data-placement="top" title="This dark, earthy brown suit is here to prove that "> <i class="fa fa-truck"></i> Delivered within 3 weeks</span></div>
                        <div class="col-lg-5"><span data-toggle="tooltip" data-placement="top" title="This dark, earthy brown suit is here to prove that"> <i class="fa fa-truck"></i> Free Shipping</span></div>
                    </div>
                    </div>
                    
                    <div class="product-button">
                        
                        <a href="/customization" class="nslightbtn">Customize Now</a>
                        <p>“Customize your own suit with our design editor. <br> Get the perfect style!” </p>

                        
                        <a href="customizationme.php" class="nsdrakbtn">Order as is</a>
                        <p>“Order the way it looks. <br> It is pre-customized with your style”.</p>
                    </div>
                    <br>

                    <div class="product-short-dec">
                        <p>This dark, earthy brown suit is here to prove that a brown suit has a well-earned place in your wardrobe. Perfect for the dog days of summer, this suit is created with a mohair and wool blended fabric that allows this suit to be lightweight, breathable, more resistant to wrinkles, lustrous and slightly sheen all while having excellent drape. Too good to be true? Try this one on at the office, a wedding or any other professional setting and see for yourself.</p> <br>
                        <ul>
                            <li>
                                Fabric: 52% Wool / 48% Mohair by E.Thomas
                            </li>
                            <li>
                                Color: Brown
                            </li>
                            <li>
                                Pattern: Solid
                            </li>
                            <li>
                                Seasonality: Spring/Summer
                            </li>
                            <li>
                                Buttons: Dark Br
                            </li>
                        </ul>
                    </div>
                    <div class="single-product-share">
                        <h4>Share This on: </h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
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

                                        <p>This dark, earthy brown suit is here to prove that a brown suit has a well-earned place in your wardrobe. Perfect for the dog days of summer, this suit is created with a mohair and wool blended fabric that allows this suit to be lightweight, breathable, more resistant to wrinkles, lustrous and slightly sheen all while having excellent drape. Too good to be true? Try this one on at the office, a wedding or any other professional setting and see for yourself.</p>

                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p><strong>i) Free Delivery</strong> <br>
                                            Northsmen offers free shipping for orders that are above $139. For any order under that threshold, there is a $10 shipping charge.</p>
                                        <p><strong>ii) Worldwide Shipping</strong> <br>
                                            We ship our products all over the globe with the help of DHL, UPS or FedEx. They offer top of the line services and you can track the progress of your delivery.</p>
                                        <p><strong>iii) Delivery Time</strong></p>
                                        <p>iv) It generally takes about 3 weeks to get your order ready and have it at your doorstep, if the circumstances are standard. In case, the delivery date is on the weekend, you’ll receive the order on the next workday.</p>
                                        <p><strong>v) Customs and Other Taxes</strong></p>
                                        <p>vi) Sales taxes and VAT depend on the country and states you live in. In most cases, there is no sales tax. For more information, please see our shipping and delivery link.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





@endsection