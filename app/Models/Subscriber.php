<?php
namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Validator;

class Subscriber extends Model{
	
   
    protected $table = 'subscribers';
	
	public static function subscriber_mail($id=''){
		 if(env('MAIL_MODE') == 'live'){
			  $subscriber = Subscriber::where('id',$id)->first();
			  $subscriber = json_decode(json_encode($subscriber));  
			   $websettings = WebSetting::settings(); 
			   $to_emails = $websettings['admin_emails'];   
			   $bcc_emails = []; //$websettings['admin_bcc_emails']; 
			   $messageData = [
				'data' => $subscriber,
				'websettings' => $websettings,
			   ];

			  
            $messageData = json_decode(json_encode($messageData),true); 
			
			try {
				Mail::send('emails.admin.newsletter_email', $messageData, function($message) use ($to_emails,$bcc_emails){
					$message->to($to_emails)
					->subject('Hi Admin,You have received a new  newsletter enquiry through the '.config('constants.project_name').'. Date '.date('d-m-Y'))
					->bcc($bcc_emails);
				}); 
			} catch(\Exception $e) {
                 
            }
			
			
		 }
		  
	 }		 
}
