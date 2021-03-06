<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
class ProductController extends Controller
{
    public function getIndex(){
    	$products = Product::all();
    	return view('shop.index',compact('products'));
    }

    public function getAddToCart(Request $request,$id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);
    	$request->session()->put('cart',$cart);
    	//dd($request->session()->get('cart'));
    	return redirect()->route('product.index');
    }
}
