@extends('front.layout.layout')
@section('content')

<section class="breadcrumb-area">
  <div class="breadcrumb-area-bg" style="background-image: url(front/assets/images/banner-forms.jpg);">
  </div>
  <div class="shape-box"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="inner-content">

          <div class="breadcrumb-menu">
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li class="active">Enquire Now</li>
            </ul>
          </div>
          <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Enquire Now</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="main-contact-form-area">
  <div class="container">
    <div class="sec-title text-center">
      <div class="sub-title">
        <div class="border-box"></div>
        <h3>Forms</h3>
      </div>
      <h2>Enquire Form</h2>
    </div>
	<div class="forms-main-bg">
			<form id="enquire_form" data-action="{{ route('saveenquire') }}">@csrf
				<div class="row">
					<div class="col-12 text-center">
						<!-- <div class="heading-forms">
							Join us
						</div> -->
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="validationDefault01">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							@php echo from_input_error_message('name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="contact_no">Contact Number</label>
							<input type="number" class="form-control" name="contact_no"  id="contact_no" placeholder="Contact Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						    @php echo from_input_error_message('email') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8 mb-4">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
						    @php echo from_input_error_message('address') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="country">Country</label>
							<select id="country" name="country" class="form-control searchselect" onchange="get_state_city('1')">
								<option value="" selected>Choose...</option>
							    @foreach($countries as $country)
								<option data-id="{{ $country['id'] }}" value="{{ $country['name'] }}">{{ $country['name'] }}</option>
								@endforeach
							</select>
							@php echo from_input_error_message('country') @endphp
						</div>
					</div> 
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="state">State</label>
							<select class="form-control searchselect" name="state" id="state" onchange="get_state_city('2')">
							</select>
							@php echo from_input_error_message('state') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="city">City</label>
							<select class="form-control searchselect" name="city" id="city">
							</select>
							@php echo from_input_error_message('city') @endphp
						</div>
					</div>
					
					
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
								placeholder="Enter Amount">
							@php echo from_input_error_message('budget') @endphp
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
					<div class="col-12 col-md-6 col-lg-6 mb-4">
						<div class="form-group">
							<label for="documents">Attach Documents (Aadhaar or Voting card)</label>
							<input type="file" class="form-control-file" name="documents[]" id="documents" multiple>
							@php echo from_input_error_message('documents') @endphp
						</div>
					</div>
					

					<!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div> -->

					<!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="inputZip">Pincode</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
					</div>
					 -->

					<!-- 					
					<div class="col-12 col-md-6 col-lg-6 mb-3">
						<div class="form-group">
							<label for="price">Listing Fees by:-</label>
							<select style="padding:12px; margin-left:4px; float:left; margin-bottom:10px; width:100%;"
								name="pmode" onchange="getmode(this.value)">
								<option value="">Select Mode of Payment</option>
								<option value="cash">Cash</option>
								<option value="cheque">Cheque</option>
								<option value="CBD">Cash Deposit to Bank</option>
								<option value="NEFT">NEFT / Online Bank Transfer</option>

							</select>
							<div class="col-md-12 payment-detail" id="cash">
								<h3>FOR CASH PAYMENT</h3>
								<blockquote style="line-height:30px;">Please Visit our offcie at:-<br>
									HELLO PROFESSIONALS SERVICES PRIVATE LIMITED <br>
									Branch: 2nd Floor, Nathu Ram Jewelers Complex,
									Opposite Pindi Bags, Near Pavilion Mall, Civil Lines,
									Ludhiana, Punjab, 141001
									<p></p>
								</blockquote>
							</div>
							<div class="col-md-12 payment-detail" id="cheque">
								<h3>FOR PAYMENT BY CHEQUE</h3>
								<blockquote style="line-height:30px;">Make Cheque <br> on the Name of: <b>HELLO
										PROFESSIONALS SERVICES PRIVATE LIMITED</b> <br>And Send Cheque to Following
									Address
									with your details:-<br>
									ACCOUNT NUMBER: 088005500483 <br>
									ACCOUNT TYPE: CURRENT ACCOUNT<br>
									BANK NAME: ICICI BANK <br>
									IFSC CODE: ICIC0000880 <br>
									Branch: 2nd Floor, Nathu Ram Jewelers Complex,
									Opposite Pindi Bags, Near Pavilion Mall, Civil Lines,
									Ludhiana, Punjab, 141001
									<p></p>
								</blockquote>
							</div>
							<div class="col-md-12 payment-detail" id="CBD">
								<h3>FOR PAYMENT BY CASH DEPOSIT</h3>
								<blockquote style="line-height:30px;">ACCOUNT NAME: <b>HELLO PROFESSIONALS SERVICES
										PRIVATE
										LIMITED</b> <br>
									ACCOUNT NUMBER: 088005500483 <br>
									ACCOUNT TYPE: CURRENT ACCOUNT<br>
									BANK NAME: ICICI BANK <br>
									BRANCH NAME:KITCHLU NAGAR, LUDHIANA<br>
									IFSC CODE:ICIC0000880 <br>
									<p></p>
								</blockquote>
							</div>
							<div class="col-md-12 payment-detail" id="NEFT">
								<p>
								</p>
								<h3>FOR PAYMENT BY NEFT / Online Banking</h3>
								<blockquote style="line-height:30px;">ACCOUNT NAME: <b>HELLO PROFESSIONALS SERVICES
										PRIVATE
										LIMITED</b> <br>
									ACCOUNT NUMBER: 088005500483 <br>
									ACCOUNT TYPE: CURRENT ACCOUNT<br>
									BANK NAME: ICICI BANK <br>
									BRANCH NAME:KITCHLU NAGAR, LUDHIANA<br>
									IFSC CODE:ICIC0000880 <br>
									<p></p>
								</blockquote>
							</div>
						</div>

					</div> -->



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
	 
	 $(document).on("submit", "form", function(e){ 
        e.preventDefault();		 
		$('.loadingDiv').show();
		$('#enquire_form button').prop('disabled', true);
		$('#enquire_form button').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...!');
		var action_url = $('#enquire_form').attr('data-action');
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
								//$('#service_form input').attr('style', 'border-color:');
								//$('#service_form select').attr('style', 'border-color:');
								$.each(resp.error_messages, function (i, error) { 
									err_no = err_no + 1; 
									$('#input-error-'+i).attr('style', 'color:red'); 
									$('#input-error-'+i).html(error);
									//$('#'+i).attr('style', 'border-color:red!important'); 
									if(err_no == 1) {  
										   $("#"+i).filter(':visible').focus();
									} 
																		
								}); 
					           $('#enquire_form button').prop('disabled', false);
					           $('#enquire_form button').html('Submit');
				 }else{
					   
						   $('.error_message').empty(); 
						   $('#enquire_form')[0].reset();
						   $('#enquire_form button').prop('disabled', false);
						   $('#enquire_form button').html('Submit');
					       $('#result-modal-content').html(resp.message);
					       $('#ResultModal').modal('show');
					      
					   
					   
					   
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#enquire_form button').prop('disabled', false);
			    $('#enquire_form button').html('Submit');
		    }	
		});
	
	
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

@endsection