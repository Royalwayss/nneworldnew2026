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
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" name="country" id="country">
							@php echo from_input_error_message('country') @endphp
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
							<label for="nature_of_business">Nature of Business</label>
							<input type="text" class="form-control" name="nature_of_business" id="nature_of_business" placeholder="Nature of Business">
						    @php echo from_input_error_message('nature_of_business') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="original_loan_amount">Original Loan Amount</label>
							<input type="text" class="form-control" name="original_loan_amount" id="original_loan_amount" placeholder="Amount">
							@php echo from_input_error_message('original_loan_amount') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="name_of_bank_nbfc">Name of BANK/NBFC</label>
							<input type="text" class="form-control" name="name_of_bank_nbfc" id="name_of_bank_nbfc" placeholder="Bank/ Nbfc">
						    @php echo from_input_error_message('name_of_bank_nbfc') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="date_of_npa">Date of NPA</label>
							<input type="date" class="form-control" id="date_of_npa" name="date_of_npa" placeholder="date">
						    @php echo from_input_error_message('date_of_npa') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="loan_due_as_on_npa_date">Loan Due as on NPA Date</label>
							<input type="date" class="form-control" id="loan_due_as_on_npa_date" name="loan_due_as_on_npa_date" placeholder="date">
						    @php echo from_input_error_message('loan_due_as_on_npa_date') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="property_mortgaged">Property Mortgaged</label>
							<select id="property_mortgaged" name="property_mortgaged" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							@php echo from_input_error_message('property_mortgaged') @endphp
						</div>
					</div>  
				    <div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="property_value">Property Value</label>
							<input type="text" class="form-control" name="property_value" id="property_value" placeholder="Property Value">
						    @php echo from_input_error_message('property_value') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="notices_received" >Notices Received</label>
							<select id="notices_received"  name="notices_received" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							 @php echo from_input_error_message('notices_received') @endphp
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
		