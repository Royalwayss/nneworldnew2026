@extends('front.layout.layout')
@section('content')
<section class="breadcrumb-area pt-0">
    <div class="map-banner">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3427.937449144952!2d76.56043607558206!3d30.77633497456329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e9!4m0!4m3!3m2!1d30.776335!2d76.563011!5e0!3m2!1sen!2sin!4v1749633357186!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- <div class="breadcrumb-area-bg" style="background-image: url(front/assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="shape-box"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">

                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
</section>
<!--End breadcrumb area-->

<!--Start Google Map Style2 Area-->
<section class="google-map-area">
    <div class="auto-container">
        <div class="contact-page-map-outer">
            <!--Map Canvas-->
            <!-- <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                        data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                        data-icon-path="front/assets/images/icon/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div> -->

            <div class="contact-info-box">
                <div class="left-box">
                    <h2><a href="tel:+91-7717587678">+91-7717587678</a></h2>
                    <h3><a href="mailto:info@estateqor.com">info@estateqor.com</a></h3>
                </div>
                <div class="middle-box">
                    <p> #89, Rishi Nagar Market, Opp BSNL <br>Office Ludhiana-141001.</p>
                </div>
                <div class="right-box">
                    <div class="thm-social-link1">
                        <ul class="clearfix">
                            <li>
                                <a href="https://www.instagram.com/estateqor/?utm_source=qr&igsh=bzg1dG5wZzUyZ3Zz"
                                    target="_blank"><i class="icon-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/107659195/admin/dashboard/" target="_blank"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61577318181615" target="_blank"><i
                                        class="icon-facebook-circular-logo"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- <div class="container">
    <div class="row mt-5">
     
        <div class="col-6 col-md-4 col-lg-4 ">
    
        </div>
    </div>
    </div> -->

</section>
<!--End Google Map Style2 Area-->



<!--Start Main Contact Form Area-->
<section class="main-contact-form-area contact-page-form">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-5 col-lg-5 text-center mb-5">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="border-box"></div>
                        <h3>#ESTATEQOR</h3>
                    </div>
                    <h2>Invest Smart, Stay Social</h2>
                </div>
                <!-- <div class="social-qr-heading">
                <h2>Invest Smart, Stay Social</h2>
            </div> -->
                <div class="qr-img">
                    <img src="front/assets/images/insta-qr.jpg">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="border-box"></div>
                        <h3>Contact with us</h3>
                    </div>
                    <h2>Write a Message</h2>
                </div>
                <div class="contact-form">
                    <form id="contact_form" name="contact_form" class="default-form2 " data-action="{{ route('savecontact') }}">@csrf

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="name" id="name" class="contact-input"  placeholder="Full Name"
                                            >
											 @php echo from_input_error_message('name') @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="email" id="email" class="contact-input" placeholder="Email Address"
                                            >
											@php echo from_input_error_message('email') @endphp
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="mobile" class="contact-input" value="" id="mobile"
                                            placeholder="Phone">
											@php echo from_input_error_message('mobile') @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="subject" class="contact-input" value="" id="subject"
                                            placeholder="Subject">
											@php echo from_input_error_message('subject') @endphp
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea name="message" id="message" class="contact-input" placeholder="Write a Message"
                                            ></textarea>
											@php echo from_input_error_message('message') @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="button-box">
                                    
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">
                                            send a message
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Main Contact Form Area-->


<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
 $(document).ready(function(){
	 $(document).on("submit", "form", function(e){ 
        e.preventDefault();		 
		$('.loadingDiv').show();
		$('#contact_form button').prop('disabled', true);
		$('#contact_form button').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> SENDING...!');
		var action_url = $('#contact_form').attr('data-action');
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
					            
								var err_no = 0;
								$('.error_message').empty(); 
								$('.contact-input').attr('style', 'color:'); 
								//$('#service_form input').attr('style', 'border-color:');
								//$('#service_form select').attr('style', 'border-color:');
								$.each(resp.error_messages, function (i, error) { 
									err_no = err_no + 1; 
									$('#input-error-'+i).attr('style', 'color:red'); 
									$('#input-error-'+i).html(error);
									$('#'+i).attr('style', 'border-color:red!important'); 
									if(err_no == 1) {  
										   $("#"+i).filter(':visible').focus();
									} 
																		
								}); 
					           $('#contact_form button').prop('disabled', false);
					           $('#contact_form button').html('SEND A MESSAGE');
				 }else{
					   
						   $('.error_message').empty(); 
						   $('.contact-input').attr('style', 'color:'); 
						   $('#contact_form')[0].reset();
						   $('#contact_form button').prop('disabled', false);
						   $('#contact_form button').html('SEND A MESSAGE');
					       $('#result-modal-content').html(resp.message);
					       $('#ResultModal').modal('show');
					      
					   
					   
					   
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#contact_form button').prop('disabled', false);
			    $('#contact_form button').html('Submit');
		    }	
		});
	
	
	});

 });   
</script>

@endsection