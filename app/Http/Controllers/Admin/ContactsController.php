<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\AdminsRole;
use App\Models\Contact;
use App\Models\Module;
use Validator;
use Session;
use Auth;

class ContactsController extends Controller
{
   
    public function contacts(Request $request)
    {  
        Session::put('page', 'contacts');
        
        $usersModule = [];
        
            $usersModule = [
                'view_access' => 1,
                'edit_access' => 1,
                'full_access' => 1
            ];
        
        if ($request->ajax()) { //
                $query = Contact::query();
               
                $query = $query->where('is_delete','0');
               
            

            return DataTables::of($query)
              
				->addColumn('created_at', function ($contact) {
                    return date("M-d-Y H:i a", strtotime($contact->created_at));
                })
				->addColumn('message', function ($contact) {
                    return '<p class="message">'.$contact->message.'</p>';
                })
				
                ->addColumn('actions', function ($formdata) {
                   if($formdata['view_status'] == '0'){ 
						$class = 'red';
					}else{
						$class = '';
					}
					$action =  '<a href="javascript:;"  class="view-modal" data-id="'.$formdata->id.'" data-module="Contact" modal-type="wide" data-href="'.route("view_contact",[$formdata->id]).'"><svg style="width: 25px;" id="view-'.$formdata->id.'" class="svg-inline--fa fa-eye fa-w-18 '.$class.'" aria-hidden="true" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"></path></svg></a>';
					$action .= '<a href="javascript:;" data-id="'.$formdata->id.'" data-href="'.route('deleteData',['contacts',$formdata->id]).'" style="margin-left:10px" class="red delete_modal"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $action; 
				})
				 
                ->rawColumns(['message','actions'])
                ->make(true);
        }

        return view('admin.contacts.list', compact('usersModule'));
    }

  
  
    public function view_contact(Request $request,$id)
    {
		
        $data = Contact::with('enquiry_products')->where('id',$id)->first();
		 
		 if(!empty($data)){
			if($data['view_status'] == '0'){
			    Contact::where('id',$id)->update(['view_status'=>'1']);
			}
			
			
			$previous_id ='';
			if($id> 1){
				$get_previous_id = Contact::select('id')->where('id','<',$id)->where('is_delete','0')->orderby('id','desc'); 
				
                $get_previous_id = $get_previous_id->first();
                if(!empty($get_previous_id)){
					$previous_id = $get_previous_id['id'];
				}
			}
			
			$next_id ='';
			$get_next_id = Contact::select('id')->where('id','>',$id)->where('is_delete','0')->orderby('id','asc'); 
			
            $get_next_id = $get_next_id->first();

             if(!empty($get_next_id)){
				$next_id = $get_next_id['id'];
			}
            $route_name = 'view_contact';
            $popup_type = 'wide';
            $module = 'Contact';
			$popup_slider = popup_slider($previous_id,$next_id,$route_name,$popup_type,$module);
			$contact['data'] =  $data;
			$html = (String)View::make('admin.contacts.view',$contact);
			return response()->json(['status'=>true,'html'=>$html,'popup_slider'=>$popup_slider]);
		}else{
			return response()->json(['status'=>false]);
		}
	}
  
  
  
  

}
