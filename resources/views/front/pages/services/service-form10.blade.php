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
					<div class="col-12 col-md-6 col-lg-8 mb-4">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
							@php echo from_input_error_message('address') @endphp
						</div>
					</div>
					
					@include('front.pages.services.country_drop_down')
					
					
					 <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="qualification">Qualification</label>
							<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter qualification">
						    @php echo from_input_error_message('qualification') @endphp
						</div>
					</div>
					
					 <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="cast_category">Cast Category</label>
							<select name="cast_category" id="cast_category" class="form-control">
								<option value="" >Select Category</option>
								<option value="General">General</option>
								<option value="OBC">OBC</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
							</select>
							@php echo from_input_error_message('cast_category') @endphp
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
					
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="nature_of_business">Nature of Business/Project</label>
							<input type="text" class="form-control" name="nature_of_business" id="nature_of_business" placeholder="Nature of Business">
						    @php echo from_input_error_message('nature_of_business') @endphp
						</div>
					</div>
					
					
					 <div class="col-12 col-md-6 col-lg-3 mb-3">
						<div class="form-group">
							<label for="loan_category">Loan Category</label>
							<select name="loan_category" id="loan_category" class="form-control">
								<option value="" >Select Scheme</option>
								<option value="PMEGP Scheme">PMEGP Scheme</option>
								<option value="PMFME Scheme">PMFME Scheme</option>
								<option value="Invest Punjab">Invest Punjab</option>
							</select>
							@php echo from_input_error_message('loan_category') @endphp
						</div>
					</div>
					
				    
					 <div class="col-12 col-md-6 col-lg-3 mb-3">
						<div class="form-group">
							<label for="loan_amount">Loan Amount (₹)</label>
							<input type="number" class="form-control" name="loan_amount" id="loan_amount" placeholder="Enter amount">
						    @php echo from_input_error_message('loan_amount') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="location_of_project">Location of Project</label>
							<input type="text" class="form-control" name="location_of_project" id="location_of_project" placeholder="Enter location">
						    @php echo from_input_error_message('location_of_project') @endphp
						</div>
					</div>
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="area">Area</label>
							<select id="area" name="area" class="form-control">
								<option value="">Select Area</option>
								<option value="Rural">Rural</option>
								<option value="Urban">Urban</option>
								<option value="Border">Border</option>
							</select>
							@php echo from_input_error_message('area') @endphp
						</div>
					</div>
					
					
					
					 <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="propertyStatus">Property Owned/Rental</label>
							<select id="property_owned_rental" name="property_owned_rental" class="form-control">
								<option value="" selected >Select Option</option>
								<option value="Owned">Owned</option>
								<option value="Rental">Rental</option>
							</select>
							@php echo from_input_error_message('property_owned_rental') @endphp 
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="property_area">Property Area (sq. yds)</label>
							<input type="text" class="form-control" name="property_area" id="property_area" placeholder="Enter area in sq yds">
						    @php echo from_input_error_message('property_area') @endphp 
						</div>
					</div>
					
					
					
                    <div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group">
							<label for="documents">Attach Document(Max 600 KB, Accept:jpg,jpeg,png,pdf)</label>
							<input type="file" class="form-control-file" name="documents" id="documents">
							@php echo from_input_error_message('documents') @endphp
						</div>
					</div>
					
					
					
					<div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group">
							<label for="message">Details</label>
							<textarea  class="form-control" name="message" id="message" rows="4" placeholder="Enter full details..."></textarea>
						    @php echo from_input_error_message('message') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-12 col-lg-12 mb-3">
                <div class="alert alert-info" role="alert">
                    <strong>Note:</strong> Documents for Businessmen: PAN & Aadhaar of Borrower, 8th or Matric certificate, Cast certificate if SC/ST/OBC, Title deed, Project DPR, Bank statement (6 months), Quotation etc.
                </div>
            </div>
					
					
					<div class="col-12 col-md-10 col-lg-10 forms-inner-para">
						<div class="checked-box1">
							<input type="checkbox" name="terms" id="terms" >
							<label for="terms">
								<span></span>I accept the <a target="_blank" href="{{ route('termsandconditions') }}">Terms & Conditions</a>.
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
		