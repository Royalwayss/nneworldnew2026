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
              <li class="active">Developers</li>
            </ul>
          </div>
          <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <h2>Developers</h2>
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
      <h2>Developers Signup</h2>
    </div>
    <div class="forms-main-bg">
			<form action="javascript:;" id="signup_form"> @csrf
				<div class="row">
					<div class="col-12 text-center">
						<div class="heading-forms">
							Join us
						</div>
					</div>
					
					
                   <div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="project_name">Project Name</label>
							<input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name">
						    @php echo from_input_error_message('project_name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="project_category">Project Category</label>
							<select id="project_category" name="project_category" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Residential">Residential</option>
								<option value="Commercial">Commercial</option>
								<option value="Industrial">Industrial</option>
								<option value="Residential and Commercial">Residential & Commercial</option>
								<option value="All">All</option>
							</select>
							 @php echo from_input_error_message('project_category') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="product_category">Product Category</label>
							<select id="product_category" name="product_category" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Flats">Plots</option>
								<option value="Flats">Flats</option>
								<option value="SCO">SCO</option>
								<option value="Booth">Booth</option>
								<option value="Villa">Villa</option>
								<option value="Studio apartment">Studio apartment</option>
							</select>
							@php echo from_input_error_message('product_category') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="project_area">Project Area (in Acres)</label>
							<input type="text" class="form-control" name="project_area" id="project_area" placeholder="e.g. 5.5">
						    @php echo from_input_error_message('project_area') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8 mb-3">
						<div class="form-group">
							<label for="location">Location</label>
							<input type="text" class="form-control" name="location" id="location" placeholder="Enter project location">
						    @php echo from_input_error_message('location') @endphp
						</div>
					</div>

					<!-- Owner Info -->
					<div class="col-12 mb-2">
						<label>Name of Owners</label>
					</div>
					
					<table style="width:100%" id="owneramplerow">
					<tbody>
					<tr>
					    <td style="width:40%">
								<div class="col-12 col-md-12 mb-2">
								<input type="text" name="owners[]" class="form-control owners"
										placeholder="Owner 1">
								<p class="err-message errMsg-owners"></p>
								</div>
						</td>
						<td style="text-align:left;width:60%">
						        <a href="javascript:;" id="addOwnerRow"> + Add More </a>
						</td>
					</tr>	
					</tbody>
					</table>
							
							
					<div class="col-12 col-md-12 col-lg-12 mb-3"></div>
							
					
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group ">
							<label for="contact_no">Contact Number</label>
							<input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="email">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							@php echo from_input_error_message('name') @endphp
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
                    @include('front.pages.services.country_drop_down')

					<!-- Project Legal/Finance -->
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="title_deed_registered">Title Deed Registered</label>
							<select id="title_deed_registered" name="title_deed_registered" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							@php echo from_input_error_message('title_deed_registered') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="rera_approved">RERA Approved</label>
							<select id="rera_approved" name="rera_approved" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<option value="Applied For">Applied For</option>
							</select>
							@php echo from_input_error_message('rera_approved') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="approvals">MC/Puda/Trust/Govt. Approvals</label>
							<select id="approvals" name="approvals" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<option value="Applied For">Applied For</option>
							</select>
							@php echo from_input_error_message('approvals') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-8 mb-3">
						<div class="form-group">
							<label for="past_projects_delivered">Past Projects Delivered</label>
							<input type="text" class="form-control" name="past_projects_delivered" id="past_projects_delivered" placeholder="Details">
						    @php echo from_input_error_message('past_projects_delivered') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-8 mb-3">
						<div class="form-group">
							<label for="bank_financed_or_own_funds">Bank Financed or Own Funds</label>
							<input type="text" class="form-control" name="bank_financed_or_own_funds" id="bank_financed_or_own_funds" placeholder="Details">
						    @php echo from_input_error_message('bank_financed_or_own_funds') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="lease_guarantee">Lease Guarantee to buyers</label>
							<select id="lease_guarantee" name="lease_guarantee" class="form-control">
								<option value="" selected>Choose...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							@php echo from_input_error_message('lease_guarantee') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="assured_rentals_income">Assured Rentals/Income</label>
							<input type="text" class="form-control" name="assured_rentals_income" id="assured_rentals_income" placeholder="e.g. ₹10,000 per month">
						    @php echo from_input_error_message('assured_rentals_income') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="listing_fee_paid">Listing Fee Paid</label>
							<input type="text" class="form-control" name="listing_fee_paid" id="listing_fee_paid" placeholder="Enter fee amount">
						     @php echo from_input_error_message('listing_fee_paid') @endphp
						</div>
					</div>
					<!-- Media Uploads -->
					<div class="col-12 col-md-6 col-lg-6 mb-3">
						<div class="form-group">
							<label for="profile">Profile Picture / Logo</label>
							<input type="file" class="form-control-file" name="profile" id="profile">
							@php echo from_input_error_message('profile') @endphp
						</div>
					</div>
                    <?php /*
					<div class="col-12 col-md-6 col-lg-6 mb-3">
						<div class="form-group">
							<label for="images">Attach 4–5 Pictures (Max 600 KB total)</label>
							<input type="file" class="form-control-file" name="images[]" id="images" multiple>
							@php echo from_input_error_message('images') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-6 mb-3">
						<div class="form-group">
							<label for="brochure">Attach Brochure</label>
							<input type="file" class="form-control-file" name="brochure"  id="brochure">
							@php echo from_input_error_message('brochure') @endphp
						</div>
					</div> */ ?>
					
					
					<div class="col-12 col-md-12 col-lg-12 mb-3">
						<div class="form-group">
							<label for="transfer_link">Transfer Link</label>
							<input type="text" class="form-control" name="transfer_link" id="transfer_link" placeholder="Enter the transfer link">
						     @php echo from_input_error_message('transfer_link') @endphp
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
								<span></span>I/we authorize Estateqor.com and its staff (A Unit of Hello Professionals Services Pvt. Ltd.) to act as broker and agree to pay brokerage for referred buyers as per our agreement.
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
		</div>


  </div>
</section>
<!-- Append Table Rows -->
<table class="table table-hover table-bordered table-striped owneramplerow" style="display:none;">
    <tbody>
        <tr class="appenderTr blockIdWrap">
          
			<td>
					<div class="col-12 col-md-12 mb-2">
					<input type="text" name="owners[]" class="form-control owners"
							placeholder="">
					<p class="err-message errMsg-owners"></p>
					</div>
			</td>
			
						
            <td style="text-align:left">
                <a title="Remove" class="btn btn-sm red_btn " onclick="owner_row_remove(this)" href="javascript:;"> <i class="fa fa-times"></i></a>
            </td>
        </tr>
    </tbody>
</table>
<!-- Append Table Rows -->
@include('front.pages.auth.signup.include.script')
@endsection