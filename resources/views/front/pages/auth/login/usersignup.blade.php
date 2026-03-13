@extends('front.layout.layout')
@section('content') 
<style>
.red_btn{color: #FFFFFF;background-color: #d84a38;}
	.select2-selection__rendered{
		display: block;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 0px, rgba(0, 0, 0, 0.24) 0px 2px 1px;
    height: calc(2px + 2.25rem);
    font-weight: 400;
    line-height: 1.5;
    color: rgb(73, 80, 87);
    background-color: rgb(255, 255, 255) !important;
    padding: 0.375rem 0.75rem;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(225, 225, 225);
    border-image: initial;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	}
</style>
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url({{ asset('front/assets/images/banner-forms.jpg') }});">
	</div>
	<div class="shape-box"></div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="inner-content">

					<div class="breadcrumb-menu">
						<ul>
							<li><a href="{{ url('home') }}">Home</a></li>
							<li class="active"></li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Signup</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="main-contact-form-area">
	<div class="container">
		<div class="forms-main-bg">
		    <form action="javascript:;" id="signup_form" data-action="">@csrf
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading-forms">
							Join us
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							@php echo from_input_error_message('name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="contact_no">Contact Number</label>
							<input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email">
							@php echo from_input_error_message('email') @endphp
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-8 mb-4">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
							@php echo from_input_error_message('address') @endphp
						</div>
					</div>
					
					
					@include('front.pages.services.country_drop_down')
										
					
					
					
					
					
					<?php /*
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" name="country" id="country">
							@php echo from_input_error_message('country') @endphp
						</div>
					</div> */ ?>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="categ">Property Category</label>
							<select id="property_category" name="property_category" id="property_category" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="House">House</option>
								<option value="Plot">Plot</option>
								<option value="Flat">Flat</option>
								<option value="SCO">SCO</option>
								<option value="Shop">Shop</option>
								<option value="Leased Branded Showroom">Leased Branded Showroom</option>
								<option value="Office Space">Office Space</option>
								<option value="Industrial Plot">Industrial Plot</option>
								<option value="Factory">Factory</option>
								<option value="Agriculture land">Agriculture land</option>
								<option value="Bank Auction Property">Bank Auction Property</option>
								<option value="Others">Others</option>
							</select>
							@php echo from_input_error_message('property_category') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="resident_status">Resident status</label>
							<select  name="resident_status"  id="resident_status" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Resident">Resident</option>
								<option value="NRI">NRI</option>
							</select>
							@php echo from_input_error_message('resident_status') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="purpose_of_buy">Purpose of Buy/Rent</label>
							<select name="purpose_of_buy" id="purpose_of_buy" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Investment">Investment</option>
								<option value="Self occupied">Self occupied</option>
								<option value="Rent">Rent</option>
							</select>
							@php echo from_input_error_message('purpose_of_buy') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="property_area">Property Area in sq yds</label>
							<input type="number" class="form-control" id="property_area" name="property_area" min="0">
						    @php echo from_input_error_message('property_area') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8 mb-4">
						<div class="form-group ">
							<label for="validationDefault01">Preferred Location</label>
							<input type="text" class="form-control" id="preferred_location" name="preferred_location"
								placeholder="Preferred Location">
								 @php echo from_input_error_message('preferred_location') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="budget">Budget (₹):</label>
							<input type="number" class="form-control" id="budget" name="budget"
								placeholder="Enter amount">
							@php echo from_input_error_message('budget') @endphp
						</div>
					</div>
					<!-- <div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="Details">Details</label>
							<input type="details" class="form-control" id="details" placeholder="Details">
						</div>
					</div> -->
					<div class="col-12 col-md-6 col-lg-6 mb-4">
						<div class="form-group">
							<label for="address_proof"><label for="documents">Attach Document(Max 600 KB, Accept:jpg,jpeg,png,pdf)</label></label>
							<input type="file" class="form-control-file" name="address_proof" id="address_proof">
							@php echo from_input_error_message('address_proof') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group ">
							<label for="message">Details</label>
							<div class="input-box">
								<textarea  class="w-100 inner-details" name="message" id="message" 
									placeholder="" ></textarea>
							     @php echo from_input_error_message('message') @endphp
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						   @php echo from_input_error_message('password') @endphp
						</div>
					</div> 


					<div class="col-12 col-md-10 col-lg-10 forms-inner-para">
						<div class="checked-box1">
							<input type="checkbox" name="terms" id="terms" >
							<label for="terms">
								<span></span>I accept the Terms & Conditions.
							</label>
							@php echo from_input_error_message('terms') @endphp
						</div>
					</div>

					
					<!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="inputZip">Pincode</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
					</div>
					 -->




					<div class="col-12 col-md-12 col-lg-12 my-3 text-center">
						<div class="forms-buttons">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>


			</form>
		
		</div>
	</div>
</section>



<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
 $(document).ready(function(){
    $('.searchselect').niceSelect('destroy');
	$('#country').select2();
	$('#state').select2();
	 
	 $(document).on("submit", "form", function(e){
        e.preventDefault();		 
		$('.loadingDiv').show();
		$('#signup_form button').prop('disabled', true);
		$('#signup_form button').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...!');
		var action_url = $('#signup_form').attr('data-action');
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
					            $(".errMsg-owners").html('');
								var err_no = 0;
								$('.error_message').empty(); 
								//$('#signup_form input').attr('style', 'border-color:');
								//$('#signup_form select').attr('style', 'border-color:');
								$.each(resp.error_messages, function (i, error) { 
									err_no = err_no + 1; 
									
									
									
									$('#input-error-'+i).attr('style', 'color:red'); 
									$('#input-error-'+i).html(error);
									//$('#'+i).attr('style', 'border-color:red!important'); 
									if(err_no == 1) { 
										   $("#"+i).filter(':visible').focus();
									} 
																		
								}); 
					           $('#signup_form button').prop('disabled', false);
					           $('#signup_form button').html('Submit');
				 }else{
					   $('#signup_form')[0].reset();
					   $('#signup_form button').prop('disabled', false);
					   $('#signup_form button').html('Submit');
					   window.location.href=resp.url;
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#signup_form button').prop('disabled', false);
			    $('#signup_form button').html('Submit');
		    }	
		});
	
	
	});


    
    jQuery("#addOwnerRow").click(function() {        
        var row = jQuery('.owneramplerow tr').clone(true);
        row.appendTo('#owneramplerow'); 
        update_owner();		
    });
 });   
    function owner_row_remove(thisTr){
      $(thisTr).parents("tr").remove();
      update_owner();	  
	}
	
    function update_owner(){
		$(".owners").each(function(index) {
           $(this).attr('Placeholder','owner '+(parseInt(index)+parseInt('1')));
		});
	}
	function getmode(mode) {
		const sections = document.querySelectorAll('.payment-detail');
		sections.forEach(sec => sec.style.display = 'none');

		if (mode) {
			const selected = document.getElementById(mode);
			if (selected) selected.style.display = 'block';
		}
	}
	
function get_state_city(action){
	     $('.loadingDiv').show();
		var country = $('#country').find(":selected").attr("data-id"); 
		var state = $('#state').find(":selected").attr("data-id"); 
	    $.ajax({
				 
                 headers: {
		        'X-CSRF-TOKEN': '{{ csrf_token() }}'
		        },
				 url: "{{ route('get_state_city') }}",
				 type:'POST',
				
				 data: { country:country,state:state,action:action },
				 
			     success:function(resp){ 
		    	 $('.loadingDiv').hide();
				 if(resp.status == true){
					         if(action =='1'){ 
								 $('#state').select2();
								 $("#state").html(resp.result.state_html);
								 $("#city").html('');
							 }

                             if(action =='2'){ 
								 $('#city').select2();
								 $("#city").html(resp.result.city_html);
							 }								 
										
				 }else{
					  
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				
		    }	
		});
	
	
	
}	
</script>
<!--End Service Details area -->
@endsection