<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\ProductEnquiry;
use App\Models\WebSetting;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Mails;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;
use Validator;
use Session;

class IndexController extends Controller
{

    public function commimgsoon(){
		return view('front.pages.coming_soon.coming_soon');
    }

    public function index(){   
        $this->checkVistor();	
        $meta =  meta('/');
		$categories = Category::get_categories(); 
		$agiri_categories = Category::get_categories('agri-products'); 
        return view('front.pages.home.index')->with(compact('meta','categories','agiri_categories'));
    }
	
	public function aboutus(){  
        $meta =  meta('aboutus');
        return view('front.pages.aboutus.aboutus')->with(compact('meta'));
    } 
	
	public function processes(){  
        $meta =  meta('processes');
        return view('front.pages.aboutus.processes')->with(compact('meta'));
    } 
    
	public function sustainability(){  
        $meta =  meta('processes');
        return view('front.pages.aboutus.sustainability')->with(compact('meta'));
    } 
	  
	public function virtualtour(){  
        $meta =  meta('virtual-tour');
        return view('front.pages.aboutus.virtual-tour')->with(compact('meta'));
    } 
	   
	public function forestvideo(){  
        $meta =  meta('forest-video');
        return view('front.pages.aboutus.forest-video')->with(compact('meta'));
    }   
    public function contactus(){  
        $meta =  meta('contact-us');
		$cartitems = Cart::cartitems(); 
        return view('front.pages.contactus.contactus')->with(compact('meta','cartitems'));
    }   
	public function privacypolicy(){  
        $meta =  meta('contact-us');
        return view('front.pages.cms.privacy-policy')->with(compact('meta'));
    }  
	
	public function termsconditions(){  
        $meta =  meta('terms-and-conditions');
        return view('front.pages.cms.terms-and-conditions')->with(compact('meta'));
    }  
	
	public function addSubscriber(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                   'email' => 'required|string|regex:/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i|max:255|unique:subscribers',
                ],
                [
					'email.required' => 'Enter the email address.',
					'email.regex' => 'This email is not a valid email address.',
					'email.unique' => 'This email is already in our subscription list!.'
				]
            );

            if($validator->passes()) {
                $subscriber = new Subscriber;
				$subscriber->email = $data['email'];
				$subscriber->save();
				Mails::subscriber_mail($data['email']); 
				return response()->json([  'status' => true, 'message' =>'Thank you for subscribing! Stay tuned for updates and offers.']);
            }else{
				$message = '';
				$errors = $validator->messages();
				$errors = json_decode(json_encode($errors), true);
				foreach($errors as $err){
					$message = $err[0];
				}
                return response()->json([ 'status' => false, 'message' => 'Invalid email format!','message' =>$message]);
			}
            
        }
    }
	
	   public function saveContact(Request $request) {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'message' => 'required'
            ], [
                'email.email' => 'This email is not a valid email address'
            ]);

             if ($validator->passes()) {
				$contact = new Contact;
				$contact->name = $request->name;
				$contact->email = $request->email;
				$contact->message = $request->message;
				$contact->save();
				$contact_id = $contact->id;
                
				$cartitems = Cart::cartitems(); 
				foreach($cartitems as $cartitem){
					$product_enquiry = new ProductEnquiry;
					$product_enquiry->contact_id =$contact_id;
					$product_enquiry->product_id =$cartitem['product_id'];
					$product_enquiry->save();
			    }
				
				
				if (env('MAIL_MODE') == "live") {
					Mails::contact_mail($contact->id);
				}
                if(Session::has('cart_session_id')){ 
				     Cart::where('sessionID',Session::get('cart_session_id'))->delete();
				}
				return response()->json([ 'status' => true, 'message' => 'Your details has been submitted successfully. We will get back to you soon.']);
				
            }else{
				return response()->json(['status' => false,'type' => 'validation','errors' => $validator->messages() ]); 
           
             }  
               
                
           
        
        }
    }

	 
	public function checkVistor() {
        $ip = $_SERVER['REMOTE_ADDR']; 
        $checkVisitor = Visitor::where('user_ip',$ip)->count();
        if(empty($checkVisitor)){
            $user_ip_address_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
			$visitor = new Visitor;
			if(!empty($user_ip_address_info)){
				$user_ip_address_info_array = [];
				foreach($user_ip_address_info as $key=>$info){
					$user_ip_address_info_array[$key] = $info;
				}
				$visitor->user_info = json_encode($user_ip_address_info_array);
			}
			
			
            $visitor->user_ip  = $ip;
            $visitor->visit_date = date('Y-m-d');
            $visitor->save();
        }
    }
	  
	
	
}
