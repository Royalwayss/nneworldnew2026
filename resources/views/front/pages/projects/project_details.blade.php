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
							<li class="active">Property Details</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Property Details </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-style2-area project-inner-sec">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-8">
				<!--Start Single Team Style1-->

				<!-- Header: Auction ID -->
				<div class="header-bar d-flex justify-content-between align-items-center">
					<span>Auction ID : # 509508</span>
					<!-- <i class="fa fa-phone text-white  mr-2" aria-hidden="true"></i> -->
					<i class="fa fa-user text-white" aria-hidden="true"></i>
				</div>

				<!-- Main Title Block -->
				<div class="content-block title-section">
					<h1>Bandhan Bank Plot Auction in Bhamian kalan, Ludhiana</h1>
					<div class="d-flex flex-wrap">
						<div class="info-item mb-2">
						<i class="fa fa-home" aria-hidden="true"></i> Residential
						</div>
						<div class="info-item mb-2">
						<i class="fa fa-map-marker  " aria-hidden="true"></i> Ludhiana
						</div>
						<div class="info-item mb-2">
						<i class="fa fa-calendar" aria-hidden="true"></i> 626-06-2025 03:00 PM
						</div>
					</div>
				</div>

				<!-- Bank Details Block -->
				<div class="content-block">
					<h5 class="section-title">Bank Details</h5>
					<div class="row">
						<div class="col-md-12 col-lg-6 details-list">
							<p><strong>Bank Name :</strong> <span class="highlight-orange">Bandhan Bank</span></p>
							<p><strong>Reserve Price :</strong> ₹1,33,36,600.00</p>
							<p><strong>EMD :</strong> ₹13,33,660.00</p>
							<p><strong>Branch Name :</strong> Registered Office</p>
							<p><strong>Service Provider :</strong> matex.net</p>
						</div>
						<div class="col-md-12 col-lg-6 contact-details-block text-md-right">
							<p><strong>Contact Details :</strong></p>
							<p><span class="highlight-orange">Mr. Gaurav Mishra</span> (Mobile No : <span
									class="highlight-orange">7080014353</span>)</p>
						</div>
					</div>
				</div>

				<!-- Description Block -->
				<div class="content-block">
					<h5 class="section-title">Description</h5>
					<div class="description-text">
						<p><strong>Property-1: Location/Description of the property:</strong> Property constructed
							on plot measuring 50 square yards situated in Village Bhamian Kalan, Ludhiana and
							comprised of Khata No. 183/189 to 190/1, 187/194, 195 Khasra No. 32//2/1, 22, 9, 12,
							33//5/2, 7/1, 14/2, 15, 16, 17/1, 32//19, 20, 21, 33//24/2, 25, 37//13, 6, 7/1 as
							entered in the Jamabandi for the years 2003-2004 of Village Bhamian Kalan Hadbast No.
							181 Tehsil and District Ludhiana, Punjab. Boundaries: East: Seller, Up to 25'0", West:
							Seller, Up to 25'0", North: Passage: Up to 18'0", South: Neighbour, Up to 18'0"</p>
						<p><strong>Property-2: Location/Description of the property:</strong> Property constructed
							on plot measuring 82 square yards situated in Village Bhamian Kalan, Ludhiana and
							comprised of Khata No. 183/189 to 190/1, 187/194, 195 Khasra No. 32//2/1, 22, 9, 12,
							33//5/2, 7/1, 14/2, 15, 16, 17/1, 32//19, 20, 21, 33//24/2, 25, 37//13, 6, 7/1 as
							entered in the Jamabandi for the years 2003-2004 of Village Bhamian Kalan Hadbast No.
							181 Tehsil and District Ludhiana, Punjab. Boundaries: East: Road 40' wide, Up to 30'0",
							West: Neighbour, Up to 20'0", North: Palwinder Singh, Up to 30'0", South: Neighbour, Up
							to 30'0"</p>
						<p><strong>Property-3: Location/Description of the property:</strong> Property shop
							measuring 25 square yards situated in Village Bhamian Kalan, Ludhiana and comprised of
							Khata No. 183/189 to 190/1, 187/194, 195 Khasra No. 32//2/1, 22, 9, 12, 33//5/2, 7/1,
							14/2, 15, 16, 17/1, 32//19, 20, 21, 33//24/2, 25, 37//13, 6, 7/1 as entered in the
							Jamabandi for the years 2003-2004 of Village Bhamian Kalan Hadbast No. 181 Tehsil and
							District Ludhiana, Punjab. Boundaries: East: Road 40' wide, Up to 25'0", West: Ved
							Prakash, Up to 25'0", North: Road, Up to 9'0", South: Neighbour, Up to 9'0"</p>
					</div>
					<div class="description-footer">
						<div class="row">
							<div class="col-md-4 mb-2 mb-md-0">
								<strong>Province/State :</strong> <span class="highlight-orange">Punjab</span>
							</div>
							<div class="col-md-4 mb-2 mb-md-0">
								<strong>City/Town :</strong> <span class="highlight-orange">Ludhiana</span>
							</div>
							<div class="col-md-4">
								<strong>Area/Town :</strong> <span class="highlight-orange">Bhamian kalan</span>
							</div>
						</div>
					</div>
				</div>


			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-12 mb-5">
						<div class="property-images">
							<img src="front/assets/images/projects/p-1.jpg">
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-12 mb-5">
						<div class="property-images">
							<img src="front/assets/images/projects/p-2.jpg">
						</div>
					</div>
					
				</div>

			</div>

		</div>
	</div>
</section>
<!--Start Slogan Style2 Area-->
<section class="slogan-style2-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="slogan-style2-content">
					<div class="title">
						<h2>We’re Delivering the Best<br> Customer Experience</h2>
					</div>
					<div class="button-box">
						<a class="btn-one" href="#"><span class="txt">Join Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection