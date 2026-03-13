<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Session;

class ProductEnquiry extends Authenticatable
{
     
   public function product(){
    	return $this->belongsTo('App\Models\Product','product_id')->with(['product_image','category'])->select('id','product_name','product_url','category_id');
   }
   public function product_image(){
    	return $this->hasOne('App\Models\ProductImage','product_id')->select('id','product_id','image')->orderby('image_order','asc');
   }
   public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
