<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlueKnot</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
<!--    <link href="assets/css/perfect-scrollbar.css" rel="stylesheet">-->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>

<body onload="check() ">

<div class="customization-section">
    <div class="progressbar-reports">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <div class="progress-reports-bar">
                        <ul>
                            <li class="progressType1 active" data="0">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="PICK STITCHING">
                                    <span class="bar1 bar-check active"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Jacket Type</span>
                                </a>
                            </li>
                            <li class="progressType2 " data="1">
                                <a href="#"><span class="bar2 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Lapels</span></a>
                            </li>
                            <li class="progressType2 " data="3">
                                <a href="#"><span class="bar3 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Fittings</span></a>
                            </li>
                            <li class="progressType3 " data="4">
                                <a href="#"><span class="bar4 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Breast Pockets</span></a>
                            </li>
                            <li class="progressType4 " data="5">
                                <a href="#"><span class="bar5 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Pockets</span></a>
                            </li>
                            <li class="progressType5 " data="6">
                                <a href="#"><span class="bar6 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Sleeve Buttons</span></a>
                            </li>                           
                            <li class="progressType6 " data="7">
                                <a href="#"><span class="bar7 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Vents</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">



    <div class="customization-section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="title-content">
                        <h1>Blue Double breasted checked 100% Wool Suit</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="price-details">
                        <p class="pricetag"><span>Total Cost:</span> $650</p>
                        <a href="#" class="btnlink">Change Style</a>
                    </div>

                    <!-- current selected design details -->

<!--                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Your Current Customization
                    </button> -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Your Customization</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Proceed to Checkout</button>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 offset-lg-1">

                    <div class="customization-slide owl-carousel owlCarousel" id="myCarousel"> 


                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Type</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box Jstyles"  v-for="variant in stylevariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jstyles"  @click="updateProduct2(variant.variantId) " >

                                            <input type="radio" name="styles" :id="variant.variantImage" class="Svariant"  >

                                            <div class="box1">

                                            <div class="single-item-img">
                                                <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ variant.variantType }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>

                                            </div>
                                        </div>
                                </label>

                            </div>
                        </div>


                        <!-- end customization content div-->

                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Lapels</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                            <label  class="single-item-box Jlapels"  v-for="variant in lapelvariants"
                                                                                            :key="variant.variantId">



                                    <div class="box" id="jlapels" @click="updateProduct2(variant.variantImage) " >

                                        <input type="radio" name="lapels" :id="variant.variantId" class="Lvariant"  >

                                        <div class="box1">   

                                        <div class="single-item-img">
                                            <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                        </div>
                                        <div class="single-content">
                                            <p class="op-title">{{ variant.variantType }}</p>
                                            <p class="op-text">The choice for formal-wear.</p>
                                        </div>

                                        </div>

                                    </div>
                            </label>

                            </div>
                        </div>


                        <!-- end customization content div-->                        

                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Fittings</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                            <label  class="single-item-box Jfittings"  v-for="variant in fittingvariants"
                                                                                            :key="variant.variantId">


                                    <div class="box" id="jfittings" @click="updateProduct2(variant.variantImage) " >
                                        <input type="radio" name="fittings" :id="variant.variantId" class="Fvariant">

                                        <div class="box1">

                                        <div class="single-item-img">
                                            <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                        </div>
                                        <div class="single-content">
                                            <p class="op-title">{{ variant.variantType }}</p>
                                            <p class="op-text">The choice for formal-wear.</p>
                                        </div>

                                        </div>

                                    </div>
                            </label>

                            </div>
                        </div>


                        <!-- end customization content div-->

                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jacket Breast Pockets</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                            <label  class="single-item-box Jbpockets"  v-for="variant in breastpocketvariants"
                                                                                            :key="variant.variantId">

                                    <div class="box" id="jbpockets" @click="updateProduct2(variant.variantImage) " >
                                        <input type="radio" name="breastpockets" :id="variant.variantId">

                                        <div class="box1">

                                        <div class="single-item-img">
                                            <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                        </div>
                                        <div class="single-content">
                                            <p class="op-title">{{ variant.variantType }}</p>
                                            <p class="op-text">The choice for formal-wear.</p>
                                        </div>

                                        </div>
                                    </div>
                            </label>

                            </div>
                        </div>


                        <!-- end customization content div-->

                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Pockets</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                            <label  class="single-item-box Jpockets"  v-for="variant in pocketvariants"
                                                                                            :key="variant.variantId">

                                    <div class="box" id="jpockets" @click="updateProduct2(variant.variantImage) " >
                                        <input type="radio" name="pockets" :id="variant.variantId">

                                        <div class="box1">

                                        <div class="single-item-img">
                                            <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                        </div>
                                        <div class="single-content">
                                            <p class="op-title">{{ variant.variantType }}</p>
                                            <p class="op-text">The choice for formal-wear.</p>
                                        </div>

                                        </div>

                                    </div>
                            </label>

                            </div>
                        </div>


                        <!-- end customization content div-->



                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Sleeve Buttons</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box Jbsbuttons"  v-for="variant in sleevebuttonvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jbsbuttons"  @click="updateProductB(variant.variantImage) " >

                                            <input type="radio" name="sleevebuttons" :id="variant.variantId">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ variant.variantType }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>

                                            </div>
                                        </div>
                                </label>

                            </div>
                        </div>


                        <div  class="customization-content">
                            <div class="ctitle"><strong>Jakect Vents</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box Jbvents"  v-for="variant in ventvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jbvents"  @click="updateProductV(variant.variantImage) " >

                                            <input type="radio" name="vents" :id="variant.variantId">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                <img src="./assets/img/line-arts/04.jpg" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ variant.variantType }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>

                                            </div>
                                        </div>
                                </label>

                            </div>
                        </div>


                    </div>




                <!-- carousel end -->




                <!-- PROGRESS BAR (experimental) -->

<!--                     <div class="row">
                        
                        <div class="progress" style="width: 100%">
                             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 14.28%;">
                             </div>
                        </div>

                    </div> -->



                </div>
                <div class="col-lg-5">
                    <div class="ct-preview-box clearfix">
                        <div class="single-preview-img">


                            <!-- preview image parts -->


                            
                            <div  id="frontImg" class="activeC frontCarousel cDisplay">
                                <div class="modelFront">
                                    <img class="modelHead modelImg"src="imge/front/carlos.png">
                                    <img class="modelImg" src="imge/front/shirt_to_jacket_open.png">
                                    <img class="modelPant modelImg" src="imge/front/length_longcut_slim.png">
                                    <img class="modelShoe modelImg" src="imge/front/zapatos.png">

                                </div>
                                <div class="styles">
                                    <img class="modelImg" v-bind:src="styles">
                                    <img class="modelImg" style="display: none;" :src= "stylesx">
                                </div>  

                                <div class="fittings">
                                    <img class="modelImg" :src="fittings">
                                </div>

                                <div class="lapels">
                                    <img class="modelImg" class="modelImg" :src="lapels">
                                </div>

                                <div class="bottom">
                                    <img class="modelImg" :src="bottom">
                                </div>      
                                
                                <div class="sleeves">
                                    <img class="modelImg" :src="sleeves">
                                </div>  

                                <div class="breastpocket">
                                    <img class="modelImg" :src="breastpockets">
                                </div>  

                                <div class="pocket">
                                    <img class="modelImg" :src="pockets">
                                    <img class="modelImg" :src="pocketsx">
                                </div>  
                            </div>




                            <div class="backCarousel cDisplay" id="backImg">

                                <div class="modelBack">
                                    <img class="modelBImg modelHead" src="imge/back/model/carlos.png">
                                    <img class="modelBImg " src="imge/back/model/shirt_to_jacket.png">
                                    <img class="modelBImg modelShoe" src="imge/back/model/zapatos.png">
                                    <img class="modelBImg modelPant" src="imge/back/model/length_long+cut_slim.png">
                                </div>

                                <div class="bstyles">
                                    <img class="modelBImg" :src="bstyles">
                                </div>

                                <div class="bfittings">
                                    <img class="modelBImg" :src="bfittings">
                                </div>

                                <div class="bbottom">
                                    <img class="modelBImg" :src="bbottom">
                                </div>

                                <div class="bsleeves">
                                    <img class="modelBImg" :src="bsleeves">
                                    <img class="modelBImg" :src="bsbuttons">
                                </div>  



                            </div>





                        </div>
                        <div class="ct-multi-img">
                            <div class="side-preview offC">
                                <img src="./assets/img/customization/front-img.jpg" alt="multiple img">
                                <span>Front Preview</span>
                            </div>
                            <div class="side-preview"><img src="./assets/img/customization/back-img.jpg" alt="multiple img">
                                <span>Side Preview</span>
                            </div>
                            <div class="side-preview onC"><img src="./assets/img/customization/back-img.jpg" alt="multiple img">
                                <span>Back Preview</span>
                            </div>
                            <div class="side-preview" data-toggle="modal" data-target="#exampleModal"><img src="./assets/img/Fabric.jpg" alt="multiple img">
                                <span>Fabric details</span>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                                


                                            <div class="container">
                                              <h2>Striped Rows</h2>
                                              <p>The .table-striped class adds zebra-stripes to a table:</p>            
                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>July</td>
                                                    <td>Dooley</td>
                                                    <td>july@example.com</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
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

</div>

</div>

<!--start Footer area -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4>Customize</h4>
                            <ul>
                                <li><a href="#">Suits</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Vests</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Tuxedos</a></li>
                                <li><a href="#">Collections</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Blueknot</a></li>
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#">Why Custom</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Measurement</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Current Promotion</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h4>Help Center</h4>
                            <ul>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#">Shipping/ Delivery</a></li>
                                <li><a href="#">Altertions/ Returns</a></li>
                                <li><a href="#">Gift Card</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="#">Payment Inquiry</a></li>
                                <li><a href="#">Tailor's Kit</a></li>
                                <li><a href="#">Fabric Samples</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>Join our mail list to receive $25 off your fist suits</h4>
                    <div class="email-subscription-form">
                        <form action="index.html">
                            <input type="email" placeholder="Email Address">
                            <input type="submit" value="Sign Up">
                        </form>
                    </div>
                    
                    <h4>Follow us</h4>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i> Linkdin</a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Designed by MakeHub, Developed by MakeHub 2019
                </div>
            </div>
        </div>
    </div>
    <!--end Footer area -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>



    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>

    <script src="assets/js/jquery.sticky.js"></script>

    <script src="js/script.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>



     <!--    <script src="assets/js/perfect-scrollbar.min.js"></script>-->


</body>

</html>