<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function enquiry_products(){
    	return $this->hasMany('App\Models\ProductEnquiry','contact_id')->with('product')->select('product_enquiries.id','product_enquiries.contact_id','product_enquiries.product_id');
    }
	
}
