<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use App\Models\AdminsRole;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\State;
use App\Models\City;
use App\Models\Module;
use App\Models\Component;
use App\Models\ProductComponent;
use Validator;
use Session;
use Auth;

class ProdoctsController extends Controller
{
   
    public function products(Request $request)
    {  
        Session::put('page', 'products');
        
        $usersModule = [];
        
            $usersModule = [
                'view_access' => 1,
                'edit_access' => 1,
                'full_access' => 1
            ];
        
        if ($request->ajax()) { //
                $query = Product::query();
                $query = $query->select('products.*','categories.category_name')->join('categories','categories.id','products.category_id');
                $query = $query->where('products.is_delete','0');
               
            

            return DataTables::of($query)
                ->addColumn('product_image', function ($property) {
                     
					 if(!empty($property->product_image)){
						 $img = '<img style="width:50px" src="'.asset('front/assets/images/products/large/'.$property->product_image->image).'">';
					 }else{
						 $img = '';
					 }
					 return $img;
                })
				->addColumn('registered_on', function ($property) {
                    return date("d-m-Y, g:i a", strtotime($property->created_at));
                })
                ->addColumn('status', function ($property) use ($usersModule) {
                    $toggleStatus = $property->status == 1 ? 'fa-toggle-on' : 'fa-toggle-off';
                    $toggleColor = $property->status == 1 ? '#3f6ed3' : 'grey';
                    $statusText = $property->status == 1 ? 'Active' : 'Inactive';
                    return '<a class="updateStatus" id="status-'.$property['id'].'" data-url="'.route('updateStatus',['products',$property['id']]).'" data-id="'.$property['id'].'" style="color:'.$toggleColor.'" href="javascript:void(0)"> 
                                <i style="font-size: 25px;" class="fas '.$toggleStatus.'" status="'.$statusText.'"></i>
							 </a>';
                })
				 ->addColumn('actions', function ($property) {
                     if($property['view_status'] == '0'){ 
						$class = 'red';
					}else{
						$class = '';
					}
					return  '<a style="float:right" href="javascript:;" data-module="Edit Product" data-href="'.route('addeditproduct',[$property['id']]).'" data-modal-type="wider" data-id="'.$property['id'].'" class="addedit-modal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="30px" height="30px" viewBox="0 0 551.057 551.057" xml:space="preserve"> <g> 	<g> 		<path d="M477.685,0H73.373C32.913,0,0,32.913,0,73.373v404.312c0,40.459,32.913,73.372,73.373,73.372h404.312    c40.459,0,73.372-32.913,73.372-73.372V73.373C551.057,32.907,518.149,0,477.685,0z M459.257,459.257H91.8V91.8h367.463v367.457    H459.257z"/> 		<path d="M420.205,187.78c4.486-4.492,4.627-11.634,0.312-15.949l-46.923-46.922c-2.104-2.105-4.877-3.152-7.687-3.152    c-2.956,0-5.961,1.157-8.262,3.464l-42.693,42.687l62.559,62.559L420.205,187.78z"/> 		<polygon points="162.039,412.445 168.698,419.109 191.898,416.08 368.754,239.225 306.202,176.666 129.34,353.521     126.316,376.729 132.975,383.388   "/> 		<polygon points="145.723,422.103 153.385,421.104 124.321,392.041 123.324,399.703 122.326,407.354 119.964,425.456     138.073,423.1   "/> 	</g> </g> </svg></a>';
                })
                ->rawColumns(['product_image','status','actions'])
                ->make(true);
        }

        return view('admin.products.products', compact('usersModule'));
    }

    public function addeditProduct(Request $request,$id='')
    {
			$data['id'] = $id;
			if(!empty($id)){
				$data['product'] = Product::with(['product_images','product_components'])->find($id);
			    
				$previous_id ='';
				if($id> 1){
					$get_previous_id = Product::select('id')->where('id','<',$id)->where('is_delete','0')->orderby('id','desc')->first(); 
					if(!empty($get_previous_id)){
						$previous_id = $get_previous_id['id'];
					}
				}
			
				$next_id ='';
				$get_next_id = Product::select('id')->where('id','>',$id)->where('is_delete','0')->orderby('id','asc')->first(); 
				if(!empty($get_next_id)){
					$next_id = $get_next_id['id'];
				}
				$route_name =  Route::currentRouteName(); 
				$popup_type = 'wider';
				$module = 'Edit  Product';
				$popup_slider = form_popup_slider($previous_id,$next_id,$route_name,$popup_type,$module);
				//$data['cities'] = City::where('satte','101')->get()->toArray();
				}else{
					
					$data['product'] = [];
					$popup_slider = '';
				}
			$data['categories'] = Category::get_categories('all'); 
			$data['components'] = Component::orderby('sort_order','asc')->get(); 
			$html = (String)View::make('admin.products.addeditproduct',$data);
			return response()->json(['status'=>true,'html'=>$html,'popup_slider'=>$popup_slider]);
		
	}
	 public function saveproperty(Request $request,$id='')
    { 
	     if($request->ajax()){
			
			if(empty($id)){
				$seounique = "unique:products";
			}else{
				$seounique = "unique:products,product_url,".$id;
			} 
			$rules = [
                'product_name' => 'required',
                'product_url' => 'bail|required|'.$seounique,
                'category_id' => 'required',
                'description' => '',
                'sort_order' => 'required',
            ];
			$validator = Validator::make($request->all(),$rules );
               
			
			if($validator->fails()){
				$error_messages = $validator->messages();
				$error_messages = json_decode(json_encode($error_messages));
				return response()->json(['status'=>false,'error_messages'=>$error_messages]);
			}else{
				 $data = $request->all();  
				 if(empty($id)){
					 $product = new Product;
				 }else{
					 $product = Product::find($id);
				 } 
				 $product->product_name = $data['product_name'];
				 $product->product_url = $data['product_url'];
				 $product->category_id = $data['category_id'];
				 //$product->description = $data['description'];
				 $product->sort_order = $data['sort_order'];
				 $product->status = $data['status'];
				 if(isset($data['newly_launched']) && $data['newly_launched'] == '1'){
					 $newly_launched = '1';
				 }else{
					 $newly_launched = '0';
				 }
				 $product->newly_launched = $newly_launched;
				 if(isset($data['status']) && $data['status'] == '1'){
					 $status = '1';
				 }else{
					 $status = '0';
				 }
				 $product->status = $status;
				 $product->save();
				 $product_id = $product->id;
				
				 
				if(isset($data['components']) && !empty($data['components'])){
					ProductComponent::where('product_id',$product_id)->whereNotIn('component_id',$data['components'])->delete();
					foreach($data['components'] as $component_id){
					  if(isset($data['component_value_'.$component_id]) && !empty($data['component_value_'.$component_id])){
						  
						  $check_product_component = ProductComponent::where(['product_id'=>$product_id,'component_id'=>$component_id])->first();
						  if(empty($check_product_component)){
						      $product_component = new ProductComponent;
						  }else{
							   $product_component = ProductComponent::find($check_product_component['id']);
						  }
						  
						  $product_component->product_id = $product_id;
						  $product_component->component_id = $component_id;
						  $product_component->value = $data['component_value_'.$component_id];
						  $product_component->save();
					  }
					}
			   }else{
					ProductComponent::where('product_id',$product_id)->delete();
				}
				
				
				
				
				
				
				
				
				
				
				if($request->hasFile('images')){
                $images = $request->file('images');
                
                foreach ($images as $key => $image_tmp) {
                  
                    $manager = new ImageManager(new Driver());
                    
                    $image = $manager->read($image_tmp);
                   
                    $extension = $image_tmp->getClientOriginalExtension();
                   
                    $imageName = 'product-'.rand(1111,999999).'.'.$extension;
                    $largeImagePath = 'front/assets/images/products/large/'.$imageName;
                    $mediumImagePath = 'front/assets/images/products/medium/'.$imageName;
                  
                    //$image->resize(1290,628)->save($largeImagePath);
                    //$image->resize(410,512)->save($mediumImagePath);
					
					
					$image->save($largeImagePath);
                    $image->save($mediumImagePath);
                   
					$product_image = new ProductImage;
					$product_image->product_id = $product_id;
					$product_image->image = $imageName;
					if(!empty($data['image_order'][$key])){
					$product_image->image_order = $data['image_order'][$key];
					}
					$product_image->save();
                }
            }

				
				 return response()->json(['status'=>true]);
			}
		 }
		 
	}
	
	
    public function updateUserStatus(Request $request){
        if($request->ajax()){
            
			$data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            User::where('id',$data['user_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'user_id'=>$data['user_id']]);
        }
    }

   public function updateimagesort(Request $request){
		if($request->ajax()){
			$data =$request->all();
			$id = $data['imageid'];
			$property_image = ProductImage::find($id);
			$property_image->image_order = $data['imagesort'];
			$property_image->save();
			return true;
		}
		
	}

    public function imagedelete(Request $request){
		if($request->ajax()){
			$data =$request->all();
			$id = $data['id'];
			$getdetails = ProductImage::find($id);
            $destinationPath = 'assets/front/projects/';
            if( $getdetails->image !=""){
                $folders = array('large');
				foreach($folders as $folder){
					$img_path = $destinationPath.''.$folder.'/'.$getdetails->image;
					if (file_exists( public_path().'/'.$img_path)){
					  // unlink($img_path);
					}
                }
            }
            $getdetails->delete();
			return true;
		}
		
	}
   

}
