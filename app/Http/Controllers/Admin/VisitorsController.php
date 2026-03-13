<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\AdminsRole;
use App\Models\Visitor;
use App\Models\Module;
use Validator;
use Session;
use Auth;

class VisitorsController extends Controller
{
   
    public function visitors(Request $request)
    {  
        Session::put('page', 'visitors');
        
        $usersModule = [];
        
            $usersModule = [
                'view_access' => 1,
                'edit_access' => 1,
                'full_access' => 1
            ];
        
        if ($request->ajax()) { //
                $query = Visitor::query();
               
                $query = $query->where('is_delete','0');
               
            

            return DataTables::of($query)
                ->addColumn('user_info', function ($visitor) {
                     
					 if(!empty($visitor->user_info)){
						 $user_info = $visitor->user_info;
						 $user_info = json_decode($user_info); 
						 $info = $user_info->geoplugin_regionName.'<br>';
						 $info .= $user_info->geoplugin_countryName.'<br>';
						 
						 return $info;
					 }else{
						 return '';
					 }
					 
                })
				->addColumn('visit_date', function ($visitor) {
                    return date("d-m-Y H:i:s a", strtotime($visitor->created_at));
                })
                
				 
                ->rawColumns(['user_info','visit_date','actions'])
                ->make(true);
        }

        return view('admin.visitors.list', compact('usersModule'));
    }

  

}
