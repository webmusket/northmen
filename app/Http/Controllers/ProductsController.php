<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maincategory;
use App\Category;
use App\Virtualproduct;
use App\Readymadeproduct;
use App\Discount;
use Session;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;



class ProductsController extends Controller
{
    public $url = '';

    public function getproducts($url = null){
        $this->url = $url;
        $category = Category::where('slug', $url)->first();
        
        $categories = Category::where('parent',$category->parent)->where('slug' , '!=' , $url)->get();
        return view('front.products')->with(compact('url','category','categories'));
    }
    public function viewVirtualProbycat($url = null){


        $category = Category::where('slug', $url)->first();

        //$categories = Category::where('parent',$category->parent)->where('slug' , '!=' , $url)->get();

        $data = Virtualproduct::orderBy('id', 'DESC')->whereJsonContains('category', $category->id)->where('draft',0)->paginate(4);

        return response()->json($data);
             
    }

    public function viewReadymadeProbycat($url = null){

        $category = Category::where('slug', $url)->first();

        //$categories = Category::where('parent',$category->parent)->where('slug' , '!=' , $url)->get();

        $data = Readymadeproduct::orderBy('id', 'DESC')->where('draft',0)->whereJsonContains('category', $category->id)->paginate(4);

        return response()->json($data);
             
    }

    public function viewProduct($url=null, $slug = null){
        return view('front.product');
    }


    public function viewSingleProduct($url = null, $slug = null,$pro = null){
        
        $category = Category::where('slug', $slug)->first();

        $name = $category->name;

        $maincategory_name = $url;

        $category_name = $slug;

        $product_name = $pro;

        $id = $category->id;

        $products = Product::where('slug', $pro)->first();

        
        
        return view('front.single')->with(compact('maincategory_name','category_name','product_name','products'));
    }

    // public function viewProductsbycat(Request $request, $url=null, $slug = null){
    //     //echo "<pre>"; print_r($slug); die;

    //     $checked = $request->checked;
    //     $group = $request->group;
    //     if ($request->isMethod('post')){

            
            
    //         echo "string";

    //         //print_r($checked);
            
    //     }elseif($request->isMethod('get')){
            
    //         $category = Category::where('slug', $slug)->first();

    //         $maincategory = Maincategory::where('slug', $url)->first();

    //         $main_id = $maincategory->id;

    //         //echo $main_id; die;

    //         $other_cat = Category::where('slug', '!=', $slug)->where('maincategory_id',$main_id)->get();

    //         $name = $category->name;

    //         $maincategory_name = $url;

    //         $category_name = $slug;

    //         $id = $category->id;

    //         $products = Product::where('category_id', $id)->get();
    //         return view('front.allproducts')->with(compact('name','maincategory_name','category_name','products','other_cat'));
    //     }else{
    //         echo "Hello";
    //     }
        
    
        
        
    // }

    /*
    public function getfilterproduct(Request $request){

        dd($request->all());

        echo "<pre>"; print_r($data); die;

        $products = Product::where('category_id', $id)->get();

        if($request->isMethod('post'))
        {         
            if(!empty($request->input('color')))
            {
                $color_filter = implode("','", $request->input('color'));
                $products .= where('color',$color);

                echo "<pre>"; print_r($products); die;
            }
            if(!empty($request->input('season')))
            {
                $color_filter = implode("','", $request->input('season'));
                $products .= where('season',$season);
            }
            if(!empty($request->input('pattern')))
            {
                $color_filter = implode("','", $request->input('pattern'));
                $products .= where('pattern',$pattern);
            }
            if(!empty($request->input('occation')))
            {
                $color_filter = implode("','", $request->input('occation'));
                $products .= where('occation',$occation);
            }
            if(!empty($request->input('fabric')))
            {
                $color_filter = implode("','", $request->input('fabric'));
                $products .= where('fabric',$occation);
            }
            else
            {
                $output = '<h3>No Data Found</h3>';
            }
            //echo $output;

            return view('front.products')->with(compact('products'));
        }
    }

*/

    // public function getfilter($group,$value,$category){
        
        
    //     $category = Category::where('slug', $category)->first();

    //     $id = $category->id;

    //     if ($group == 'color' && $group == 'occation' && $group == 'seasons' && !empty($value)) {
    //         $value = explode(',', $value);
    //         $products = Product::where('category_id', $id)->whereIn('color',$value)->whereIn('occation',$value)->get();
    //         return $products;
    //     }

    //     elseif ($group == 'color' && $group == 'occation' && !empty($value)) {
    //         $value = explode(',', $value);
    //         $products = Product::where('category_id', $id)->whereIn('color',$value)->whereIn('occation',$value)->get();
    //         return $products;
    //     }

    //     elseif ($group == 'color' &&  !empty($value)) {
    //         $value = explode(',', $value);
    //         $products = Product::where('category_id', $id)->whereIn('color',$value)->get();
    //         return $products;
    //     }

    //     elseif ($group == 'occation' && !empty($value)) {
    //         $value = explode(',', $value);
    //         $products = Product::where('category_id', $id)->whereIn('occation',$value)->get();
    //         return $products;
    //     }

    //     elseif ($group == 'seasons' && !empty($value)) {
    //         $value = explode(',', $value);
    //         $products = Product::where('category_id', $id)->whereIn('seasons',$value)->get();
    //         return $products;
    //     }




        
        
    // }


    // public function getfilterproduct(Request $request){
    //     $checked = $request->checked;
    //     $group = $request->group;
    //     $category = $request->category;
    //     $url = "/".$request->url;
        
    //     $category = Category::where('slug', $category)->first();
    //     $id = $category->id;
        

    //     //echo $url; die;
    //     //echo $group;

        
    //     //print_r($checked); die;
        
    //     if(!empty($checked))
    //     {

    //         $products = Product::where('category_id', $id);
          
    //         if (!empty($group =="occation") && !empty($checked[0])) {
    //             $products->whereIn('occation',$checked[0]);
    //              //print_r($checked[4]);
    //         }

    //         if (!empty($group =="season") && !empty($checked[1])) {
    //             $products->whereIn('season',$checked[1]);
    //              //print_r($checked[4]);
    //         }

    //         if (!empty($group =="pattern") && !empty($checked[2])) {
    //             $products->whereIn('pattern',$checked[2]);
    //              //print_r($checked[4]);
    //         }

    //         if (!empty($group =="fabric") && !empty($checked[3])) {
    //             $products->whereIn('fabric',$checked[3]);
    //              //print_r($checked[4]);
    //         }
                
    //         if (!empty($group =="color") && !empty($checked[4])) {
    //             $products->whereIn('color',$checked[4]);
    //          //print_r($checked[4]);
    //         }
           

    //         $products = $products->get();

    //         $product_view = "";

    //         if (count($products) > 0) {
    //             foreach ($products as $product) {
    //                 $product_view .="<div class='col-lg-3'>
    //                     <a href='product-single.php' class='single-product-box'>
    //                         <span class='tiker'>New</span>
    //                         <div class='single-product-img'>
    //                             <div class='single-product-img'>
    //                                 <div class='single-image'>
    //                                     <img src='./assets/img/without_model_small.png' alt='Product image'>
    //                                 </div>
    //                                 <div class='single-image-hover'>
    //                                     <img src='./assets/img/bgnormal.jpg' alt='Product image'>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                         <div class='product-info'>
    //                             <h3>$product->name</h3>
    //                             <div class='product-tag'>
    //                                 <span class='orginal-price'><del>$210</del></span>
    //                                 <span class='sales-price'>$200</span>
    //                                 <span class='discounttg'>10% OFF</span>
    //                             </div>
    //                         </div>
    //                     </a>
    //                 </div>";
    //             }
    //         }
    //         echo $product_view;
              
    //     }else{
    //         echo "No Product";
    //     }
        
        

    // }

   

/*
    $q = User::query();
   $email = $request->input('email');
   $username= $request->input('username');

    $q->when($email,function ($query){
       $query->where('email',$email);
    });

    $q->when($username,function ($query){
       $query->where('username',$username);
    });

   $results = $q->get();
   return response()->json(['issError'=>0, 'errorCode'=>0,'message'=>$results],200);

*/

/*
   public function getfilterproduct(Request $request){
        $checked = $request->checked;
        $group = $request->group;

        $category = $request->category; 
        $category = Category::where('slug', $category)->first();
        $id = $category->id;
        $q = Product::where('category_id', $id)->get();
        

        //$url = "/".$request->url;
        if(isset($checked))
        {
            $occation = $checked[0];

            $season = $checked[1];

            $pattern = $checked[2];

            $fabric = $checked[3];

            $color = $checked[4];
            
            //echo $url; die;

            $q->when($occation,function ($query){
               $query->whereIn('occation',$occation);
            });

            $q->when($season,function ($query){
               $query->where('season',$season);
            });


            $q->when($occation,function ($query){
               $query->where('pattern',$pattern);
            });

            $q->when($occation,function ($query){
               $query->where('fabric',$fabric);
            });

            $q->when($color,function ($query){
               $query->where('color',$color);
            });

            $results = $q->get();

            return response()->json(['issError'=>0, 'errorCode'=>0,'message'=>$results],200);
        }
   }

   public function getfilterproduct(Request $request){
        $checked = $request->checked;
        $group = $request->group;

        $category = $request->category; 
        $category = Category::where('slug', $category)->first();
        $id = $category->id;
        //$q = Product::where('category_id', $id);

        foreach($checked as $check){
            echo $check;
        } 
        //$q->get();
   }
*/

    



    public function measure(Request $request){
        
        echo "Hello";
    }





}
