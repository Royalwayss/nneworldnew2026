<?php
namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\WebSetting;
use App\Models\Order;
use App\Models\Contact;
use App\Models\CustomFit;
use App\Models\ReturnHistory;
use Auth;

class Mails extends Model{

	
	public static function contact_mail($id){
	        if(env('MAIL_MODE') == "live"){
                    $websettings = WebSetting::settings(); 
				    $contact = Contact::with('enquiry_products')->where('id',$id)->first();  
					$contact = json_decode(json_encode($contact), true);
					$emails = $websettings['admin_emails']; 
					$bcc = $websettings['admin_bcc_emails'];  
					$messageData = [
						'data' => $contact,
						'websettings' => $websettings
					];
					Mail::send('emails.contact-email', $messageData, function ($message) use ($emails,$bcc) {
						$message->to($emails)->bcc($bcc)->subject('Contact Us Information Received from '.config('constants.project_name').' Date -'.date('d-m-Y'));
					});
				
                } 
	
	}
	public static function subscriber_mail($user_email){
	        if(env('MAIL_MODE') == "live"){
                   $websettings = WebSetting::settings(); 
					$emails = $websettings['admin_emails']; 
					$bcc = $websettings['admin_bcc_emails'];  
					$messageData = [
						'user_email' => $user_email,
						'websettings' => $websettings
					];
					Mail::send('emails.subscriber-email', $messageData, function ($message) use ($emails,$bcc) {
						$message->to($emails)->bcc($bcc)->subject('Newsletter enquiry has been Received from '.config('constants.project_name').' Date -'.date('d-m-Y'));
					});
				
                } 
	
	}
	
	
	
	
	
	public static function customfit_mail($id){
	        if(env('MAIL_MODE') == "live"){
                  $websettings = WebSetting::settings(); 
				    $customfit = CustomFit::where('id',$id)->first();  
				    $product = Product::select('id','product_name','product_url')->with('product_image')->where('id',$customfit->product_id)->first();  
					$product = json_decode(json_encode($product),true); 
					$emails = $websettings['admin_emails']; 
					$bcc = $websettings['admin_bcc_emails'];  
					$messageData = [
						'data' => $customfit,
						'product' => $product,
						'websettings' => $websettings
					]; //pd($product);
					Mail::send('emails.custom-fit', $messageData, function ($message) use ($emails,$bcc) {
						$message->to($emails)->bcc($bcc)->subject('Custome Fit Information Received from '.config('constants.project_name').' Date -'.date('d-m-Y'));
					});
				
                } 
	
	}
	
}
