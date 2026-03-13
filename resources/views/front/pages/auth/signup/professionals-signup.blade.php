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
							<li class="active">Signup</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Signup</h2>
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
			<h2>Professional's Registration</h2>
		</div>
		<div class="forms-main-bg">
			<form action="javascript:;" id="signup_form"> @csrf
				<div class="row">
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
						<label for="category">Select Category</label>
						<select id="category" name="category" class="form-control">
						<option value="">Select</option>
						<option value="Chartered Accountant">Chartered Accountant</option>
						<option value="Company Secretary">Company Secretary</option>
						<option value="Advocate">Advocate</option>
						<option value="Real Estate Consultant">Real Estate Consultant</option>
						<option value="Digital Marketing Expert">Digital Marketing Expert</option>
						<option value="LOAN DSA">LOAN DSA</option>
						<option value="Developer">Developer</option>
						<option value="Others">Others</option>
					    </select>
							@php echo from_input_error_message('category') @endphp
						</div>
						
					</div>
					 @include('front.pages.services.country_drop_down')
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							@php echo from_input_error_message('name') @endphp
						</div>
						
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="company_name">Company Name</label>
							<input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
							@php echo from_input_error_message('company_name') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="website">Website</label>
							<input type="text" class="form-control" name="website" id="website" placeholder="Website">
							@php echo from_input_error_message('website') @endphp
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
						<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						    @php echo from_input_error_message('password') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="telephone">Telephone</label>
							<input type="number" class="form-control" name="telephone" id="telephone" placeholder="Telephone">
						   @php echo from_input_error_message('telephone') @endphp
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group ">
							<label for="contact_no">Mobile Number</label>
							<input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Mobile Number">
						    @php echo from_input_error_message('contact_no') @endphp
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="gender">Gender</label>
							<select id="gender" name="gender" class="form-control">
								<option value="" >Choose..</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
							@php echo from_input_error_message('gender') @endphp
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
							<input type="text" class="form-control" name=
							"address" id="address" placeholder="Address">
						    @php echo from_input_error_message('address') @endphp
						</div>
					</div>
			
				


					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="picture">Profile Picture / Logo</label>
							<input type="file" class="form-control-file" id="profile" name="profile">
							@php echo from_input_error_message('profile') @endphp
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