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
                  <h2 class="mt-5">Thank you! We’ve got your plan details and our team will connect with you shortly. Stay tuned!</h2>
                   @php /* <p>You have successfully purchased the {{ $plan->plan_name }} Plan.<br>Thank you for choosing our service!</p>
                  <p><strong>Your plan details are below:</strong></p> */ @endphp
               </div>
               @php /* <div id="plan_details">
                  <table style="">
                     <tr>
                        <th>Service</th>
                        <td>
						@if(!empty($parent_service)) {{ $parent_service->name }} / @endif {{ $form_details->service_name }}
						</td>
                     </tr>
                     <tr>
                        <th>Mode of Payment</th>
                        <td>{{ $form_details->mode_of_payment }}</td>
                     </tr>
                     <tr>
                        <th>Plan Name</th>
                        <td>{{ $plan->plan_name }}</td>
                     </tr>
                     <tr>
                        <th>Plan Price</th>
                        <td>Rs. {{ $plan->price }}</td>
                     </tr>
                     <tr>
                        <th>Validity</th>
                        <td>{{ $plan->validity_in_month }} @if($plan->validity_in_month !=1) Months @else Month @endif</td>
                     </tr>
                     <tr>
                        <th>Plan Start Date</th>
                        <td>{{ date("M-d-Y", strtotime($plan->plan_start_date))}}</td>
                     </tr>
                     <tr>
                        <th>Plan End Date</th>
                        <td>{{ date("M-d-Y", strtotime($plan->plan_end_date))}}</td>
                     </tr>
                  </table> */ @endphp
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection