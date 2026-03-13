@extends('front.layout.layout')
@section('content')
<section class="about-style2-area">
   <section class="faq-page-one">
      <div class="container">
         <div class="row" style="margin-top:150px">
            <div class="col-12 col-md-6 col-lg-6 mb-5">
               <form action="javascript:;" id="emi_form" data-action="{{ route('emicostcalculator') }}">
                  @csrf
                  <div class="row">
                     <div class="col-12 text-center">
                        <div class="heading-forms">
                           EMI Cost Calculator
                        </div>
                     </div>
                     <div class="col-12 col-md-12 mb-4">
                        <div class="form-group ">
                           <label for="loan_amount">Loan Amount:</label>
                           <input type="text" class="form-control" name="loan_amount" id="loan_amount" placeholder="Loan Amount">
                           @php echo from_input_error_message('loan_amount') @endphp
                        </div>
                     </div>
                     <div class="col-12 col-md-12 mb-4">
                        <div class="form-group ">
                           <label for="interest_rate">Interest Rate:</label>
                           <input type="number" class="form-control" name="interest_rate" id="interest_rate" placeholder="example 4.5">
                           @php echo from_input_error_message('interest_rate') @endphp
                        </div>
                     </div>
                     <div class="col-12 col-md-12 mb-4">
                        <div class="form-group ">
                           <label for="duration_years">Duration Years:</label>
                           <input type="number" class="form-control" name="duration_years" id="duration_years" placeholder="Duration Years">
                           @php echo from_input_error_message('duration_years') @endphp
                        </div>
                     </div>
                     <div class="col-12 col-md-12 col-lg-12 my-3 text-center">
                        <div class="forms-buttons">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-5" id="loan-details" style="margin-top:100px">
                           
			</div>
         </div>
      </div>
   </section>
</section>


<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
<script>
 $(document).ready(function(){
	 $(document).on("submit", "form", function(e){
        e.preventDefault();		 
		$('.loadingDiv').show();
	
		var action_url = $('#emi_form').attr('data-action');
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

				 }else{
					   
					   $("#loan_amount").filter(':visible').focus();
					   $("#loan-details").html(resp.html);
					   
				 }
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				alert('Something went to wrong,Please try later');

		    }	
		});
	
	
	});
 });   
</script>
<!--End Service Details area -->
@endsection