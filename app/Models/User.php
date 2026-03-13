<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Session;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'mobile',
        'email',
        'password',
        'credit',
        'remember_token',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function info($cart_session_id=null){
        if(Auth::check()){
            //for Website
            $data['user_id'] = Auth::user()->id;
            $data['user_details'] = Auth::user();
        }/*else if(Auth::guard('api')->check()){
            //for Apis
            $data['user_id'] = Auth::guard('api')->user()->id;
            $data['user_details'] = Auth::guard('api')->user();
        }*/else{
            if(isset($cart_session_id) && !empty($cart_session_id)){
                //it will come only in case of Apis
                $data['cart_session_id'] = $cart_session_id;
            }else if(!Session::has('cartsessionId')){
                //it will come only in case of Website 
                $session_id = Session::getId();
                Session::put('cartsessionId',$session_id);
                $data['cart_session_id'] = $session_id;
            }else{
                $data['cart_session_id'] = Session::get('cartsessionId');
            }
        }
        return $data;
    }

    public static function signup_types(){
        $signup_types = [
                          'professional'=>'Professionals Signup',
                          'member'=>'Members Signup',
                          'channel-partner'=>'Channel Partner Signup',
                          'developers'=>'Developers Signup',
                          'other'=>'Others Signup',
                          'project-enquire'=>'Project Enquire',
                       ];
         return $signup_types;
       }
     

    public static function get_signup_type($type){ 
	     $signup_types = User::signup_types();
		 return @$signup_types[@$type]; 
	}


    public static function signup_mail($id=''){
		 if(env('MAIL_MODE') == 'live'){
			  $user = User::select('id','name','email','mobile','signup_type')->where('id',$id)->first();
			  $user = json_decode(json_encode($user)); 
			  $user->signup_type = User::get_signup_type($user->signup_type);
			   
			   
			   $websettings = WebSetting::settings(); 
			   $to_emails = $websettings['admin_emails'];   
			   $bcc_emails = []; //$websettings['admin_bcc_emails']; 
			   $messageData = [
				'data' => $user,
				'websettings' => $websettings,
			   ];
              $user_email = $user->email;
			  
            $messageData = json_decode(json_encode($messageData),true); 
			 
			 try {
				 Mail::send('emails.admin.signup_enquiry', $messageData, function($message) use ($to_emails,$bcc_emails){
					$message->to($to_emails)
					->subject('Hi Admin,You have received a new signup enquiry through the '.config('constants.project_name').'. Date '.date('d-m-Y'))
					->bcc($bcc_emails);
				});  
			
			} catch(\Exception $e) {
                 
            }
			
			
			
			 try {
				Mail::send('emails.user.thanks_mail', $messageData, function($message) use ($user_email){
					$message->to($user_email)
					->subject('Thank You for Your Interest in Estateqor.com!');
				});
			} catch(\Exception $e) {
                 
            }
			
			
		 }
		  
	 }		 
	 
	 
	 
	 public static function reset_password_mail($email='',$password){ 
	     if(env('MAIL_MODE') == 'live'){
			 $user = User::where('email',$email)->first();
			 $websettings = WebSetting::settings(); 
			 $messageData = [
				'data' => $user,
				'password' => $password,
				'websettings' => $websettings,
			   ];
			try {   
				 Mail::send('emails.user.reset-password', $messageData, function($message) use ($email){
					
					$message->to($email)->subject(config('constants.project_name').' Password Changed successfully!');
				 });
			} catch(\Exception $e) {
                 
            }
	    }
	 }
	 
	 
	 
	 public static function payment_success_mail($id,$form_type){
		 
		  if(env('MAIL_MODE') == 'live'){
		 
		   $plan = [];
		   $razorpay_payment_id = '';
		
			
			if($form_type == 'service'){
				$form_data = ServiceForm::where('id',$id)->first(); 
				if(!empty($form_data)){
					$razorpay_payment_id = $form_data->razorpay_payment_id;
					$plan = Plan::where('id',$form_data->plan_id)->first();
					 
				}
			}else if($form_type == 'user'){
				$form_data = User::where('id',$id)->first(); 
				if(!empty($form_data)){
					$razorpay_payment_id = $form_data->razorpay_payment_id;
					$plan = Plan::where('id',$form_data->plan_id)->first();
					 
				}
			}
		
		
		    if(!empty($plan) && !empty($razorpay_payment_id)){
			  
				$websettings = WebSetting::settings(); 
				$to_emails = $websettings['admin_emails'];   
				$bcc_emails = []; 
				$messageData = [
					'razorpay_payment_id' => $razorpay_payment_id,
					'plan' => $plan,
					'websettings' => $websettings,
				];
				$user_email = $form_data->email;
				$messageData = json_decode(json_encode($messageData),true);  
				
				try {
							Mail::send('emails.user.payment_success', $messageData, function($message) use ($user_email){
								$message->to($user_email)
								->subject('Payment Confirmation from '.config('constants.project_name'));

							}); 
                 } catch(\Exception $e) {
                 
                  }


				
		    }
			
			
		 }
		 
		 
		 
		 
		 
		 
		 
	 }
	 
	 
	 
     public static function getUserDetails($user_id){
     }







}
