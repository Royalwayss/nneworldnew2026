<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	 public function category(){
        return $this->belongsTo('App\Models\Category','category_id')->select('id','category_name','category_url','status');
    }
	
	
	
	public function product_components(){
    	return $this->hasMany('App\Models\ProductComponent','product_id');
    }
	public function product_images(){
    	return $this->hasMany('App\Models\ProductImage','product_id')->select('id','product_id','image','image_order')->orderby('image_order','asc');
    }
	public function product_image(){
    	return $this->hasOne('App\Models\ProductImage','product_id')->select('id','product_id','image','image_order')->orderby('image_order','asc');
    }
	public function components(){
    	return $this->hasMany('App\Models\ProductComponent','product_id')->select('product_components.product_id','components.name','product_components.value')->join('components','components.id','=','product_components.component_id')->where('product_components.value','!=','')->where('components.status','1')->orderby('sort_order','asc');
    }
	
    public static function CheckProduct($id,$url,){
        $getproductdetails = Product::with(['category','components','product_image'])->where('products.product_url',$url)->where('products.id',$id);
		$getproductdetails  = $getproductdetails->select('products.*');
        $getproductdetails = $getproductdetails->where('products.status','1')->first();
        $getproductdetails = json_decode(json_encode($getproductdetails),true);
        /*echo "<pre>"; print_r($getproductdetails); die;*/
        $response = array('status'=>false);
        if(!empty($getproductdetails)){
            if($getproductdetails['category']['status']=='1'){
                $response = array('status'=>true,'productdetails'=>$getproductdetails);
            }
        } 
        return $response;
    }

	
	
}
