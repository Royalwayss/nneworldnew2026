<?php
namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\AdminRole;
use Auth;

class Module extends Model{
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'modules';
	
	
	
	
	public static function get_modules($type=''){
           $modules = [];

		   $all_modules = Module::where(['parent_id'=>'ROOT']);
		   if($type != 'all'){
			   $all_modules = $all_modules->where('status','1');
		   }
		   $all_modules = $all_modules->orderby('sortorder','asc')->get();
		   foreach($all_modules as $module){
			 
			   if($module['table_name'] !=''){
				   $module['count'] = Module::get_table_count($module['table_name']);
				   $module['unseen'] = Module::get_table_unseen_count($module['table_name']);
			   }else{
				   $module['count'] = '';
				   $module['unseen'] = '';
			   }
			   $modules[] = $module;
		   } 
		   
	     $modules=json_decode( json_encode($modules), true); 
	     return $modules;
	   
	 }
	
	 public static function get_table_count($table_name){
		 $count =   DB::table($table_name)->where('is_delete','0')->count();
		 return $count;
	 }
	 
	 public static function get_table_unseen_count($table_name){
		 $count = '';
		 if($table_name != ''){
			$table_name_array = ['service_forms','users','member_interested_registrations','member_registrations','professional_registrations','real_estate_developers_registrations','sellers_registrations','advertisement_enquiries','enquiries','contacts','service_forms'];
			if(in_array($table_name,$table_name_array )){
					$count =   DB::table($table_name)->where('is_delete','0')->where('view_status','0')->count();
			}
		 }
		
		 return $count;
		 
	 }
	 
}
