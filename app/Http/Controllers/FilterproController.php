<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Readymadeproduct;
use App\Virtualproduct;

class FilterproController extends Controller
{
    public function getreadymadefilterproduct(Request $request,$url = null){
    	$data = $request->all();

    	$category = Category::where('slug', $url)->first();

        $data = Readymadeproduct::orderBy('id', 'DESC')->whereJsonContains('category', $category->id)->whereJsonContains('category', $data[0])->paginate(4);

        return response()->json($data);
    }

    public function getvirtualfilterproduct(Request $request,$url = null){
    	$data = $request->all();

    	$category = Category::where('slug', $url)->first();

        $data = Virtualproduct::orderBy('id', 'DESC')->whereJsonContains('category', $category->id)->whereJsonContains('category', $data[0])->paginate(4);

        return response()->json($data);
    }
}
