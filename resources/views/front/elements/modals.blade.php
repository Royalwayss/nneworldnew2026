<!-- ResultModal Modal Start-->
<div style="display:none" class="modal fade" id="ResultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2" style="color:black">Thanks</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <div class="" id="result-modal-content" style="color:green">  
			 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ResultModal Modal End-->

<!-- ResultModal Modal Start-->
<div style="display:none" class="modal fade" id="ForgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2" style="color:black">Forgot Password</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <div class="">  
             <div class="row">  
			       <div class="col-12 mb-4">
						<div class="form-group ">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="signup-email" placeholder="Email">
							@php echo from_input_error_message('signup-email') @endphp
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-12 my-3 text-center">
						<div class="forms-buttons">
							<a type="submit" class="btn btn-primary" data-form="signup" id="reset-password" style="color:#fff">Reset Password</a>
						</div>
					</div>
			 </div>
			 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ResultModal Modal End-->