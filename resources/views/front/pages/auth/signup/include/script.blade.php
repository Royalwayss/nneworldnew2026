
<?php 
$formUrl = Request::path();
$action_url =  route('signup',[$formUrl]);
?>
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
		var action_url = "{{ $action_url }}";
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
					   if(resp.form == 'developers'){
						   window.location.href=resp.url;
					   }else{
					       $('#result-modal-content').html(resp.message);
					       $('#ResultModal').modal('show');
					   }
					   
					   
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