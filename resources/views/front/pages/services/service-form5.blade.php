<form action="javascript:;" id="service_form" data-action="{{ $service['form_action_url'] }}">@csrf
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading-forms">
							Join us
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							@php echo from_input_error_message('name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="contact_no">Contact Number</label>
							<input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email">
							@php echo from_input_error_message('email') @endphp
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
							@php echo from_input_error_message('address') @endphp
						</div>
					</div>
					
					
					@include('front.pages.services.country_drop_down')
					
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="category_of_service">Category of service</label>
							<select id="category_of_service" name="category_of_service" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Legal search with Certified copies">Legal search with Certified copies </option>
								<option value="Legal search without Certified copies">Legal search without Certified copies</option>
								<option value="Revenue Record verifiation">Revenue Record verifiation</option>
								<option value="Others">Others </option>
								
							</select>
							@php echo from_input_error_message('category_of_service') @endphp
						</div>
					</div>
					
					
					
					<div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group">
							<label for="documents">Attach Document(Max 600 KB, Accept:jpg,jpeg,png,pdf)</label>
							<input type="file" class="form-control-file" name="documents" id="documents">
							@php echo from_input_error_message('documents') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-12 col-lg-8 mb-4">
						<div class="form-group ">
							<label for="message">Details</label>
							<div class="input-box">
								<textarea  class="w-100 inner-details" name="message" id="message" 
									placeholder="" ></textarea>
							     @php echo from_input_error_message('message') @endphp
							</div>
						</div>
					</div>



					<div class="col-12 col-md-10 col-lg-10 forms-inner-para">
						<div class="checked-box1">
							<input type="checkbox" name="terms" id="terms" >
							<label for="terms">
								<span></span>I/we authorize Estateqor.com and its staff (A Unit of Hello Professionals Services Pvt. Ltd.) to assist me/us in obtaining legal search report of property from their empaneled advocates or their referred advocates. Estateqor.com or its staff (including HPSPL) shall not be responsible for any wrong act or any misleading legal reports or verification data.
							</label>
							@php echo from_input_error_message('terms') @endphp
						</div>
					</div>

				

					<div class="col-12 col-md-12 col-lg-12 my-3 text-center">
						<div class="forms-buttons">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>


			</form>
		