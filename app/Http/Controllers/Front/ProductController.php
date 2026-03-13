<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Mails;
use App\Models\Cart;

use Validator;
use DB;
use Session;

class ProductController extends Controller
{

    
	public function listing(Request $request){
        $catseo = Route::getFacadeRoot()->current()->uri();
        $response = Category::getcatdetails($catseo); 
        $sortname ="";$selPrice="";$proage="";
        if($response['status']){
            Session::put('previousurl',$catseo);
			$listing_type = "Categories";
            $catids = $response['catids'];
            //dd($catids);
           
            $getproducts = Product::with(['product_image'])->wherein('products.category_id',$catids)->where('products.status','1')->join('categories','categories.id','=','products.category_id')->select('products.*');
            $getproducts = $getproducts->whereExists( function ($query)  {
                $query->from('categories')
                ->whereRaw('products.category_id = categories.id');
            })->paginate(100); 
            $all_products = json_decode(json_encode($getproducts),true);  
             $pagination_links = $all_products['links']; 
            $products = $getproducts->appends(request()->except('page')); 
            //$users->appends(request()->input())->links();
            $title = $response['catdetail']['meta_title'];
            $meta_title = $response['catdetail']['meta_title'];
            if(empty($title)){
                $title = $response['catdetail']['category_name'];    
                $meta_title = $response['catdetail']['category_name'];    
            }
            $meta_description = $response['catdetail']['meta_description'];
            $meta_keyword = $response['catdetail']['meta_keywords'];
            $catdetails  = $response['catdetail'];
            $total_products  = count($products);
            /*echo "<pre>"; print_r($getproducts); die;*/
        }else{
            abort(404);
        } 
        if($request->ajax()){
			$ajax_call = true;
            return response()->json([
                'view' => (String)View::make('front.pages.products.listing.include.product-list')->with(compact('products','catseo','catdetails','pagination_links','sortname','catseo','listing_type','catids','getfilters','ajax_call')),
                'total_products' => count($products)
            ]);
        }else{  
            return view('front.pages.products.listing.index')->with(compact('catdetails','catseo','products','pagination_links','total_products'));
        }
    }

    public function detail($id,$url,){
        $response = Product::CheckProduct($id,$url,);
        /*echo "<pre>"; print_r($response); die;*/
        if(empty($response['status'])){
             abort(404); die; exit;
        }
        $getcatdetails = Category::getcatdetails($response['productdetails']['category']['category_url']);
        if($response['status']){ 
            $getProductURL = $response['productdetails']['product_url'];
            Session::put('previousurl',"/product/".$getProductURL."/".$response['productdetails']['id']);
            $productdetails = $response['productdetails'];
            //echo "<pre>"; print_r($productdetails); die;
            $title = $productdetails['product_name'];
            $meta_title = "Buy ".$title." - ".config('constants.project_name')."";
            $meta_description = "Shop ".$title." - ".config('constants.project_name')."";
            //RECENT VIEW ITEMS
            if(Session::has('recentSession')){
                Session::get('recentSession');
            }else{
                $recentSession = Session::getId();
                Session::put('recentSession',$recentSession);
            }
           
            return view('front.pages.products.details.index')->with(compact('title','meta_title','meta_description','productdetails'));
        }else{
            return redirect('/');
        }
    }

   
    
    public function addtoCart(Request $request){
        if($request->isMethod('post')){
            $data =  $request->all();
			if(isset($data['product_id']) && !empty($data['product_id'])){
				if(Session::has('cart_session_id')){
					 $cart_session_id = Session::get('cart_session_id');
				}else{
					 $cart_session_id = Session::getId();
					 Session::put('cart_session_id',$cart_session_id);
				}
				$product_id = $data['product_id'];
				$checkcart = Cart::where(['sessionID'=>$cart_session_id,'product_id'=>$product_id])->first();
				if(empty($checkcart)){
					$cart = new Cart;
					$cart->sessionID = $cart_session_id;
				}else{
					$cart = Cart::find($checkcart['id']); 
				}
				$cart->product_id = $product_id;
				$cart->save();
				return redirect()->route('contactus');
			}else{
				return redirect()->route('home');
			}
        }
    }
	
	 public function removeCartProduct(Request $request,$id){
		 if(Session::has('cart_session_id')){
			 $checkcart = Cart::where(['sessionID'=>Session::get('cart_session_id'),'id'=>$id])->delete();
		 }
		 return redirect()->route('contactus');
	 }
	
	
	
	
	

}
