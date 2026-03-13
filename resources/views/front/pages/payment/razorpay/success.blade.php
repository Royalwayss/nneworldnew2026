@extends('front.layout.layout')
@section('content') 
<style>
   .thanks-section{ margin-top:80px;text-align:center; }
   .thanks-section p{ text-align:center; }
   .thanks-section table {
   width:50%;
   margin: 0 auto;
   margin-bottom:100px;
   border-collapse: collapse;
   text-align:center!important;
   }
   .thanks-section td, th {
   border: 1px solid #dddddd;
   text-align: center;
   padding: 3px;
   }
   .thanks-section tr:nth-child(even) {
   background-color: #dddddd;
   }
   #plan_details{ text-align:center!important; }
</style>
<section class="service-details-area thanks-section pb-0">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 order-box-1">
            <div class="service-details__content">
               <div class="text-box1 services-heading mt-5">
                  <h2 class="mt-5">Thank you! Your payment was successful.<br>We’ve got your plan details and our team will connect with you shortly. Stay tuned!</h2>
                
			   </div>
			   
                <div id="plan_details">
                  <table style="">
                     <tr>
                        <th colspan="2">Payment Details:</th>
                     </tr>
					 <tr>
                        <th>Payment ID</th>
                        <td>{{ $razorpay_payment_id }}</td>
                     </tr>
                     
					 @if($form_type != 'advertise')
					 <tr>
                        <th>Plan Name</th>
                        <td>{{ $plan->plan_name }}</td>
                     </tr>
                     <tr>
                        <th>Plan Price</th>
                        <td>Rs. {{ $plan->price }}</td>
                     </tr>
					 @else
					<tr>
                        <th>Amount</th>
                        <td>{{ $form_data->pay_amount }}</td>
                     </tr>
					 @endif
					  @if($form_type != 'advertise')
                     <tr>
                        <th>Validity</th>
                        <td>{{ $plan->validity_in_month }} @if($plan->validity_in_month !=1) Months @else Month @endif</td>
                     </tr>
					 @else
					<tr>
                        <th>Validity</th>
                        <td>{{ $form_data->advertisement_period }}</td>
                     </tr>
					 @endif
                   <?php /*  <tr>
                        <th>Plan Start Date</th>
                        <td>{{ date("M-d-Y", strtotime($plan->plan_start_date))}}</td>
                     </tr>
                     <tr>
                        <th>Plan End Date</th>
                        <td>{{ date("M-d-Y", strtotime($plan->plan_end_date))}}</td>
                     </tr> */ ?>
                  </table> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php 
Session::forget('razorpay_order_id');
Session::forget('payment_formtype');
?>
@endsection