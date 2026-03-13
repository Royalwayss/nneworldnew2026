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
							<li class="active">Advertisement With Us</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Advertisement With Us</h2>
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
			<h2> Signup</h2>
		</div>
		<div class="forms-main-bg">
  <form id="signup_form" action="javascript:;" data-action="{{ route('saveadvertisementenquire') }}">@csrf
    <div class="row">
      <!-- Name of Authorised Person -->
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="form-group">
          <label for="name">Name of Authorised Person</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
		  @php echo from_input_error_message('name') @endphp
        </div>
      </div>

      <!-- Contact -->
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="form-group">
          <label for="contact_no">Contact</label>
          <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Enter contact number">
		  @php echo from_input_error_message('contact_no') @endphp
        </div>
      </div>

      <!-- Email -->
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
		  @php echo from_input_error_message('email') @endphp
        </div>
      </div>

      <!-- Address -->
      <div class="col-12 col-md-12 col-lg-8 mb-3">
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Enter full address">
		  @php echo from_input_error_message('address') @endphp
        </div>
      </div>

     @include('front.pages.services.country_drop_down')
					
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
							<label for="nature_of_business">Nature of Business/Project</label>
							<input type="text" class="form-control" name="nature_of_business" id="nature_of_business" placeholder="Nature of Business">
						    @php echo from_input_error_message('nature_of_business') @endphp
						</div>
					</div>

      <!-- Firm/Company/Institute Name -->
      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="firm_name">Firm/Company/Institute Name</label>
          <input type="text" class="form-control" name="firm_name" id="firm_name" placeholder="Enter name">
		   @php echo from_input_error_message('firm_name') @endphp
        </div>
      </div>

      <!-- Brand/Project Name -->
      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="project_name">Brand/Project Name</label>
          <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Enter brand or project">
          @php echo from_input_error_message('project_name') @endphp
		</div>
      </div>

      <!-- Business Category -->
      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="business_category">Business Category</label>
          <input type="text" class="form-control" name="business_category" id="business_category" placeholder="e.g., Textile, Construction">
          @php echo from_input_error_message('business_category') @endphp
		</div>
      </div>

      <!-- Advertisement Period -->
      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="advertisement_period">Advertisement Period</label>
          <select id="advertisement_period" name="advertisement_period" class="form-control">
            <option value="" selected >Choose...</option>
            <option value="1 month">1 month</option>
            <option value="4 months">4 months</option>
            <option value="6 months">6 months</option>
            <option value="9 months">9 months</option>
            <option value="12 months">12 months</option>
          </select>
		  @php echo from_input_error_message('advertisement_period') @endphp
        </div>
      </div>

      <!-- Details -->
      <div class="col-12 mb-3">
        <div class="form-group">
          <label for="details">Details</label>
          <textarea class="form-control" name="message" id="message" rows="4" placeholder="Provide additional details..."></textarea>
         @php echo from_input_error_message('message') @endphp
		</div>
      </div>

      <?php /*
      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="images">Attach Images (4 max)</label>
          <input type="file" class="form-control-file" name="images[]" id="images" multiple accept="image/*">
		  @php echo from_input_error_message('images') @endphp
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="video">Attach Small Video</label>
          <input type="file" class="form-control-file" name="video" id="video" accept="video/*">
		  @php echo from_input_error_message('video') @endphp
        </div>
      </div> */ ?>
     
	 
	 
	  
	  <div class="col-12 col-md-12 col-lg-12 mb-3">
        <div class="form-group">
          <label for="transfer_link">Transfer Link (Please send the media and videos via we transfer link)</label>
          <input type="text" class="form-control" name="transfer_link" id="transfer_link" placeholder="Enter the transfer link">
          @php echo from_input_error_message('transfer_link') @endphp
		</div>
      </div>
	  
	  
	  
	  
	  
	   <div class="col-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="business_category">Pay Amount</label>
          <input type="number" class="form-control" name="pay_amount" id="pay_amount" placeholder="Amount">
          @php echo from_input_error_message('pay_amount') @endphp
		</div>
      </div>

	  
	 
	 
      <!-- Submit Button -->
      <div class="col-12 text-center my-3">
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
								//$('#service_form input').attr('style', 'border-color:');
								//$('#service_form select').attr('style', 'border-color:');
								$.each(resp.error_messages, function (i, error) { 
									err_no = err_no + 1; 
									
									var filed_name=i.split('.');
									
									if( filed_name[0] == 'owners'){
										 
										 var column_name = $(".owners");
										 var err_filed = $(".errMsg-owners");
										 $(err_filed[filed_name[1]]).attr('style', 'color:red'); 
										 $(err_filed[filed_name[1]]).text('Enter the owner name');
										  
										 if(err_no == 1) { 
											   $(column_name[filed_name[1]]).filter(':visible').focus();
										 } 
									}else{
									
										$('#input-error-'+i).attr('style', 'color:red'); 
										$('#input-error-'+i).html(error);
										//$('#'+i).attr('style', 'border-color:red!important'); 
										if(err_no == 1) {  
											   $("#"+i).filter(':visible').focus();
										} 
									}									
								}); 
					           $('#signup_form button').prop('disabled', false);
					           $('#signup_form button').html('Submit');
				 }else{
					   $(".errMsg-owners").html('');
					   $('.error_message').empty(); 
					   $('#signup_form')[0].reset();
					   $('#signup_form button').prop('disabled', false);
					   $('#signup_form button').html('Submit');
					   window.location.href=resp.redirect_url;
					   /*$('#result-modal-content').html(resp.message);
					   $('#ResultModal').modal('show'); */
					      
					   
					   
					   
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
@endsection