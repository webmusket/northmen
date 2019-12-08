<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getcategories(){
    	$categories = Category::orderBy('name', 'ASC')->get();
		$categories = json_decode(json_encode($categories));

		return $categories;
    }

    public function getFilterId()
    {
        $colorcategory = Category::where('name','LIKE',"%Color%")->first()->id;
        $colors = Category::where('parent',$colorcategory)->get();

        $seasoncategory = Category::where('name','LIKE',"%Season%")->first()->id;
        $season = Category::where('parent',$seasoncategory)->get();

        $patterncategory = Category::where('name','LIKE',"%Pattern%")->first()->id;
        $pattern = Category::where('parent',$patterncategory)->get();

        $fabriccategory = Category::where('name','LIKE',"%Fabric%")->first()->id;
        $fabric = Category::where('parent',$fabriccategory)->get();

        return [$colors,$season,$pattern,$fabric];
    }

    public function updatecategory(Request $request){

    	$data = $request->all();

        $category = Category::where('parent',$data['parent'])->get();


        foreach ($category as $cat) {
            if($cat->name == $data['name']){
                return "cat name is already exist";
            }
        }

    	$category = new Category;
		$category->name = $data['name'];
		$category->parent = $data['parent'];
		$category->save();

        return $category->id;

    }

    
}
