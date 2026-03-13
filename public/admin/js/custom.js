$(document).ready(function(){

		// Select All Input Data
		$('.select-all').click(function () {
        let $select2 = $(this).siblings('.select2')
        $select2.find('option').prop('selected', 'selected')
        $select2.trigger('change')
    });

		// Clear All Input Data
    $('.deselect-all').click(function () {
        let $select2 = $(this).siblings('.select2')
        $select2.find('option').prop('selected', '')
        $select2.trigger('change')
    });

	// Check for Partial Payment Refund
	$(document).on("click","#refundAmount",function(){
		if(confirm('Are you sure to refund this Payment?')){
			return true;
		}
		return false;
	})


	// Check Admin Password is correct or not
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		//alert(current_pwd);
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			type:'post',
			url:'/admin/current-password/verify',
			data:{current_pwd:current_pwd},
			success:function(resp){
				if(resp=="false"){
					$("#verifyCurrentPwd").html("<font color='red'>Current Password is incorrect</font>");
				}else if(resp=="true"){
					$("#verifyCurrentPwd").html("<font color='green'>Current Password is correct</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});
  $(document).on("click",".view-modal",function(){
	  var id = $(this).attr('data-id'); 
	  var url = $(this).attr('data-href');
	  var modal_type = $(this).attr('modal-type');
	  var module = $(this).attr('data-module');  
	  $.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:url,
		    success:function(resp){
		    	if(resp['status']==1){
		    		  $("#view-"+id).removeClass('red');  
					  $("#viewModal .modal-title").html('View '+module+' #'+id);
					  if(modal_type == 'wide'){
						  $("#viewModal .modal-dialog").addClass('modal-lg'); 
					  }else if(modal_type == 'wider'){
						  $("#viewModal .modal-dialog").addClass('modal-xl'); 
					  }else{
						  
					  }

					  $("#view-modal-content").html(resp['html']);
					  $("#popup_slider").empty();
					  $("#popup_slider").html(resp['popup_slider']);
					  $("#viewModal").modal('show');
		    	}else{
					alert("Something went wrong please try again later!");
				}
		    	
		    },error:function(){
		    	alert("Something went wrong please try again later!");
		    }	
		})
  });
  
   $(document).on("click",".addedit-modal",function(){
	  var id = $(this).attr('data-id'); 
	  var url = $(this).attr('data-href');
	  var modal_type = $(this).attr('data-modal-type');
	  var module = $(this).attr('data-module');  
	  if(id == ''){
			var modal_title = module;
	  }else{
			var modal_title = module+' #'+id;
	  }
	  $.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:url,
		    success:function(resp){
		    	if(resp['status']==1){
                     
					  
					  $("#addeditModal .modal-title").html(modal_title);
					  if(modal_type == 'small'){
						  $("#addeditModal .modal-dialog").addClass('modal-small'); 
					  }else if(modal_type == 'wide'){
						  $("#addeditModal .modal-dialog").addClass('modal-lg'); 
					  }else if(modal_type == 'wider'){
						  $("#addeditModal .modal-dialog").addClass('modal-xl'); 
					  }else{
						  
					  } 
					  $("#form_popup_slider").empty();
					  $("#form_popup_slider").html(resp['popup_slider']);
					  $("#addedit-modal-content").html(resp['html']);
					  $('#property_description').summernote();
					  $('#contact_details').summernote();
					  if(module  == 'Add Product' || module  == 'Edit Product'){
					  
						  $("#components").select2({
							   dropdownParent: $('#addeditModal #addedit-modal-content')
						  }); 
						  
					  }
					  
					  $("#addeditModal").modal('show');
		    	}else{
					alert("Something went wrong please try again later!");
				}
		    	
		    },error:function(){
		    	alert("Something went wrong please try again later!");
		    }	
		})
  });
  
  $(document).on('click','.select-all',function(){ 
        let $select2 = $(this).siblings('.select2')
        $select2.find('option').prop('selected', 'selected')
        $select2.trigger('change')
    });

	
	$(document).on('click','.deselect-all',function(){ 
        let $select2 = $(this).siblings('.select2')
        $select2.find('option').prop('selected', '')
        $select2.trigger('change')
    });

  
  
  
  
  
  
  
  
  $(document).on("submit", "form", function(e){   
        var url = $("#addEditForm").attr('data-action');
        var modalName = $("#addEditForm").attr('data-modal');
		$('.save-btn').prop('disabled', true);
		$('.save-btn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...! Please Wait...');
        var _this =this;
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    
			 url:url,
			 type:'POST',
			 dataType: "JSON",
			 data: new FormData(this),
			 processData: false,
			 contentType: false,
			success:function(resp){
		    	 if(!resp['status']){
					 
					 
					            var err_no = 0;
								$('.error-message').empty(); 
								$(".error-options").empty(); 
								$('.forminput').attr('style', 'border-color:');
								$.each(resp['error_messages'], function (i, error) { 
									
									if(modalName == 'Property'){
										$("#Property_Details").show();
										$("#Images").hide();
										$(".tab1").addClass('active'); 
										$(".tab2").removeClass('active'); 
									}
									
									err_no = err_no + 1; 
									
									
									var filed_name=i.split('.');
									
									if( filed_name[0] == 'options'){  

                                        var option_err_no = parseInt(filed_name[1]) +  parseInt(1);
      									
										 
										 var column_name = $(".options");
										 var err_filed = $(".error-options");
										 $(err_filed[option_err_no]).attr('style', 'color:red'); 
										 $(err_filed[option_err_no]).text('Enter the option');
										  
										 if(err_no == 1) { 
											   $(column_name[option_err_no]).filter(':visible').focus();
										 } 
									}else{
									
										$('#error-'+i).attr('style', 'color:red'); 
										$('#error-'+i).html(error);
										$('#'+i).attr('style', 'border-color:red!important'); 
										if(err_no == 1) { 
											   $("#"+i).filter(':visible').focus();
										}  
										
									}
									
									
									
									
									
								}); 
					 
					           $('.save-btn').prop('disabled', false);
					           $('.save-btn').html('Save '+modalName);
					 
					 
					
				 }else{
					  $("#addeditModal").modal('hide');
					  $('#datatable').DataTable().ajax.reload();
				 }
				 
		    },error:function(){
		    	alert("Error");
				$('.save-btn').prop('disabled', false);
			   $('.save-btn').html('Save '+modalName);
		    }	
		})
  }); 
  $(document).on("click",".delete_modal",function(){ 
	  var url = $(this).attr('data-href'); 
	  var id = $(this).attr('data-id'); 
	  $("#deleteModal .modal-title").html('Confirm Deletion  #'+id);
	  $("#confirmDelete").attr('data-href',url); 
	  $("#deleteModal").modal('show');
  });
  $(document).on("click","#confirmDelete",function(){ 
	  var url = $(this).attr('data-href'); 
	    $.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:url,
		    success:function(resp){
		    	$("#deleteModal").modal('hide');
		    	$('#datatable').DataTable().ajax.reload(); 
		    },error:function(){
		    	alert("Error");
		    }	
		})
  }); 
  $(document).on("click",".delete-colse-btn",function(){ 
	  $("#deleteModal").modal('hide');
  }); 
  
  // Update  Status
	
	$(document).on("click",".updateStatus",function(){
		var status = $(this).children("i").attr("status");
		var id = $(this).attr("data-id");
		var url = $(this).attr("data-url");
		
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:url,
		    data:{status:status,id:id},
		    success:function(resp){
		    	if(resp['status']==0){ 
		    		$("#status-"+id).html("<i class='fas fa-toggle-off'  style='font-size:25px;color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#status-"+id).html("<i class='fas fa-toggle-on' style='font-size:25px;color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})
    // Delete Data
	
	// Update Category Status
	$(document).on("click",".updateCategoryStatus",function(){
		var status = $(this).children("i").attr("status");
		var category_id = $(this).attr("category_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-category-status',
		    data:{status:status,category_id:category_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#category-"+category_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#category-"+category_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Brand Status
	$(document).on("click",".updateBrandStatus",function(){
		var status = $(this).children("i").attr("status");
		var brand_id = $(this).attr("brand_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-brand-status',
		    data:{status:status,brand_id:brand_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#brand-"+brand_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#brand-"+brand_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update User Status
	$(document).on("click",".updateUserStatus",function(){
		var status = $(this).children("i").attr("status");
		var user_id = $(this).attr("user_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-user-status',
		    data:{status:status,user_id:user_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#user-"+user_id).html("<i class='fas fa-toggle-off'  style='font-size:25px;color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#user-"+user_id).html("<i class='fas fa-toggle-on' style='font-size:25px;color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Subscriber Status
	$(document).on("click",".updateSubscriberStatus",function(){
		var status = $(this).children("i").attr("status");
		var subscriber_id = $(this).attr("subscriber_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-subscriber-status',
		    data:{status:status,subscriber_id:subscriber_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#subscriber-"+subscriber_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#subscriber-"+subscriber_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Coupon Status
	$(document).on("click",".updateCouponStatus",function(){
		var status = $(this).children("i").attr("status");
		var coupon_id = $(this).attr("coupon_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-coupon-status',
		    data:{status:status,coupon_id:coupon_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#coupon-"+coupon_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#coupon-"+coupon_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Banner Status
	$(document).on("click",".updateBannerStatus",function(){
		var status = $(this).children("i").attr("status");
		var banner_id = $(this).attr("banner_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-banner-status',
		    data:{status:status,banner_id:banner_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#banner-"+banner_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#banner-"+banner_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Product Status
	$(document).on("click",".updateProductStatus",function(){
		var status = $(this).children("i").attr("status");
		var product_id = $(this).attr("product_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-product-status',
		    data:{status:status,product_id:product_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#product-"+product_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#product-"+product_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Attribute Status
	$(document).on("click",".updateAttributeStatus",function(){
		var status = $(this).children("i").attr("status");
		var attribute_id = $(this).attr("attribute_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-attribute-status',
		    data:{status:status,attribute_id:attribute_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#attribute-"+attribute_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#attribute-"+attribute_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Rating Status
	$(document).on("click",".updateRatingStatus",function(){
		var status = $(this).children("i").attr("status");
		var rating_id = $(this).attr("rating_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-rating-status',
		    data:{status:status,rating_id:rating_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#rating-"+rating_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#rating-"+rating_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Subadmin Status
	$(document).on("click",".updateSubadminStatus",function(){
		var status = $(this).children("i").attr("status");
		var subadmin_id = $(this).attr("subadmin_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-subadmin-status',
		    data:{status:status,subadmin_id:subadmin_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#subadmin-"+subadmin_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#subadmin-"+subadmin_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})

	// Update Rating Status
	$(document).on("click",".updateRatingStatus",function(){
		var status = $(this).children("i").attr("status");
		var rating_id = $(this).attr("rating_id");
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    type:'post',
		    url:'/admin/update-rating-status',
		    data:{status:status,rating_id:rating_id},
		    success:function(resp){
		    	if(resp['status']==0){
		    		$("#rating-"+rating_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
		    	}else if(resp['status']==1){
		    		$("#rating-"+rating_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>");
		    	}
		    	
		    },error:function(){
		    	alert("Error");
		    }	
		})
	})


	// Confirm the deletion of CMS Page
	/* $(document).on("click",".confirmDelete",function(){
		var name = $(this).attr('name');
		if(confirm('Are you sure to delete this '+name+'?')){
			return true;
		}
		return false;
	}); */

	// Confirm Deletion with SweetAlert
	$(document).on("click",".confirmDelete",function(){
		var record = $(this).attr('record');
		var recordid = $(this).attr('recordid');
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    Swal.fire(
		      'Deleted!',
		      'Your file has been deleted.',
		      'success'
		    )
		    window.location.href = "/admin/delete-"+record+"/"+recordid;
		  }
		})
	});

	// Confirm the deletion of Module with Resource Controller
	 $(document).on("click",".confirmDeleteModule",function(){
		var module = $(this).attr('module');
		if(confirm('Are you sure to delete this '+module+'?')){
			return true;
		}
		return false;
	}); 

	// Products Attributes Add/Remove Script
	var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div ><div style="height:10px;"></div><input type="text" class="form-control attr-input" name="sku[]" style="width:120px" placeholder="SKU" />&nbsp;<input type="text" class="form-control attr-input" name="size[]" style="width:120px" placeholder="Size" />&nbsp;<input type="text" class="form-control attr-input" name="price[]" style="width:120px" placeholder="Price" />&nbsp;<input type="text" class="form-control attr-input" name="stock[]" style="width:120px" placeholder="Stock" />&nbsp;<input type="number" class="form-control attr-input" name="sort[]" placeholder="Sort" style="width:120px;"><a href="javascript:void(0);" class="remove_button btn">Delete</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

  $("#couponForm").submit(function(event) {
      if ($("#ManualCoupon").is(":checked") && $("#coupon_code").val().trim() === "") {
          alert("Coupon Code is required when Manual option is selected.");
          event.preventDefault(); // Prevent form submission
      }
  });  

  // Show/Hide Coupon Field for Manual/Automatic
	$("#ManualCoupon").click(function(){
		$("#couponField").show();
	});

	$("#AutomaticCoupon").click(function(){
		$("#couponField").hide();
	});

	$('#order_status').change(function() {    
        var order_status = $(this).val();
        if(order_status=="Shipped"){
        	$("#delivery_method").show();
        	$("#awb_number").show();
        }else{
        	$("#delivery_method").hide();
        	$("#awb_number").hide();
        }
    });

	$("#e1").select2();
    $("#cat_checkbox").click(function(){
      if($("#cat_checkbox").is(':checked') ){
          $("#e1 > option").prop("selected","selected");
          $("#e1").trigger("change");
          $("#cat_checkbox").hide();
          $(".selectall").hide();
      }else{
          $("#e1 > option").removeAttr("selected");
           $("#e1").trigger("change");
           $("#e1").val("");
           $(this).val('');
           $('#e1').attr("value", "");
      }
    });

    $("#brand_checkbox").click(function(){
      if($("#brand_checkbox").is(':checked') ){
          $("#b1 > option").prop("selected","selected");
          $("#b1").trigger("change");
          $("#brand_checkbox").hide();
          $(".brandselectall").hide();
      }else{
          $("#b1 > option").removeAttr("selected");
           $("#b1").trigger("change");
           $("#b1").val("");
           $(this).val('');
           $('#b1').attr("value", "");
      }
    });

    $("#user_checkbox").click(function(){
      if($("#user_checkbox").is(':checked') ){
          $("#u1 > option").prop("selected","selected");
          $("#u1").trigger("change");
          $("#user_checkbox").hide();
          $(".userselectall").hide();
      }else{
          $("#u1 > option").removeAttr("selected");
           $("#u1").trigger("change");
           $("#u1").val("");
           $(this).val('');
           $('#u1').attr("value", "");
      }
    });




});

function get_slug(name,url){
	 var get_name = $("#"+name).val(); 
     var slug_url = generateSlug(get_name); 
     $("#"+url).val(slug_url);
}

function generateSlug(name) {
          let slug = name.toLowerCase();
          slug = slug.replace("/", "-"); 
		  slug = slug.replace(/[^a-z0-9\s-]/g, ''); // Remove special characters except spaces and hyphens
          slug = slug.replace(/\s+/g, '-'); // Replace spaces with hyphens
          slug = slug.replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
          
          slug = slug.replace(/-+/g, '-'); // Replace multiple hyphens with a single hyphen
          return slug;
      }