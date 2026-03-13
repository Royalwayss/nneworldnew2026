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
                     <li class="active">Login</li>
                  </ul>
               </div>
               <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
                  data-aos-duration="1500">
                  <h2>Login</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main-contact-form-area">
   <div class="container">
      <div class="login-container">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6 left-panel text-center">
               <!-- <div class="left-panel text-center"> -->
               <img src="front/assets/images/login-bg.png">
               <!-- <h5 class="mt-3">YOUR HEADLINE NAME</h5> -->
               <!-- <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod, nunc ut interdum...</p> -->
               <!-- </div> -->
            </div>
            <div class="col-12 col-md-6 col-lg-6">
               <div class="right-panel">
                  <h3 class="mb-4 text-dark">Sign in</h3>
                  <div id="login-error-message"></div>
                  <form id="login_form" action="javascript:;" data="{{ route('userlogin') }}">
                     @csrf
                     <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                           <div class="form-group">
                              <label for="login_as">Login as</label>
                              <select name="login_as" id="login_as" class="form-control">
                                 <option value="">Choose...</option>
                                 <option value="professional">Professionals Signup</option>
                                 <option value="member">Members Signup</option>
                                 <option value="channel-partner">Channel Partner</option>
                                 <option value="developers">Developers Signup</option>
                                 <option value="other">Others Signup</option>
                              </select>
                           </div>
                           @php echo from_input_error_message('login_as') @endphp
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                           <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" id="login-email" name="email" placeholder="Enter email address">
                              @php echo from_input_error_message('email') @endphp
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                           <div class="form-group">
                              <label>Password</label>
                              <div class="input-group">
                                 <input type="password" class="form-control" id="login-password" name="password" id="password" placeholder="Enter password">
                                 <div class="input-group-append">
                                    <span class="input-group-text pb-2" data-mode="show" id="showpassword">SHOW</span>
                                 </div>
                              </div>
                              @php echo from_input_error_message('password') @endphp
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 mb-3">
                           <div class="row">
                              <div class="col-12 col-md-12 col-lg-6">
                                 <div class="form-group form-check d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <!--<input type="checkbox" class="form-check-input" id="rememberMe">
                                          <label class="form-check-label small-text" for="rememberMe">Remember
                                          	me</label>-->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-12 col-lg-6">
                                 <a href="javascript:;" id="forgot-password" class="small-text">Forgot Password?</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                     <!-- <div class="text-center my-3">OR</div>
                        <button class="btn btn-outline-dark btn-block">Sign in with other</button> -->
                     <p class="mt-4 text-center small-text">Don't have an account? <a
                        href="{{ route('professionalssignup') }}">Sign Up</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
   $(document).ready(function(){
    $(document).on("submit", "form", function(e){
          e.preventDefault();		 
   	$('.loadingDiv').show();
   	var action_url = $('#login_form').attr('data-action');
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
   				       if(resp.type == 'validation'){ 
   								$(".errMsg-owners").html('');
   								var err_no = 0;
   								$('.error_message').empty(); 
   								
   								$.each(resp.error_messages, function (i, error) { 
   									err_no = err_no + 1; 
   									
   										$('#input-error-'+i).attr('style', 'color:red'); 
   										$('#input-error-'+i).html(error);
   										//$('#'+i).attr('style', 'border-color:red!important'); 
   										if(err_no == 1) { 
   											   $("#login-"+i).filter(':visible').focus();
   										} 
   																		
   								}); 
   					    }else{ 
   							$("#login-email").filter(':visible').focus();
   							$('#login-error-message').html('<p style="color:red">'+resp.errors+'</p>');
   						}
   							
   							
   				           $('#login_form button').prop('disabled', false);
   				           $('#login_form button').html('Submit');
   						   
   						   
   			 }else{
   				   $('#login_form')[0].reset();
   				   $('#login_form button').prop('disabled', false);
   				   $('#login_form button').html('Submit');
   				   window.location.href=resp.url;
   			 }
   			 
   	    },error:function(){
   	    	$('.loadingDiv').hide();
   			alert('Something went to wrong,Please try later');
   			$('#login_form button').prop('disabled', false);
   		    $('#login_form button').html('Submit');
   	    }	
   	});
   
   
   });
   
   
       $("#showpassword").on('click', function(event){ 
   	  var mode = $(this).attr('data-mode');
   	  if(mode == 'show'){ 
   		  $(this).html('HIDE');
   		  $(this).attr('data-mode','hide');
   		  $('#login-password').get(0).type = 'text';
   	  }else{
   		  $(this).html('SHOW');
   		  $(this).attr('data-mode','show');
   		  $('#login-password').get(0).type = 'password';
   	  }
   	  
   });
   
         $("#forgot-password").on('click', function(event){ 
         $("#ForgotPasswordModal").modal();
      });
      
      $("#reset-password").on('click', function(event){ 
         $('.loadingDiv').show();
         var email = $('#signup-email').val();
   	   $.ajax({
   			 url: "{{ route('resetpassword') }}",
   			 type:'POST',
   			 
   			 data: { _token: "{{csrf_token()}}",email:email},
   			
   			
   		success:function(resp){
   	    	 $('.loadingDiv').hide();
   			 if(!resp.status){ 
   				    $("#input-error-signup-email").html("<span style='color:red'>"+resp.message+"</span>");
   							
   			 }else{
   				  $('#signup-email').val('')
   				  $("#input-error-signup-email").html("<span style='color:green'>"+resp.message+"</span>");
   				  setTimeout(function () {
                     window.location.reload();
                 }, 2500);
   			 }
   			 
   	    },error:function(){
   	    	$('.loadingDiv').hide();
   			alert('Something went to wrong,Please try later');
   			$('#save_account button').prop('disabled', false);
   		    $('#save_account button').html('Submit');
   	    }	
   	});
   
   
   	 
          });	   
   
     }); 
   
</script>
@endsection