<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function getIndex(){
    	$products = Product::all()->toArray();
    	return view('shop.index',compact('products'));
    }
}
