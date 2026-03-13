<form action="javascript:;" id="service_form" data-action="{{ $service['form_action_url'] }}">@csrf
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading-forms">
							Join us
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="first_name">First name</label>
							<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
						    @php echo from_input_error_message('first_name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="last_name">Last name</label>
							<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
						     @php echo from_input_error_message('last_name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						   @php echo from_input_error_message('email') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="contact_no">Mobile Number</label>
							<input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div> -->
					<div class="col-12 col-md-6 col-lg-8 mb-3">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
						    @php echo from_input_error_message('address') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="pincode">Pincode</label>
							<input type="text" class="form-control" name="pincode" id="pincode">
							@php echo from_input_error_message('pincode') @endphp
						</div>
					</div>
					@include('front.pages.services.country_drop_down')


					<!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="picture">Profile Picture / Logo</label>
							<input type="file" class="form-control-file" id="picture">
						</div>
					</div> -->
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="property_category">Category</label>
							<select name="property_category" id="property_category" class="form-control">
								<option value="">Choose...</option>
								<option value="House">House</option>
								<option value="Plot">Plot</option>
								<option value="Flat">Flat</option>
								<option value="SCO">SCO</option>
								<option value="Shop">Shop</option>
								<option value="Leased Branded Showroom">Leased Branded Showroom</option>
								<option value="Industrial Plot">Industrial Plot</option>
								<option value="Factory">Factory</option>
								<option value="Agriculture land">Agriculture land</option>
								<option value="Others">Others</option>
							</select>
							@php echo from_input_error_message('property_category') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="budget">Budget (₹):</label>
							<input type="number" class="form-control" id="budget" name="budget"
								placeholder="Enter amount">
								@php echo from_input_error_message('budget') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="resident_status">Resident status</label>
							<select  name="resident_status"  id="resident_status" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Resident">Resident</option>
								<option value="NRI">NRI</option>
							</select>
							@php echo from_input_error_message('resident_status') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="resident">Purpose</label>
							<select name="purpose_of_buy" id="purpose_of_buy" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Investment">Investment</option>
								<option value="Self occupied">Self occupied</option>

							</select>
							@php echo from_input_error_message('purpose_of_buy') @endphp
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
								<span></span>I accept the <a target="_blank" href="{{ route('termsandconditions') }}">Terms & Conditions</a>
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
		