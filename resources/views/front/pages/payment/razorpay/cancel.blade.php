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
      <div class="row ">
         <div class="col-xl-12 col-lg-12 order-box-1">
            <div class="service-details__content">
               <div class="text-box1 services-heading mt-5">
                  <h2 class="mt-5" style="color:red!important">Your Plan has been Cancelled!</h2>
                   <p>Payment has not been made and your Plan has been cancelled.</p>
               </div>
			   </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection