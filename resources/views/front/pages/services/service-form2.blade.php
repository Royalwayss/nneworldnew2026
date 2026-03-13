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
					
					@include('front.pages.services.country_drop_down')
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="category">Category</label>
							<select name="category" id="category" class="form-control">
								<option value="" selected>Choose</option>
								<option value="SCO">SCO</option>
								<option value="Shop">Shop</option>
								<option value="G.F">G.F</option>
								<option value="F.F">F.F</option>
								<option value="2nd Floor">2nd Floor</option>
								<option value="3rd floor">3rd floor</option>
								<option value="Others">Others</option>

							</select>
							@php echo from_input_error_message('category') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="property_area">Area (sq. ft)</label>
							<input type="number" class="form-control" id="property_area" name="property_area" min="0">
						    @php echo from_input_error_message('property_area') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="leased_brand_name">Leased Brand Name</label>
							<input type="text" class="form-control" name="leased_brand_name" id="leased_brand_name" placeholder="Brand Name">
						     @php echo from_input_error_message('leased_brand_name') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="annual_rental_profit">Annual Rental/Profit</label>
							<input type="number" class="form-control" name="annual_rental_profit" id="annual_rental_profit" placeholder="Profit">
						    @php echo from_input_error_message('annual_rental_profit') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="lock_in_period">Lock in period in years</label>
							<input type="number" class="form-control" name="lock_in_period" id="lock_in_period" placeholder="Lock in Period">
							@php echo from_input_error_message('lock_in_period') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="lease_in_period">Lease in period in years</label>
							<input type="number" class="form-control" name="lease_in_period" id="lease_in_period" placeholder="Lease in Period">
							@php echo from_input_error_message('lease_in_period') @endphp
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
							<label for="sale_price">Sale Price (₹):</label>
							<input type="number" class="form-control" id="sale_price" name="sale_price"
								placeholder="Sale Price">
								@php echo from_input_error_message('sale_price') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="negotiable">Negotiable</label>
							<select name="negotiable" id="negotiable" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								
							</select>
							@php echo from_input_error_message('negotiable') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-6 mb-3">
						<div class="form-group">
							<label for="property_picture">Property Picture</label>
							<input type="file" class="form-control-file" name="property_picture" id="property_picture">
							@php echo from_input_error_message('property_picture') @endphp
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
								<span></span>I/we authorize Estateqor.com and its staff (A Unit of Hello Professionals Services Pvt. Ltd.) to act as broker to sale my/our commercial property and I/we shall be liable to pay brokerage to ESTATEQOR.com( Helloprofessionals Services Pvt. Ltd. For buyers having reference of ESTATEQOR.COM or agreement with the company as per rates agreed between us ).
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
		