$(document).ready(function() {
	$(document).on('submit', '#newsletter-form', function(event) { 
		$('.loadingDiv').show();
		$.ajax({
			url: $('#newsletter-form').attr('data-action'),
			type: 'POST',
			data: $('#newsletter-form').serialize(),
			success: function(resp) {
				$('.loadingDiv').hide();
				if (!resp.status) {    
					$('#newsletter-message').html('<span style="color:red">'+resp.message+'<span>'); 
				} else {
					$('#newsletter-email').val('');
					$('#newsletter-message').html('<span style="color:green">'+resp.message+'<span>'); 
				}
			},
			error: function() {
				$('.loadingDiv').hide();
				alert("Error");
			}
		});
    });
	
	
     
      $(document).on('submit', '#contact-form', function(event) {
     	   $('.loadingDiv').show();
   	       $.ajax({
                 url: $("#contact-form").attr('data-action'),
                 type: 'POST',
                 data: $("#contact-form").serialize(),
                 success: function(data) {
					$('.loadingDiv').hide();
					$('.error_message').empty();
					if (!data.status) { 
						var err_no = 0;
						$.each(data.errors, function (i, error) {
							err_no = err_no + 1;
							$('#input-error-' + i).css({'color': 'red','display': 'block'});
							$('#input-error-' + i).html(error);
							if (err_no == 1) {
								$("#contact-" + i).focus();
							}
							setTimeout(function () {
								$('#input-error-' + i).hide();
							}, 5000);
						});
					
					   
				   
                } else { 
				    $("#contact-form")[0].reset();
					$("#contact-result").html('<span style="color:green;margin-top:10px">'+data.message+'<span>'); 
				}
            },
     			error: function() {
                     $('.loadingDiv').hide();
     				   alert("Error");
                 }
             });
     	});
});
	
