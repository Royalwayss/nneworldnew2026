@extends('front.layout.layout')
@section('content')
<style>
.select2-container--focus {
    width: 100% !important;
}
</style>
<section class="my-acc" style="margin-top:250px;min-height:1300px">
    <div class="container mt-5">
        <div class="row vertical-tabs">
            <!-- Side Tabs -->
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link my-acc-tab @if($active_tab == 'profile') active @endif" data-tab="profile"  id="tab1-tab" data-toggle="pill" href="#tab1" role="tab">My
                        Profile</a>
                    <a class="nav-link my-acc-tab @if($active_tab == 'message') active @endif" data-tab="message" id="tab2-tab" data-toggle="pill" href="#tab2" role="tab">Message</a>

                    <a class="nav-link my-acc-tab @if($active_tab == 'setting') active @endif" data-tab="setting" id="tab4-tab" data-toggle="pill" href="#tab4" role="tab">Change
                        Password</a>
                    <a class="nav-link my-acc-tab"  href="{{ route('signout') }}" role="tab">Logout</a>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    @include('front.pages.account.include.profile')
                    @include('front.pages.account.include.message')
                    @include('front.pages.account.include.setting')
				</div>
            </div>
        </div>
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
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background:#f4f4f4;">
                Update Status
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background:#f4f4f4;">
                
                    <div class="row">
                        <input type="hidden" value="" name="msg_id" id="msg_id">
                        <div class="col-12 col-md-12 col-lg-12  mb-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="msg-status" name="status" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Need discussion">Need discussion</option>
                                    <option value="Delayed due to Emergency">Delayed due to Emergency</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group ">
                                <label for="msg-comment">Comment</label>
                                <div class="input-box">
                                    <textarea class="w-100 inner-details" name="message" id="msg-comment"
                                        placeholder=""></textarea>
                                    <p class="error_message" id="input-error-message"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 m-auto">
                            <a type="submit" class="btn btn-primary btn-block update_message_status" style="color:#fff">Submit</a>
                        </div>
                    </div>
                
            </div>
            <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
        </div>
    </div>
</div>


<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
 $(document).ready(function(){
    $('.searchselect').niceSelect('destroy');
	$('#country').select2();
	$('#state').select2();
	$('#city').select2();
	 
	 $(document).on("submit", "form", function(e){
        e.preventDefault();		 
		$('.loadingDiv').show();
		$('#save_account button').prop('disabled', true);
		$('#save_account button').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...!');
		var action_url = $('#save_account').attr('data-action');
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
					           $('#save_account button').prop('disabled', false);
					           $('#save_account button').html('Submit');
				 }else{
					  
					   $('#save_account button').prop('disabled', false);
					   $('#save_account button').html('Submit');
					   alert(resp.message);
					   window.location.reload();
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#save_account button').prop('disabled', false);
			    $('#save_account button').html('Submit');
		    }	
		});
	
	
	});

   $(document).on('click', '.messageModal', function() {
	   $('#msg_id').val($(this).attr('data-id'));
   });
   
   $(document).on('click', '.update_message_status', function() {
	        $('.loadingDiv').show();
			var status = $("#msg-status").val();
	        var comment = $("#msg-comment").val();
	        var msg_id = $("#msg_id").val();
			if(status == ''){
				$('.loadingDiv').hide();
				alert('Select the status');
				return false;
			}
			
			if(comment == ''){
				$('.loadingDiv').hide();
				alert('Enter the comment');
				return false;
			}
			
			$.ajax({
				 url: "{{ route('updatemessagestatus') }}",
				 type:'POST',
				 data: { _token: "{{csrf_token()}}",msg_id:msg_id,status:status,comment:comment},
			     success:function(resp){
					$('.loadingDiv').hide(); 
					 window.location.reload();
				  },error:function(){
		    	      $('.loadingDiv').hide(); 
		         }	
		    });
			
   });
   
   $(document).on('click', '.my-acc-tab', function() {
	    var tab = $(this).attr('data-tab'); 
		if( tab != ''){
		 $.ajax({
				 url: "{{ route('setactivetab') }}",
				 type:'POST',
				 data: { _token: "{{csrf_token()}}",tab:tab},
			     success:function(resp){
				  }
		    });
		}
		
   });

 
    
    
 });   
    
	
	
	
	function update_password(){
         $('.loadingDiv').show();
		 var current_password = $("#current_password").val();
		 var new_password = $("#new_password").val();
		 $.ajax({
				 url: "{{ route('updatepassword') }}",
				 type:'POST',
				 
				 data: { _token: "{{csrf_token()}}",current_password:current_password,new_password:new_password},
				
				
			success:function(resp){
		    	 $('.loadingDiv').hide();
				 if(!resp.status){ 
					            
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
					          // $('#save_account button').prop('disabled', false);
					           //$('#save_account button').html('Submit');
				 }else{
					  
					   alert(resp.message);
					   window.location.reload();
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');
				$('#save_account button').prop('disabled', false);
			    $('#save_account button').html('Submit');
		    }	
		});
	
	
		 
		 
		 
		 
		 
	}
	
 $(".showpassword").on('click', function(event){ 
		  var mode = $(this).attr('data-mode');
		  var idName = $(this).attr('data-id');
		  if(mode == 'show'){ 
			  $(this).html('HIDE');
			  $(this).attr('data-mode','hide');
			  $('#'+idName).get(0).type = 'text';
		  }else{
			  $(this).html('SHOW');
			  $(this).attr('data-mode','show');
			  $('#'+idName).get(0).type = 'password';
		  }
		  
	});
  
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