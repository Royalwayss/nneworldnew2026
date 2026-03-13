<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Session;

class Cart extends Authenticatable
{
     public static function cartitems(){
		 if(Session::has('cart_session_id')){
			 $cart_session_id= Session::get('cart_session_id');
			 $cartitems = Cart::with('product_image')->select('carts.id','carts.product_id','products.product_name','products.product_url')->join('products','products.id','=','carts.product_id')->join('categories','categories.id','=','products.category_id')->where('sessionID',$cart_session_id)->where('products.status','1')->where('categories.status','1')->get();
			 $cartitems = json_decode(json_encode($cartitems),true); 
			 return $cartitems;
		 }		 
		 
	 }
	public function product_image(){
    	return $this->belongsTo('App\Models\ProductImage','product_id')->select('id','product_id','image');
    }

}
