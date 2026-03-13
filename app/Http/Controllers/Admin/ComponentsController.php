<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\AdminsRole;
use App\Models\Component;
use App\Models\Module;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Validator;
use Session;
use Auth;

class ComponentsController extends Controller
{
   
    public function components(Request $request)
    {   
        Session::put('page', 'components');
        
       
		$usersModule = [];
        
            $usersModule = [
                'view_access' => 1,
                'edit_access' => 1,
                'full_access' => 1
            ];
        
        if ($request->ajax()) { //
                $query = Component::query();
               
                $query = $query->where('is_delete','0');
               
            return DataTables::of($query)
              
				->addColumn('parent_id', function ($category) {
                    if(!empty($category->parent_id)){
							
							$get_cat = Category::where('id',$category->parent_id)->first();
							if(!empty($get_cat)){
								return $get_cat->category_name;
							}
					}else{
						return 'ROOT';
					}
                    


                })
				->addColumn('is_default', function ($category) {
                    if(!empty($category->is_default)){
							return 'Yes';
					}else{
						    return 'No';
					}
                    


                })
				->addColumn('status', function ($user) use ($usersModule) {
                    $toggleStatus = $user->status == 1 ? 'fa-toggle-on' : 'fa-toggle-off';
                    $toggleColor = $user->status == 1 ? '#3f6ed3' : 'grey';
                    $statusText = $user->status == 1 ? 'Active' : 'Inactive';
                    return '<a class="updateStatus" id="status-'.$user['id'].'" data-url="'.route('updateStatus',['components',$user['id']]).'" data-id="'.$user['id'].'" style="color:'.$toggleColor.'" href="javascript:void(0)"> 
                                <i style="font-size: 25px;" class="fas '.$toggleStatus.'" status="'.$statusText.'"></i>
							 </a>';
                }) 
                ->addColumn('actions', function ($formdata) {
					
					
					$action ='<a style="float:right" href="javascript:;" data-module="Edit Component" data-href="'.route('addeditcomponent',[$formdata->id]).'" data-modal-type="small" data-id="'.$formdata->id.'" class="addedit-modal"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="30px" height="30px" viewBox="0 0 551.057 551.057" xml:space="preserve"> <g> 	<g> 		<path d="M477.685,0H73.373C32.913,0,0,32.913,0,73.373v404.312c0,40.459,32.913,73.372,73.373,73.372h404.312    c40.459,0,73.372-32.913,73.372-73.372V73.373C551.057,32.907,518.149,0,477.685,0z M459.257,459.257H91.8V91.8h367.463v367.457    H459.257z"/> 		<path d="M420.205,187.78c4.486-4.492,4.627-11.634,0.312-15.949l-46.923-46.922c-2.104-2.105-4.877-3.152-7.687-3.152    c-2.956,0-5.961,1.157-8.262,3.464l-42.693,42.687l62.559,62.559L420.205,187.78z"/> 		<polygon points="162.039,412.445 168.698,419.109 191.898,416.08 368.754,239.225 306.202,176.666 129.34,353.521     126.316,376.729 132.975,383.388   "/> 		<polygon points="145.723,422.103 153.385,421.104 124.321,392.041 123.324,399.703 122.326,407.354 119.964,425.456     138.073,423.1   "/> 	</g> </g> </svg></a>';
					//$action .= '<a href="javascript:;" data-id="'.$formdata->id.'" data-href="'.route('deleteData',['messages',$formdata->id]).'" style="margin-left:10px" class="red delete_modal"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $action; 
				})
				 
                ->rawColumns(['status','actions'])
                ->make(true);
        }

        return view('admin.components.list', compact('usersModule'));
    }

    
    public function addeditComponent(Request $request,$id='')
    {
			$property = [];
			$data['id'] = $id;
			if(!empty($id)){
				$data['row'] = Component::find($id);
			    
				$previous_id ='';
				if($id> 1){
					$get_previous_id = Component::select('id')->where('id','<',$id)->where('is_delete','0')->orderby('id','desc')->first(); 
					if(!empty($get_previous_id)){
						$previous_id = $get_previous_id['id'];
					}
				}
			
				$next_id ='';
				$get_next_id = Component::select('id')->where('id','>',$id)->where('is_delete','0')->orderby('id','asc')->first(); 
				if(!empty($get_next_id)){
					$next_id = $get_next_id['id'];
				}
				$route_name =  Route::currentRouteName(); 
				$popup_type = 'small';
				$module = 'Edit Component';
				$popup_slider = form_popup_slider($previous_id,$next_id,$route_name,$popup_type,$module);
				//$data['cities'] = City::where('satte','101')->get()->toArray();
				}else{
					
					$data['message'] = [];
					$popup_slider = '';
				} 
			$html = (String)View::make('admin.components.add-edit-form',$data);
			return response()->json(['status'=>true,'html'=>$html,'popup_slider'=>$popup_slider]);
		
	}
	
	
	 public function saveComponent(Request $request,$id='')
    { 
	     if($request->ajax()){ 
			$data = $request->all(); 
			
			
			if(isset($data['type']) && $data['type'] == 'Dropdown'){
				$options_validation = 'required';
			}else{
				$options_validation = '';
			}
			
			
			
			$rules = [
                'name' => 'required',
				'type' => 'required',
				'options.*' => $options_validation,
				'sort_order'=>'required'
				
                
            ];
			$validator = Validator::make($request->all(),$rules );
               
			
			if($validator->fails()){
				$error_messages = $validator->messages();
				$error_messages = json_decode(json_encode($error_messages));
				return response()->json(['status'=>false,'error_messages'=>$error_messages]);
			}else{
				 $data = $request->all();  
				 if(empty($id)){
					 $component = new Component;
				 }else{
					 $component = Component::find($id);
				 }
				 
				$component->name = $data['name'];
				
				$component->type = $data['type'];
				
				if($data['type'] == 'Dropdown'){
					
				  $options = json_encode($data['options']);
				  
				  $component->options = $options;
					
				}else{
					$component->options = NULL;
				}
				if(isset($data['status']) && $data['status'] == '1'){
					$component->status = '1';
				}else{
					$component->status = '0';
				}	 
				if(isset($data['is_default']) && $data['is_default'] == '1'){
					$component->is_default = '1';
				}else{
					$component->is_default = '0';
				}
				
				$component->sort_order = $data['sort_order']; 
				
				$component->save();
				
				
				 return response()->json(['status'=>true]);
			}
		 }
		 
	}
	
	
   
 
   

}
