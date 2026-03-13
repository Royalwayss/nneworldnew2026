<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\AdminsRole;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\City;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\CmsPage;
use Auth;
use Validator;
use Hash;
use DB;
use Session;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Admin\DetailRequest;
use App\Http\Requests\Admin\PasswordRequest;
use App\Http\Requests\Admin\SubadminRequest;
use App\Services\Admin\AdminService;

class AdminController extends Controller
{
    public function dashboard(){
        Session::put('page','dashboard');
        /*echo "<pre>"; print_r(Auth::guard('admin')->user()); die;*/
        $categoriesCount = 0;
        $brandsCount = 0;
        $productsCount = 0;
        $usersCount = User::get()->count();
        $couponsCount = 0;
        $ordersCount = 0;
        $pagesCount = 0;
        return view('admin.dashboard')->with(compact('categoriesCount','productsCount','brandsCount','usersCount','couponsCount','ordersCount','pagesCount'));
    }

    public function login(){
        return view('admin.login');
    }

    public function loginRequest(LoginRequest $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $service = new AdminService();
            $loginStatus = $service->login($data);
            if($loginStatus==1){
                return redirect("admin/dashboard");
            }else{
                return redirect()->back()->with("error_message","Invalid Email or Password!");
            }
        }else{
            return redirect('admin/login');    
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function updatePassword(){
        Session::put('page','update-password');
        return view('admin.update_password');
    }

    public function updatePasswordRequest(PasswordRequest $request){
        if($request->isMethod('post')){
            $data = $request->input();
            /*echo "<pre>"; print_r($data); die;*/
            $service = new AdminService();
            $pwdStatus = $service->updatePassword($data);
            // Check if Current Password is correct
            if($pwdStatus['status']=="success"){
                return redirect()->back()->with('success_message',$pwdStatus['message']);
            }else{
                return redirect()->back()->with('error_message',$pwdStatus['message']);
            }
        }
    }

    public function currentPasswordVerify(Request $request){
        $data = $request->all(); 
        $service = new AdminService();
        return $service->verifyPassword($data);
    }

    public function updateDetails(){
        Session::put('page','update-details');
        return view('admin.update_details');
    }

    public function updateDetailsRequest(DetailRequest $request){
        if($request->isMethod('post')){
            $service = new AdminService();
            $result = $service->updateDetails($request);
            return redirect()->back()->with('success_message',$result['message']);
        }
    }

    public function subadmins(){
        Session::put('page','subadmins');
        $subadmins = Admin::where('type','subadmin')->get();
        return view('admin.subadmins.subadmins')->with(compact('subadmins'));
    }

    public function updateSubadminStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $service = new AdminService;
            $status = $service->updateSubadminStatus($data);
            return response()->json(['status'=>$status,'subadmin_id'=>$data['subadmin_id']]);
        }
    }

    public function addEditSubadmin($id=null){
        if($id==""){
            $title = "Add Subadmin";
            $subadmindata = array();
        }else{
            $title = "Edit Subadmin";
            $subadmindata = Admin::find($id);
        }
        return view('admin.subadmins.add_edit_subadmin')->with(compact('title','subadmindata'));
    }


    public function addEditSubadminRequest(SubadminRequest $request){
        if($request->isMethod('post')){
            $service = new AdminService();
            $result = $service->addEditSubadmin($request);
            return redirect('admin/subadmins')->with('success_message',$result['message']);
        }
    }

    public function deleteSubadmin($id){
        $service = new AdminService();
        $result = $service->deleteSubadmin($id);
        return redirect()->back()->with('success_message',$result['message']);
    }

    public function updateRole($id){
        $subadminRoles = AdminsRole::where('subadmin_id',$id)->get()->toArray();
        $subadminDetails = Admin::where('id',$id)->first()->toArray();
        $title = "Update ".$subadminDetails['name']." Subadmin Roles/Persmissions";
        /*dd($subadminRoles);*/
        return view('admin.subadmins.update_roles')->with(compact('title','id','subadminRoles'));
    }

    public function updateRoleRequest(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $service = new AdminService();
            $result = $service->updateRole($request);
            return redirect()->back()->with('success_message',$result['message']);
        }
        
    }
	
	
	public function updateStatus(Request $request,$table,$id){
        if($request->ajax()){
            $data = $request->all(); //echo "<pre>"; print_r($data); exit;
            if($data['status']=="Active"){
                $status = '0';
            }else{
                $status = '1';
            }
            DB::table($table)->where('id',$data['id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'id'=>$data['id']]);
        }
    }
	
	
	public function deleteData(Request $request,$table,$id){
        if($request->ajax()){
            $data = $request->all(); 
            $is_delete = '1';
            DB::table($table)->where('id',$id)->update(['is_delete'=>$is_delete]);
            return response()->json(['status'=>true]);
        }
    }
	
	
	
	public function get_city(Request $request){   
	         $data = $request->all(); 
			 $cities = City::where('state_id',$data['state'])->groupby('name')->orderby('name','asc')->get();
		     $cities = json_decode(json_encode($cities));
			 $city_html = '<option value=""></option>';
			 foreach($cities as $city){ 
				 $city_html .= '<option value="'.$city->name.'">'.$city->name.'</option>';
			 }
			 return response()->json(['status'=>true,'html'=>$city_html]);
	}
	
}
