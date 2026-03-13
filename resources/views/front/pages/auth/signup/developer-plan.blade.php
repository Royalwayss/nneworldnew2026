@extends('front.layout.layout')
@section('content') 
<style>.pricing-single-items.style_two {height: 830px!important;  }</style>
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url({{ asset('front/assets/images/banner-forms.jpg') }});">
	</div>
	<div class="shape-box"></div>
	<div class="container">
		<div id="form-error-message"></div>
		<div class="row">
			<div class="col-xl-12">
				<div class="inner-content">

					<div class="breadcrumb-menu">
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li class="active">Plans</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Plans</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-style2-area">
	<div class="container-fluid plans-main-space">
		<form id="planform">@csrf
		<div class="row">
		@include('front.pages.services.mode-of-payment')
		       <div class="col-6 col-md-6 col-lg-4 mb-3" id="payment_receipt_status" style="display:none">
						<div class="form-group">
							<label for="payment_receipt">Payment Receipt</label>
							<input type="file" class="form-control" name="payment_receipt" id="payment_receipt">
						    @php echo from_input_error_message('payment_receipt') @endphp
						</div>
				</div>
								
		</div>
		<div class="row">
			@foreach($plans as $plan)
			<div class="col-12 col-md-6 col-lg-6 col-xl-3 plans-bg-color">
				<div class="pricing-single-items style_two ">
				<div class="alb-date">{{ $plan['discount_percentage'] }}% OFF</div>
					<div class="pricing_inner">
						<div class="pricing-title">
							<h3>{{ strtoupper($plan['plan_name']) }} PLAN</h3>
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="pricing-item-text">
										<span class="currency">₹</span>
										<span class="tk">{{ $plan['price'] }}</span>
									</div>
								</div>
								<div class="col-12 col-md-6 offers-main mt-4">
									<div class="cut-price-main">
								<div class="line"></div>
									<div class="pricing-item-text-cut-value">
										<span class="currency-1">₹</span>
										<span class="tk-1">{{ $plan['mrp_price'] }}</span>

									</div>
								</div>
								</div>
							</div>
							<span class="validity-color">Validity ({{ $plan['validity_in_month'] }} month)</span>
							<div class="package-heading">
						<h6>Package Includes</h6>
					</div>
						</div>
					</div>
					<div class="pricing-body ">
						<div class="pricing-feature">
							@php  echo $plan['description']; @endphp
						</div>
					</div>
					
					<div class="consalt_btn style_two  button-plans">
						<a  href="javascript:;" class="plan-purchase-now" data-href="{{ route('savedeveloperplan',[$plan['id']]) }}">Purchase Now<span></span></a>
					</div>
				</div>
			</div>
			
			@endforeach
		</div>
		</form>
	</div>
</section>

<section class="slogan-style2-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="slogan-style2-content">
					<div class="title">
						<h2>We’re Delivering the Best<br> Customer Experience</h2>
					</div>
					<div class="button-box">
						<a class="btn-one" href="{{ route('contactus') }}"><span class="txt">Join Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service Details area -->
<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
  $(".plan-purchase-now").click(function() { 
	 var url = $(this).attr('data-href');
	 $('#planform').attr('data-action',url);
	 $('#planform').submit();
	 
  });
  
  $('#mode_of_payment').change(function() {
      var selectedValue = $(this).val(); 
	  if(selectedValue == 'UPI'){
		  $("#payment_receipt_status").show();
	  }else{
		  $("#payment_receipt_status").hide();
	  }
  });
  
   $(document).on("submit", "form", function(e){ 
        e.preventDefault();		 
		$('.loadingDiv').show();
		var action_url = $('#planform').attr('data-action'); 
		$.ajax({
				 url: action_url,
				 type:'POST',
				 dataType: "JSON",
				 data: new FormData(this),
				 processData: false,
				 contentType: false,
			success:function(resp){
		    	 $('.loadingDiv').hide();
				 if(!resp.status){
					            
								
								$('.error_message').empty(); 
								$.each(resp.error_messages, function (i, error) { 
								
										$('#input-error-'+i).attr('style', 'color:red'); 
										$('#input-error-'+i).html(error);
										
										var scrollPos =  $("#form-error-message").offset().top;
										$(window).scrollTop(scrollPos);
										
																		
								}); 
					      
				 }else{
					   $('#planform')[0].reset();
					   window.location.href=resp.redirect_url;
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				
		    }	
		});
	
	
	});


  
  
  
  
  
  
  
});
function getmode(mode) {
		const sections = document.querySelectorAll('.payment-detail');
		sections.forEach(sec => sec.style.display = 'none');

		if (mode) {
			const selected = document.getElementById(mode);
			if (selected) selected.style.display = 'block';
		}
	}
	
</script>
@endsection
