<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\AdminsRole;
use App\Models\Subscriber;
use App\Models\Module;
use Validator;
use Session;
use Auth;

class SubscribersController extends Controller
{
   
    public function subscribers (Request $request)
    {  
        Session::put('page', 'subscribers');
        
        $usersModule = [];
        
            $usersModule = [
                'view_access' => 1,
                'edit_access' => 1,
                'full_access' => 1
            ];
        
        if ($request->ajax()) { //
                $query = Subscriber::query();
               
                $query = $query->where('is_delete','0');
               
            

            return DataTables::of($query)
              
				->addColumn('created_at', function ($contact) {
                    return date("M-d-Y H:i a", strtotime($contact->created_at));
                })
				->addColumn('message', function ($contact) {
                    return '<p class="message">'.$contact->message.'</p>';
                })
                ->make(true);
        }

        return view('admin.subscribers.subscribers', compact('usersModule'));
    }

  
 
}
