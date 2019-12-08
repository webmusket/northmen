<?php 


function discount($sale_price = null,$product_id = null){

	$discountprice = '';

	$result = [];

	$products = [];
	
	
	// foreach ($discategory as $category) {
	// 	$categories = $category->category_id;
	// 	echo "<pre>"; print_r($categories); die;
	// }



	//echo "<pre>"; print_r($category); die;

	$discounts = App\Discount::where('status','1')->get();

	foreach ($discounts as $discount) {
		$discategory = DB::table('category_discount')->where('discount_id',$discount->id)->get();

		foreach ($discategory as $category) {
			$categories = $category->category_id;
			// foreach ($categories as $category) {
			// 	$data = Readymadeproduct::where('draft',0)->whereJsonContains('category', $category->id)->get();
			// 	echo "<pre>"; print_r($data); die;
			// }
			array_push($result, $categories);
		}



		
		// if ($discount->type = 'percentage') {
		// 	$discountprice =  $sale_price - ($discount->amount / 100) * $sale_price ;
		// }else{
		// 	$discountprice =  $sale_price - $discount->amount;
		// }
	}

	
	//


	foreach ($result as $category) {
		$data = App\Readymadeproduct::where('draft',0)->whereJsonContains('category', $category)->get();
		foreach ($data as $product) {
			array_push($products, $product->id);
		}
	}

	
	echo "<pre>"; print_r($products); die;
	echo $discountprice;
	//echo $discount->status;


	//echo "<pre>"; print_r($discounts); die;
}

