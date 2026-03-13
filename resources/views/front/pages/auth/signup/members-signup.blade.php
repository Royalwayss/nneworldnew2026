@extends('front.layout.layout')
@section('content')
<section class="breadcrumb-area">
  <div class="breadcrumb-area-bg" style="background-image: url(front/assets/images/banner-forms.jpg);">
  </div>
  <div class="shape-box"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="inner-content">

          <div class="breadcrumb-menu">
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li class="active">Member's</li>
            </ul>
          </div>
          <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Member's</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="main-contact-form-area">
  <div class="container">
    <div class="sec-title text-center">
      <div class="sub-title">
        <div class="border-box"></div>
        <h3>Forms</h3>
      </div>
      <h2>Member's Signup</h2>
    </div>
	<div class="forms-main-bg">
			<form action="javascript:;" id="signup_form"> @csrf
				<div class="row">
					<div class="col-12 text-center">
						<!-- <div class="heading-forms">
							Join us
						</div> -->
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
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
						<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						    @php echo from_input_error_message('password') @endphp
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-8 mb-4">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
							@php echo from_input_error_message('address') @endphp
						</div>
					</div>
					
					
					
					 @include('front.pages.services.country_drop_down')
					
					<?php /*
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" name="country" id="country">
							@php echo from_input_error_message('country') @endphp
						</div>
					</div> */ ?>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="property_category">Property Category</label>
							<select  name="property_category" id="property_category" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="House">House</option>
								<option value="Plot">Plot</option>
								<option value="Flat">Flat</option>
								<option value="SCO">SCO</option>
								<option value="Shop">Shop</option>
								<option value="Leased Branded Showroom">Leased Branded Showroom</option>
								<option value="Office Space">Office Space</option>
								<option value="Industrial Plot">Industrial Plot</option>
								<option value="Factory">Factory</option>
								<option value="Agriculture land">Agriculture land</option>
								<option value="Bank Auction Property">Bank Auction Property</option>
								<option value="Others">Others</option>
							</select>
							@php echo from_input_error_message('property_category') @endphp
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
						<div class="form-group">
							<label for="purpose_of_buy">Purpose of Buy/Rent</label>
							<select name="purpose_of_buy" id="purpose_of_buy" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Investment">Investment</option>
								<option value="Self occupied">Self occupied</option>
								<option value="Rent">Rent</option>
							</select>
							@php echo from_input_error_message('purpose_of_buy') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="property_area">Property Area in sq yds</label>
							<input type="number" class="form-control" id="property_area" name="property_area" min="0">
						    @php echo from_input_error_message('property_area') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8 mb-4">
						<div class="form-group ">
							<label for="validationDefault01">Preferred Location</label>
							<input type="text" class="form-control" id="preferred_location" name="preferred_location"
								placeholder="Preferred Location">
								 @php echo from_input_error_message('preferred_location') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="budget">Budget (₹):</label>
							<input type="number" class="form-control" id="budget" name="budget"
								placeholder="Enter amount">
							@php echo from_input_error_message('budget') @endphp
						</div>
					</div>
					<!-- <div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="Details">Details</label>
							<input type="details" class="form-control" id="details" placeholder="Details">
						</div>
					</div> -->
					<div class="col-12 col-md-6 col-lg-6 mb-4">
						<div class="form-group">
							<label for="documents">Attach Document (Aadhaar or Voting card)</label>
							<input type="file" class="form-control-file" name="documents" id="documents">
							@php echo from_input_error_message('documents') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-12 col-lg-12 mb-4">
						<div class="form-group ">
							<label for="message">Details</label>
							<div class="input-box">
								<textarea  class="w-100 inner-details" name="message" id="message" 
									placeholder="" ></textarea>
							     @php echo from_input_error_message('message') @endphp
							</div>
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


  </div>
</section>
@include('front.pages.auth.signup.include.script')
@endsection