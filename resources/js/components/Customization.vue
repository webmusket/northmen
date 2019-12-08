<template>
	<div>



    <div class="customization-section" >

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

                    <button type="button" class="btn btn-primary customModal" data-toggle="modal" data-target="#Mymodal" @click="modalFunction()">
                      Your Current Customization
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="Mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Your Customization</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                  <h2>Your Customization</h2>        
                                      <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Type</th>
                                            <th>Selection</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Jacket Type</td>
                                            <td>{{ stylePicked }}</td>
                                          </tr>
                                          <tr>
                                            <td>Lapel</td>
                                            <td>{{ lapelPicked }}</td>
                                          </tr>
                                          <tr>
                                            <td>Fittings</td>
                                            <td>{{ fittingPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Breastpocket</td>
                                            <td>{{ bpocketPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Pocket</td>
                                            <td>{{ pocketPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Sleeve Button</td>
                                            <td>{{ bsbuttonPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Vent</td>
                                            <td>{{ ventPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Pant Fit</td>
                                            <td>{{ fitPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Pleats</td>
                                            <td>{{ pleatPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Fastening</td>
                                            <td>{{ fasteningPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Side Pockets</td>
                                            <td>{{ sidepocketPicked }}</td>
                                          </tr>                                         
                                        <tr>
                                            <td>Back Pockets</td>
                                            <td>{{ backpocketPicked }}</td>
                                          </tr>                                          
                                          <tr>
                                            <td>Cuffs</td>
                                            <td>{{ cuffPicked }}</td>
                                          </tr>
                                        </tbody>
                                  </table>
                            </div>

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
                                <label class="single-item-box"  v-for="variant in stylevariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jstyles"  @click="updateProduct(variant.variantId) " >

                                            <input type="radio" name="styles" :id="variant.variantId" class="Svariant" :value="variant.variantType" >

                                            <div class="box1">

                                            <div class="single-item-img">
                                                <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <label  class="single-item-box"  v-for="variant in lapelvariants"
                                                                                            :key="variant.variantId">



                                    <div class="box" id="jlapels" @click="updateProduct(variant.variantImage) " >

                                        <input type="radio" name="lapels" :id="variant.variantId" class="Lvariant" :value="variant.variantType" >

                                        <div class="box1">   

                                        <div class="single-item-img">
                                            <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <label  class="single-item-box"  v-for="variant in fittingvariants"
                                                                                            :key="variant.variantId" >


                                    <div class="box" id="jfittings" @click="updateProduct(variant.variantImage) " >
                                        <input type="radio" name="fittings" :id="variant.variantId" :value = "variant.variantType">

                                        <div class="box1">

                                        <div class="single-item-img">
                                             <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <label  class="single-item-box"  v-for="variant in breastpocketvariants"
                                                                                            :key="variant.variantId">

                                    <div class="box" id="jbpockets" @click="updateProduct(variant.variantImage) " >
                                        <input type="radio" name="breastpockets" :id="variant.variantId" :value = "variant.variantType">

                                        <div class="box1">

                                        <div class="single-item-img">
                                             <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <label  class="single-item-box"  v-for="variant in pocketvariants"
                                                                                            :key="variant.variantId">

                                    <div class="box" id="jpockets" @click="updateProduct(variant.variantImage) " >
                                        <input type="radio" name="pockets" :id="variant.variantId" :value = "variant.variantType">

                                        <div class="box1">

                                        <div class="single-item-img">
                                             <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                                <label class="single-item-box"  v-for="variant in sleevebuttonvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jbsbuttons"  @click="updateProductB(variant.variantImage) " >

                                            <input type="radio" name="sleevebuttons" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                                <label class="single-item-box"  v-for="variant in ventvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="jbvents"  @click="updateProductV(variant.variantImage) " >

                                            <input type="radio" name="vents" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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



                        <!-- PANTS STARTS HERE -->



                        
                        <div  class="customization-content">
                            <div class="ctitle"><strong>Pant Fit</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in pantfitvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="pantfit"  @click="updateProductpantfit(variant.variantImage)">

                                            <input type="radio" name="pantfit" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <div class="ctitle"><strong>Pleats</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in pleatvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="pantpleats"  @click="updateProductpleat(variant.variantImage) " >

                                            <input type="radio" name="pantpleats" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <div class="ctitle"><strong>Pant Fastening</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in fasteningvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="pantfastening"  @click="updateProductfastening(variant.variantImage) " >

                                            <input type="radio" name="pantfastening" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <div class="ctitle"><strong>Side Pockets</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in sidepocketvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="pspocket"  @click="updateProductsidepocket(variant.variantImage) " >

                                            <input type="radio" name="pspocket" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <div class="ctitle"><strong>Back Pockets</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in backpocketvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="pbpocket"  @click="updateProductbackpocket(variant.variantImage) " >

                                            <input type="radio" name="pbpocket" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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
                            <div class="ctitle"><strong>Cuffs</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box"  v-for="variant in cuffvariants"
                                                                                                :key="variant.variantId">


                                        <div class="box" id="cuffs"  @click="updateProductcuff(variant.variantImage) " >

                                            <input type="radio" name="cuffs" :id="variant.variantId" :value = "variant.variantType">

                                            <div class="box1">

                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
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



                        <!-- PANTS END  -->



                        <div  class="customization-content">
                            <div class="ctitle"><strong>Your Selection</strong></div>
                            <hr>
                            <div class="customization-box clearfix" >
                                <label class="single-item-box" >
                                    <div class="box" id="styleFinal"  data="0">
                                        <input type="radio" name="updateF" id="styleF" class="updateF" :value = "stylePicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ stylePicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label> 

                                <label class="single-item-box"  data="1">
                                    <div class="box" id="lapelFinal"  >
                                        <input type="radio" name="updateF" id="lapelF" class="updateF"  :value = "lapelPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ lapelPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>        

                                <label class="single-item-box" data="2">
                                    <div class="box" id="fittingFinal"  >
                                        <input type="radio" name="updateF" id="fittingF" class="updateF"  :value = "fittingPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ fittingPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>          

                                <label class="single-item-box" data="3">
                                    <div class="box" id="bpocketFinal"  >
                                        <input type="radio" name="updateF" id="bpocketF" class="updateF"  :value = "bpocketPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ bpocketPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                       

                                <label class="single-item-box" data="4">
                                    <div class="box" id="pocketFinal"  >
                                        <input type="radio" name="updateF" id="pocketF" class="updateF"  :value = "pocketPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ pocketPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                     

                                <label class="single-item-box" data="5">
                                    <div class="box" id="buttonFinal"  >
                                        <input type="radio" name="updateF" id="buttonF" class="updateF"   :value = "bsbuttonPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ bsbuttonPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                       

                                <label class="single-item-box" data="6">
                                    <div class="box" id="ventFinal"  >
                                        <input type="radio" name="updateF" id="ventF" class="updateF"   :value = "ventPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ ventPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="7">
                                    <div class="box" id="fitFinal"  >
                                        <input type="radio" name="updateF" id="pantfitF" class="updateF"   :value = "fitPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ fitPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="8">
                                    <div class="box" id="pleatFinal"  >
                                        <input type="radio" name="updateF" id="pleatF" class="updateF"   :value = "pleatPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ pleatPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="9">
                                    <div class="box" id="fasteningFinal"  >
                                        <input type="radio" name="updateF" id="fasteningF" class="updateF"   :value = "fasteningPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ fasteningPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="10">
                                    <div class="box" id="sidepocketFinal"  >
                                        <input type="radio" name="updateF" id="sidepocketF" class="updateF"   :value = "sidepocketPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ sidepocketPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="11">
                                    <div class="box" id="backpocketFinal"  >
                                        <input type="radio" name="updateF" id="backpocketF" class="updateF"   :value = "backpocketPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ backpocketPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                   

                                <label class="single-item-box" data="12">
                                    <div class="box" id="cuffFinal"  >
                                        <input type="radio" name="updateF" id="cuffF" class="updateF"   :value = "cuffPicked">
                                        <div class="box1">
                                            <div class="single-item-img">
                                                 <img :src="'assets/imgs/line-arts/04.jpg'" alt="One Button">
                                            </div>
                                            <div class="single-content">
                                                <p class="op-title">{{ cuffPicked }}</p>
                                                <p class="op-text">The choice for formal-wear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>                                
                            </div>
                        </div>
                    </div>




                <!-- carousel end -->

                    <button class="owlPrev owlBtn  btn btn-primary" id="owlPrev">Prev</button>
                    <button class="owlNext owlBtn btn btn-primary" id="owlNext">Next</button>
                    <button type="submit " class="owlSubmit owlBtn btn btn-primary" id="owlSubmit"> Finalize Your Customization</button>
                    <button class="updateC owlBtn btn btn-primary " id="updateC">Update</button>
                    <button class="updateT owlBtn btn btn-primary " id="updateT">Next</button>


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
                                <div class="modelFront frontC">
                                    <img class="modelHead modelImg" :src="'imge/front/carlos.png'">
                                    <img class="modelImg" :src="'imge/new_man/shirt/front/shirt_to_pants_open.png'">
                                    <img class="modelPant modelImg" :src="pantfit">
                                    <img class="modelShoe modelImg" :src="'imge/front/zapatos.png'">

                                </div>
                                <div class="styles frontS frontC">
                                    <img class="modelImg" :src="styles">
                                    <img class="modelImg" style="display: none;" :src= "stylesx">
                                </div>  

                                <div class="fittings frontS frontC">
                                    <img class="modelImg" :src="fittings">
                                </div>

                                <div class="lapels frontS frontC">
                                    <img class="modelImg" :src="lapels">
                                </div>

  
                                
                                <div class="sleeves frontS frontC">
                                    <img class="modelImg" :src="sleeves">
                                </div>  

                                <div class="breastpocket frontS frontC">
                                    <img class="modelImg" :src="breastpockets">
                                </div>  

                                <div class="pocket frontS frontC">
                                    <img class="modelImg" :src="pockets">
                                    <img class="modelImg" :src="pocketsx">
                                </div>  

                                <div class="fasteningPant frontX frontC" style="display: none;">
                                    <img class="modelPant modelImg" :src="fastening">
                                </div>                                

                                <div class="pleatPant frontC">
                                    <img class="modelPant modelImg" :src="pleat">
                                </div>                                

                                <div class="sidepocketPant frontC">
                                    <img class="modelPant modelImg" :src="sidepocket">
                                </div>

                                <div class="bottom frontS frontC">
                                    <img class="modelImg" :src="bottom">
                                </div>          

                                <div class="cuffPant frontC">
                                    <img class="modelPant modelImg" :src="cufffront">
                                </div>
                            </div>                            


                            <div class="backCarousel cDisplay" id="backImg">

                                <div class="modelBack frontC">
                                    <img class="modelBImg modelHead" :src="'imge/back/model/carlos.png'">
                                    <img class="modelBImg " :src="'imge/back/model/shirt_to_jacket.png'">
                                    <img class="modelBImg modelShoe" :src="'imge/back/model/zapatos.png'">
                                    <img class="modelBImg modelPant" :src="'imge/back/model/length_long_cut_slim.png'">

                                </div>

                                <div class="bstyles frontS frontC">
                                    <img class="modelBImg" :src="bstyles">
                                </div>

                                <div class="bfittings frontS frontC">
                                    <img class="modelBImg" :src="bfittings">
                                </div>

                                <div class="bsleeves frontS frontC">
                                    <img class="modelBImg" :src="bsleeves">
                                    <img class="modelBImg" :src="bsbuttons">
                                </div>  

                                <div class="backpocketPant frontC">
                                    <img class="modelPant modelImg" :src="backpocket">
                                </div>    

                                <div class="bbottom frontS frontC">
                                    <img class="modelBImg" :src="bbottom">
                                </div>
                                
                                <div class="cuffPant frontC">
                                    <img class="modelPant modelBImg" :src="cuff">
                                </div>
                            </div>

                        </div>


                        <div class="ct-multi-img">
                            <div class="side-preview offC">
                                <!-- <img :src="'assets/imgs/customization/front-img.jpg'" alt="multiple img">-->
                                <span>Front Preview</span>
                            </div>
                            <div class="side-preview"><!-- <img :src="'assets/imgs/customization/back-img.jpg'" alt="multiple img">-->
                                <span>Side Preview</span>
                            </div>
                            <div class="side-preview onC"><!-- <img :src="'assets/imgs/customization/back-img.jpg'" alt="multiple img">-->
                                <span>Back Preview</span>
                            </div>
                            <div class="side-preview" data-toggle="modal" data-target="#exampleModal"><!-- <img :src="'assets/imgs/Fabric.jpg'" alt="multiple img">-->
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
<!--  -->


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
</template>


<script>


var action = false, clicked = false;
var Owl = {

init: function() {
  Owl.carousel();
},

carousel: function() {
  var owl;
  var el = document.getElementsByClassName('owl-item');
  var elBtn = document.getElementsByClassName('owlPrev');
  $(document).ready(function() {
    
    owl = $('.owlCarousel').owlCarousel({
      items    : 1,
      center     : true, 
      nav        : false,
      dots       : true,
      margin     : 10,
      mouseDrag  : false,
      touchDrag  : false,
      dotsContainer: '.test',
      navText: ['prev','next'],
    });

      $('.owlNext').on('click',function(){
        owl.trigger('next.owl.carousel',500);
          
      });        

      $('.owlPrev').on('click',function(){
        owl.trigger('prev.owl.carousel',500);
      });        


     $('.progress-reports-bar').on('click', 'li', function(e) {
        owl.trigger('to.owl.carousel', [$(this).index(), 300]);
      });

               //my preview customize

       function hasClass(elem, className) {
          return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
        }




          $('.owlNext , .progress-reports-bar , .owlPrev' ).click(function() {


            // app.modalFunction();
          if (hasClass(el[0], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');

          }      

          else if (hasClass(el[1], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');            
          }    

          else if (hasClass(el[2], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');

          }   

           else if (hasClass(el[3], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');
          }   


          else if (hasClass(el[4], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel  , .frontS ").show().addClass('activeC');
          }    

          else if (hasClass(el[5], 'active')) {
            $('.frontCarousel , .frontX').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          } 

          else if (hasClass(el[6], 'active')) {
            $('.frontCarousel , .frontX').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }            

          else if (hasClass(el[7], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }     

          else if (hasClass(el[8], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }           

          else if (hasClass(el[9], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }           

          else if (hasClass(el[10], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');


          }           
        
          else if (hasClass(el[11], 'active')) {
            $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }           

          else if (hasClass(el[12], 'active')) {
            $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }             

          else if (hasClass(el[13], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');
            $('#owlNext').hide(); 
            $('#owlSubmit').show(); 
            $('.owlPrev').click(function() {
              $('.owlNext').show();
           });

          };
        });

            $('.updateF').click(function(){
              $('#owlSubmit').hide()
              $('.owlNext').hide()
              $('.updateT').hide()
              $('.owlPrev').hide();
              $('#updateC').show();

              if (document.getElementById("styleF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 0);
              };

              if (document.getElementById("lapelF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 1);
              };

              if (document.getElementById("fittingF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 2);
              };              

              if (document.getElementById("bpocketF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 3);
              };              

              if (document.getElementById("pocketF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 4);
              };              

              if (document.getElementById("buttonF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 5);
                $('.frontCarousel').hide().removeClass('activeC');
                $(".backCarousel").show().addClass('activeC');
              };              

              if (document.getElementById("ventF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 6);
                $('.frontCarousel').hide().removeClass('activeC');
                $(".backCarousel").show().addClass('activeC');
              };

              if (document.getElementById("pantfitF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 7);
                $('.backCarousel , .frontS').hide().removeClass('activeC');
                $(".frontCarousel  , .frontX").show().addClass('activeC');                
              };                

              if (document.getElementById("pleatF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 8);
                $('.backCarousel , .frontS').hide().removeClass('activeC');
                $(".frontCarousel  , .frontX").show().addClass('activeC'); 
              };                

              if (document.getElementById("fasteningF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 9);
                $('.backCarousel , .frontS').hide().removeClass('activeC');
                $(".frontCarousel  , .frontX").show().addClass('activeC'); 
              };                

              if (document.getElementById("sidepocketF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 10);
                $('.backCarousel , .frontS').hide().removeClass('activeC');
                $(".frontCarousel  , .frontX").show().addClass('activeC'); 
              };                

              if (document.getElementById("backpocketF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 11);
                $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
                $(".backCarousel").show().addClass('activeC');
              };                

              if (document.getElementById("cuffF").checked) {
                $('#myCarousel').trigger('to.owl.carousel', 12);
                $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
                $(".backCarousel").show().addClass('activeC');
              };              

            });




            $('.owlNext , .progress-reports-bar ').click(function(){
              $("#progressbar li").eq($(".owl-stage").children(".active").index()).addClass("active");
              $("#progressbar li").eq($(".owl-stage").children(".active").index()).removeClass("checkC");
              $("#progressbar li").eq($(".owl-stage").children(".active").prev().index()).removeClass("currentCarousel");
            });            

            $('.owlPrev').click(function(){      
              $("#progressbar li").eq($(".owl-stage").children(".active").next().index()).removeClass("active currentCarousel");
              $("#progressbar li").eq($(".owl-stage").children(".active").index()).addClass("active");
              
            });



            // SUBMIT FUNCTION 


          $('.owlSubmit').click(function() {
            // app.modalFunction();
            $('#Mymodal').modal('show');    
        });      

          $('.updateC').click(function() {
            // app.modalFunction();             
            $('.backCarousel').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');
            $('#owlPrev').show();
            $('.owlSubmit').show();
            $('.updateC').hide();
            $(".updateF").prop("checked", false);
            $('#myCarousel').trigger('to.owl.carousel', 13);
        });



            // PROGRESSBAR FUNCTION 


          $('.updateT').click(function(){


                $('#myCarousel').trigger('to.owl.carousel', $("#progressbar li.checkC").index());
                $("#progressbar li").eq($(".owl-stage").children(".active").index()).addClass("active");
                $("#progressbar li").eq($(".owl-stage").children(".active").index()).removeClass("checkC");
/*                $('.backCarousel , .frontX').hide().removeClass('activeC');
                $(".frontCarousel , .frontS").show().addClass('activeC');*/
                   // app.modalFunction();
          if (hasClass(el[0], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');

          }      

          else if (hasClass(el[1], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');            
          }    

          else if (hasClass(el[2], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');

          }   

           else if (hasClass(el[3], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');
          }   


          else if (hasClass(el[4], 'active')) {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel  , .frontS ").show().addClass('activeC');
          }    

          else if (hasClass(el[5], 'active')) {
            $('.frontCarousel , .frontX').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          } 

          else if (hasClass(el[6], 'active')) {
            $('.frontCarousel , .frontX').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }            

          else if (hasClass(el[7], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }     

          else if (hasClass(el[8], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }           

          else if (hasClass(el[9], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');
          }           

          else if (hasClass(el[10], 'active')) {
            $('.backCarousel , .frontS').hide().removeClass('activeC');
            $(".frontCarousel  , .frontX").show().addClass('activeC');


          }           
        
          else if (hasClass(el[11], 'active')) {
            $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }           

          else if (hasClass(el[12], 'active')) {
            $('.frontCarousel , .frontX , .frontS').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          }
          });



          $('.progress-reports-bar').click(function() {
            $('#owlNext').hide();
            $('.updateT').show();
        });            

          $('.updateT').click(function() {
            $('#owlNext').show();
            $('.updateT').hide();
        });



          $('.owlPrev, .progress-reports-bar').click(function() {
            $(".updateF").prop("checked", false);
            $('.updateC').hide();
            $('#owlPrev').show();

            $('#owlSubmit').hide();  
        });


          $('.onC').click(function() {
            $('.frontCarousel').hide().removeClass('activeC');
            $(".backCarousel").show().addClass('activeC');
          });


          $('.offC').click(function() {
            $('.backCarousel , .frontX').hide().removeClass('activeC');
            $(".frontCarousel , .frontS").show().addClass('activeC');
          });

  });
}
};


//owl

$(document).ready(function() {
  Owl.init();
});

//default check




	export default {
		name: 'customization',

		data() {
		    return {
        styles: "imge/front/front/neck_single_breasted_buttons_3_lapel_wide_style_lapel_round.png",
        bstyles: 'imge/back/neck.png',
        fittings: '',
        bfittings: '',
        stylesx:'',
        lapels:'' ,
        sleeves: 'imge/front/front/interior_sleeves.png',
        bsleeves: 'imge/back/sleeves_buttons_0.png',
        bottom: 'imge/front/front/bottom_single_breasted_length_long_hemline_open.png',
        bbottom: 'imge/back/bottom_length_long_back_style_center_vent.png',
        bsbuttons: '',
        pockets: '',
        pocketsx: '',
        breastpockets: '',
        fastening: 'imge/new_man/pants/front/fastening_center_visible_button.png',
        pantfit:  'imge/new_man/pants/front/length_long_cut_regular.png',
        pleat: '',
        sidepocket: '',
        backpocket:'',
        cuff: '',
        cufffront: '',


        stylePicked: '',
        lapelPicked: '',
        fittingPicked: '',
        bpocketPicked: '',
        bsbuttonPicked: '',
        ventPicked: '',
        pocketPicked: '',
        fitPicked: '',
        pleatPicked: '',
        fasteningPicked: '',
        sidepocketPicked: '',
        backpocketPicked: '',
        cuffPicked: '',



        stylevariants: [                        
            {
                variantId: 's1',
                variantType: 'Single Breasted 1 Button',
                variantImage2: 'imge/front/front/neck_single_breasted_buttons_1_lapel_medium_style_lapel_notch.png'
            },          
            {
                variantId: 's2',
                variantType: 'Single Breasted 2 Button',
                variantImage2: 'imge/front/front/neck_single_breasted_buttons_2_lapel_medium_style_lapel_notch.png'
            },          
            {
                variantId: 's3',
                variantType: 'Single Breasted 3 Button',
                variantImage2: 'imge/front/front/neck_single_breasted_buttons_3_lapel_medium_style_lapel_notch.png'
            },          
            {
                variantId: 's4',
                variantType: 'Double Breasted 2 Button',
                variantImage2: 'imge/front/front/neck_double_breasted_buttons_2_lapel_medium_style_lapel_notch.png'
            },          
            {
                variantId: 's5',
                variantType: 'Double Breasted 4 Button',
                variantImage2: 'imge/front/front/neck_double_breasted_buttons_4_lapel_medium_style_lapel_notch.png'
            },              
            {
                variantId: 's6',
                variantType: 'Double Breasted 6 Button',
                variantImage2: 'imge/front/front/neck_double_breasted_buttons_6_lapel_medium_style_lapel_notch.png'
            }   
        ],

        fittingvariants: [
            {
                variantId: 'f1',
                variantType: 'Slim Fit',
            },          
            {
                variantId: 'f2',
                variantType: 'Regular Fit',
            },          
            ],          

        bfittingvariants: [
            {
                variantId: 'bf1',
                variantType: 'Slim Fit',
            },          
            {
                variantId: 'bf2',
                variantType: 'Regular Fit',
            },          
            ],  


        lapelvariants: [
            {
                variantId: 'l1',
                variantType: 'Notch',
                variantImage2: ''
            },          
            {
                variantId: 'l2',
                variantType: 'Peak',
                variantImage2: ''
            },              
            {
                variantId: 'l3',
                variantType: 'Shawl',
                variantImage2: ''
            }           
        ],


        pocketvariants: [                       
            {
                variantId: 'p1',
                variantType: 'No Pockets',
            },          
            {
                variantId: 'p2',
                variantType: 'With Flap',
            },          
            {
                variantId: 'p3',
                variantType: 'Double Welted',
            },          
            {
                variantId: 'p4',
                variantType: 'Patched',
            },          
            {
                variantId: 'p5',
                variantType: 'With Flap X3',
            },              
            {
                variantId: 'p6',
                variantType: 'Double Welted X3',
            }   
            ],  
        

        breastpocketvariants: [                             
            {
                variantId: 'bp1',
                variantType: 'No',
                variantImage2: ''
            },          
            {
                variantId: 'bp2',
                variantType: 'Yes',
                variantImage2: 'imge/front/front/breast_pocket_classic.png'
            },
            {
                variantId: 'bp3',
                variantType: 'Patched',
                variantImage2: 'imge/front/front/breast_pocket_patched_1.png'
            },          
            {
                variantId: 'bp4',
                variantType: 'Patched X2',
                variantImage2: 'imge/front/front/breast_pocket_patched_2.png'
            }

            ],


        sleevebuttonvariants: [                             
            {
                variantId: 'sb1',
                variantType: 'No Button',
                variantImage: ''
            },          
            {
                variantId: 'sb2',
                variantType: '2 Button',
                variantImage: 'imge/back/sleeves_buttons_2.png'
            },
            {
                variantId: 'sb3',
                variantType: '3 Buttons',
                variantImage: 'imge/back/sleeves_buttons_3.png'
            },          
            {
                variantId: 'sb4',
                variantType: '4 Buttons',
                variantImage: 'imge/back/sleeves_buttons_4.png'
            }
            ],  

        ventvariants: [                             
            {
                variantId: 'v1',
                variantType: 'Center Vent',
                variantImage: 'imge/back/bottom_length_long_back_style_center_vent.png'
            },          
            {
                variantId: 'v2',
                variantType: 'Side Vents',
                variantImage: 'imge/back/bottom_length_long_back_style_side_vents.png'
            }
            ],        

        pantfitvariants: [                             
            {
                variantId: 'pf1',
                variantType: 'Normal Fit',
                variantImage: 'imge/new_man/pants/front/length_long_cut_regular.png'
            },          
            {
                variantId: 'pf2',
                variantType: 'Slim Fit',
                variantImage: 'imge/new_man/pants/front/length_long_cut_slim.png'
            }
            ],        

        pleatvariants: [                             
            {
                variantId: 'pv1',
                variantType: 'No Pleats',
                variantImage: ''
            },          
            {
                variantId: 'pv2',
                variantType: 'Pleated',
                variantImage: 'imge/new_man/pants/front/pleats_single.png'
            },            
            {
                variantId: 'pv3',
                variantType: 'Double Pleats',
                variantImage: 'imge/new_man/pants/front/pleats_double.png'
            }
            ],        

        fasteningvariants: [                             
            {
                variantId: 'fv1',
                variantType: 'Centered',
                variantImage: 'imge/new_man/pants/front/fastening_center_visible_button.png'
            },          
            {
                variantId: 'fv2',
                variantType: 'Displaced',
                variantImage: 'imge/new_man/pants/front/fastening_moved_visible_button.png'
            },            
            {
                variantId: 'fv3',
                variantType: 'No Button',
                variantImage: 'imge/new_man/pants/front/fastening_center_hidden_button.png'
            },          
            {
                variantId: 'fv4',
                variantType: 'Off-Centered Buttonless',
                variantImage: 'imge/new_man/pants/front/fastening_moved_hidden_button.png'
            }
            ],          

        sidepocketvariants: [                             
            {
                variantId: 'sp1',
                variantType: 'Diagonal',
                variantImage: 'imge/new_man/pants/front/front_pocket_diagonal.png'
            },          
            {
                variantId: 'sp2',
                variantType: 'Vertical',
                variantImage: 'imge/new_man/pants/front/front_pocket_vertical.png'
            },            
            {
                variantId: 'sp3',
                variantType: 'Rounded',
                variantImage: 'imge/new_man/pants/front/front_pocket_rounded.png'
            },          
            ],        

        backpocketvariants: [                             
            {
                variantId: 'bkp1',
                variantType: 'No Pockets',
                variantImage: ''
            },          
            {
                variantId: 'bkp2',
                variantType: 'Double-Welted Pocket With Button',
                variantImage: 'imge/new_man/pants/back/back_pocket_1_type_button.png'
            },            
            {
                variantId: 'bkp3',
                variantType: 'Patched',
                variantImage: 'imge/new_man/pants/back/back_pocket_1_type_patched.png'
            },          
            {
                variantId: 'bkp4',
                variantType: 'Flap Pockets',
                variantImage: 'imge/new_man/pants/back/back_pocket_1_type_flap.png'
            },            
            {
                variantId: 'bkp5',
                variantType: 'Double-Welted Pocket With Button X2',
                variantImage: 'imge/new_man/pants/back/back_pocket_2_type_button.png'
            },          
            {
                variantId: 'bkp6',
                variantType: 'Patched X2',
                variantImage: 'imge/new_man/pants/back/back_pocket_2_type_patched.png'
            },           
            {
                variantId: 'bkp7',
                variantType: 'Flap Pockets X2',
                variantImage: 'imge/new_man/pants/back/back_pocket_2_type_flap.png'
            }          

            ],        

        cuffvariants: [                             
            {
                variantId: 'cv1',
                variantType: 'No Pant Cuffs',
                variantImage:'imge/new_man/pants/back/cuffs_length_long_cut_slim.png'
            },          
            {
                variantId: 'cv2',
                variantType: 'With Pant Cuffs',
                variantImage: 'imge/new_man/pants/back/cuffs_length_long_cut_slim.png'
            }
            ],

        }
    },

	    mounted () {
		     		// default choice


			  document.getElementById("jlapels").firstChild.checked = true;
			  document.getElementById("jstyles").firstChild.checked = true;
			  document.getElementById("jfittings").firstChild.checked = true;
			  document.getElementById("jpockets").firstChild.checked = true;
			  document.getElementById("jbpockets").firstChild.checked = true;
			  document.getElementById("jbsbuttons").firstChild.checked = true;
			  document.getElementById("jbvents").firstChild.checked = true;
			  document.getElementById("jbfittings").firstChild.checked = true;



			  document.getElementById('frontImg').style.display ='block';
			  document.getElementById('frontDetails').style.display ='block';
			  document.getElementById('backImg').style.display ='none';
			  document.getElementById('backDetails').style.display ='none';

			  document.getElementById('frontImg').style.display = 'none';
			  document.getElementById('frontDetails').style.display = 'none';
			  document.getElementById('backImg').style.display = 'block';
			  document.getElementById('backDetails').style.display = 'block';

		},



        methods:
        {

        updateProduct(variantImage){
          var x = document.getElementsByClassName("Svariant");
          var y = document.getElementsByClassName("Lvariant");
          var i;




        if (y[0].checked && x[0].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_1_lapel_medium_style_lapel_notch.png';
            }   
        else if (y[1].checked && x[0].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_1_lapel_medium_style_lapel_peak.png';
            }           
        else if (y[2].checked && x[0].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_1_lapel_medium_style_lapel_round.png';
            }

        else if(y[0].checked && x[1].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_2_lapel_medium_style_lapel_notch.png';
            }
        else if (y[1].checked && x[1].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_2_lapel_medium_style_lapel_peak.png';

            }           
        else if (y[2].checked && x[1].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_2_lapel_medium_style_lapel_round.png';
            }

        else if (y[0].checked && x[2].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_3_lapel_medium_style_lapel_notch.png';
            }
        else if (y[1].checked && x[2].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_3_lapel_medium_style_lapel_peak.png';
            }           
        else if (y[2].checked && x[2].checked) {
            this.styles = 'imge/front/front/neck_single_breasted_buttons_3_lapel_medium_style_lapel_round.png';
            }
        
        else if(y[0].checked && x[3].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_2_lapel_medium_style_lapel_notch.png';
            }
        else if (y[1].checked && x[3].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_2_lapel_medium_style_lapel_peak.png';
            }           
        else if (y[2].checked && x[3].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_2_lapel_medium_style_lapel_round.png';
        }       
        else if(y[0].checked && x[4].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_4_lapel_medium_style_lapel_notch.png';
            }
        else if (y[1].checked && x[4].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_4_lapel_medium_style_lapel_peak.png';
            }           
        else if (y[2].checked && x[4].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_4_lapel_medium_style_lapel_round.png';
            }   

        else if(y[0].checked && x[5].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_6_lapel_medium_style_lapel_notch.png';
            }
        else if (y[1].checked && x[5].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_6_lapel_medium_style_lapel_peak.png';
            }           
        else if (y[2].checked && x[5].checked) {
            this.styles = 'imge/front/front/neck_double_breasted_buttons_6_lapel_medium_style_lapel_round.png';
            }




      // fittings 

        if (document.getElementById("f1").checked){
                this.fittings = '';
                this.bfittings = '';
            }
        else if (document.getElementById("f2").checked) {
            this.fittings = 'imge/front/front/body_baggy.png';
            this.bfittings = 'imge/back/body_baggy.png';
        }       


        //bottom

        for (i=0; i<3 ; i++){

        if(x[i].checked) {
                this.bottom = 'imge/front/front/bottom_single_breasted_length_long_hemline_open.png';
                }
            };
        for (i=3; i<6 ; i++){
            if (x[i].checked) {
                this.bottom = 'imge/front/front/bottom_double_breasted_length_long.png';
            }
        };




        // pockets


        if (document.getElementById("p5").checked) {
            this.pockets = 'imge/front/front/hip_pockets_with_flap_fit_slim.png';
            this.pocketsx = 'imge/front/front/hip_pockets_with_flap_slanted_fit_slim_third.png';
            }
        else if (document.getElementById("p6").checked) {
            this.pocketsx = 'imge/front/front/hip_pockets_double_welt_fit_slim_third.png';
            this.pockets = 'imge/front/front/hip_pockets_double_welt_fit_slim.png';
            }
        else if (document.getElementById("p1").checked){
            this.pockets = '';
            this.pocketsx = '';
        }               
        else if (document.getElementById("p2").checked){
            this.pockets = 'imge/front/front/hip_pockets_with_flap_fit_slim.png';
            this.pocketsx = '';
        }           
        else if (document.getElementById("p3").checked){
            this.pockets = 'imge/front/front/hip_pockets_double_welt_fit_slim.png';
            this.pocketsx = '';
        }           
        else if (document.getElementById("p4").checked){
            this.pockets = 'imge/front/front/hip_pockets_patched_fit_slim.png';
            this.pocketsx = '';
        }                   




        //breastpockets

        if (document.getElementById("bp2").checked) {
                this.breastpockets =  'imge/front/front/breast_pocket_classic.png';
        }
        else if (document.getElementById("bp3").checked) {
                this.breastpockets =  'imge/front/front/breast_pocket_patched_1.png';
        }
        else if (document.getElementById("bp4").checked) {
                this.breastpockets =  'imge/front/front/breast_pocket_patched_2.png';
        }               
        else if (document.getElementById("bp1").checked) {
                this.breastpockets =  '';
        }     





        //method end
    },

        updateProductV(variantImage){
            this.bbottom = variantImage;
    },

        updateProductB(variantImage){
            this.bsbuttons = variantImage;
    },        

    updateProductpantfit(variantImage){
            this.pantfit = variantImage;
    },     
    updateProductpleat(variantImage){
            this.pleat = variantImage;
    },    
    updateProductcuff(variantImage){
            this.cuff = variantImage;

        var cv2 = document.getElementById("cv2");
        var pf1 = document.getElementById("pf1");
        var pf2 = document.getElementById("pf2");

        if (document.getElementById("cv1").checked) {
            this.cufffront =  '';
        }
        else if (cv2.checked && pf1.checked) {
                this.cufffront =  'imge/new_man/pants/front/cuffs_length_long_cut_regular.png';         
        }
        else if (cv2.checked && pf2.checked) {
                 this.cufffront =  'imge/new_man/pants/front/cuffs_length_long_cut_slim.png';      
        }  

    },    
    updateProductfastening(variantImage){
            this.fastening = variantImage
    },    
    updateProductsidepocket(variantImage){
            this.sidepocket = variantImage
    },    
    updateProductbackpocket(variantImage){
            this.backpocket = variantImage
    },

        modalFunction(){
           this.stylePicked = $("input[name='styles']:checked").val();
           this.lapelPicked = $("input[name='lapels']:checked").val();
           this.fittingPicked = $("input[name='fittings']:checked").val();
           this.bpocketPicked = $("input[name='breastpockets']:checked").val();
           this.pocketPicked = $("input[name='pockets']:checked").val();
           this.bsbuttonPicked = $("input[name='sleevebuttons']:checked").val();
           this.ventPicked = $("input[name='vents']:checked").val();
           this.fitPicked = $("input[name='pantfit']:checked").val();
           this.pleatPicked = $("input[name='pantpleats']:checked").val();
           this.fasteningPicked = $("input[name='pantfastening']:checked").val();
           this.sidepocketPicked = $("input[name='pspocket']:checked").val();
           this.backpocketPicked = $("input[name='pbpocket']:checked").val();
           this.cuffPicked = $("input[name='cuffs']:checked").val();

    },
}
		
	    
	}
</script>

