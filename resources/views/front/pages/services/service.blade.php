@extends('front.layout.layout')
@section('content') 
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
						<h2>{{ $service['name'] }}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Service Details area -->
<section class="service-details-area pb-0">
	<div class="container">
		<div class="row">


			<div class="col-xl-4 col-lg-5 order-box-2">
				<div class="service-details__sidebar">

					

					<div class="service-details-contact-info text-center">
						<div class="sidebar-info-box-bg"
							style="background-image: url({{ asset('front/assets/images/services-side-call-bg.jpg') }});"></div>
						<div class="icon">
							<span class="icon-phone-call"></span>
						</div>
						<h3>Contact with<br> us for any<br> advice</h3>
						<h2><a href="tel:+91-7717587678">+91-7717587678</a></h2>
					</div>

				

				</div>
			</div>
			<!--End Service Details Sidebar -->

			<!--Start Service Details Content -->
			<div class="col-xl-8 col-lg-7 order-box-1">
				<div class="service-details__content">
				

					<div class="text-box1 services-heading">
						<h2>{{ $service['name'] }}</h2>
						 @if($service['seo_unique_url'] != 'subsidy')
						  @php echo $service['content'];  @endphp
					     @endif
					</div>
					
					@if($service['seo_unique_url'] == 'subsidy') 
						  @php echo $service['content'];  @endphp
					@endif
					
				
				</div>
			</div>
			
			
			
			<!--End Service Details Content -->

		</div>
	</div>
</section>
<section class="main-contact-form-area">
	<div class="container">
		<div class="forms-main-bg">
		    @if($service['seo_unique_url'] == 'residential-projects' || $service['seo_unique_url'] == 'commercial-projects' || $service['seo_unique_url'] =='nri-investments-and-tax-planning' || $service['seo_unique_url'] =='bank-auction-properties' || $service['seo_unique_url'] =='real-estate-project-finance-and-incentives')
					@include('front.pages.services.service-form')
		    @elseif($service['seo_unique_url'] == 'branded-leasehold-property')
				    @include('front.pages.services.service-form2')
			@elseif($service['seo_unique_url'] == 'commercial-property-for-sale-or-rent')
			        @include('front.pages.services.service-form3')
			@elseif($service['seo_unique_url'] == 'fractional-investments-pooling-of-investments')
			        @include('front.pages.services.service-form4')
			@elseif($service['seo_unique_url'] == 'legal-due-diligence')
			        @include('front.pages.services.service-form5')
			@elseif($service['seo_unique_url'] == 'real-estate-npa-management')
			        @include('front.pages.services.service-form6')
			@elseif($service['seo_unique_url'] == 'real-estate-insolvency')
			        @include('front.pages.services.service-form7')
			@elseif($service['seo_unique_url'] == 'finance-for-developers')
			        @include('front.pages.services.service-form8') 
			@elseif($service['seo_unique_url'] == 'finance-for-home-commercial-buyers')
			        @include('front.pages.services.service-form9')
			@elseif($service['seo_unique_url'] == 'subsidy')
				    @include('front.pages.services.service-form10')			
			@endif
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
		$('#service_form button').prop('disabled', true);
		$('#service_form button').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...!');
		var action_url = $('#service_form').attr('data-action');
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
					           $('#service_form button').prop('disabled', false);
					           $('#service_form button').html('Submit');
				 }else{
					   $('#service_form')[0].reset();
					   $('#service_form button').prop('disabled', false);
					   $('#service_form button').html('Submit');
					   window.location.href=resp.redirect_url;
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#service_form button').prop('disabled', false);
			    $('#service_form button').html('Submit');
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