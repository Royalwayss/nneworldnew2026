@extends('front.layout.layout')
@section('content') 
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url({{ asset('front/assets/images/banner-forms.jpg') }});">
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
                @if(!empty(($project['auction_id'])))
				<!-- Header: Auction ID -->
				<div class="header-bar d-flex justify-content-between align-items-center">
					<span>Auction ID : # {{ $project['auction_id'] }}</span>
					<!-- <i class="fa fa-phone text-white  mr-2" aria-hidden="true"></i> -->
					<i class="fa fa-user text-white" aria-hidden="true"></i>
				</div>
                @endif
				<!-- Main Title Block -->
				<div class="content-block title-section">
					@if(!empty(($project['location'])))
					<h1>{{ $project['location'] }}</h1>
					@endif
					<div class="d-flex flex-wrap">
						<div class="info-item mb-2">
						<i class="fa fa-home" aria-hidden="true"></i> Residential
						</div>
						<div class="info-item mb-2">
						<i class="fa fa-map-marker  " aria-hidden="true"></i> {{ $project['city'] }}
						</div>
						<div class="info-item mb-2">
						@if(!empty(($project['auction_time'])))
						<i class="fa fa-calendar" aria-hidden="true"></i>{{  date("F-d,Y g:i a", strtotime($project['auction_time']))   }}
						@endif
						</div>
					</div>
				</div>

				<!-- Bank Details Block -->
				<div class="content-block">
					<h5 class="section-title">Project Details</h5>
					<div class="row">  
						<div class="col-md-12 col-lg-6 details-list">
							@if(!empty(($project['property_name'])))
							<p><strong>Project Name :</strong> {{ $project['property_name'] }}</p>
						    @endif
							
							<p><strong>Product Type:</strong> {{ $project['category']['name'] }}</p>
						  
							@if(!empty(($project['bank_name'])))
							<p><strong>Bank Name :</strong> <span class="highlight-orange">{{ $project['bank_name'] }}</span></p>
							@endif
							@if(!empty(($project['reserve_price'])))
							<p><strong>Reserve Price :</strong> ₹{{ $project['reserve_price'] }}</p>
							@endif
							@if(!empty(($project['emd'])))
							<p><strong>EMD :</strong> ₹{{ $project['emd'] }}</p>
							@endif
							@if(!empty(($project['branch_name'])))
							<p><strong>Branch Name :</strong> {{ $project['branch_name'] }}</p>
							@endif
							@if(!empty(($project['service_provider'])))
							<p><strong>Service Provider :</strong> {{ $project['service_provider'] }}</p>
						    @endif
							
							@if(!empty(($project['location'])))
							<p><strong>Location :</strong> {{ $project['location'] }}</p>
						    @endif 
							
							@if(!empty(($project['rera_approved'])))
							<p><strong>Rera Approved :</strong> {{ $project['rera_approved'] }}</p>
						    @endif 
							
							
							@if(!empty(($project['assured_return'])))
							<p><strong>Assured Return :</strong> {{ $project['assured_return'] }}</p>
						    @endif 
							
							
							@if(!empty(($project['minimum_investment'])))
							<p><strong>Minimum Investment :</strong> {{ $project['minimum_investment'] }}</p>
						    @endif 
							
							@if(!empty(($project['maximum_investment'])))
							<p><strong>Maximum Investment :</strong> {{ $project['maximum_investment'] }}</p>
						    @endif 
							
							@if(!empty(($project['brand_name'])))
							<p><strong>Brand Name :</strong> {{ $project['brand_name'] }}</p>
						    @endif 
							
							@if(!empty(($project['property_area'])))
							<p><strong>Property Area :</strong> {{ $project['property_area'] }}</p>
						    @endif 
							
							@if(!empty(($project['testtt'])))
							<p><strong>testtt :</strong> {{ $project['testtt'] }}</p>
						    @endif 
							
							
							
						</div>
						@if(!empty((trim($project['contact_details']))))
						<div class="col-md-12 col-lg-6 contact-details-block text-md-right">
							<p><strong>Contact Details :</strong></p>
							<p>@php echo  trim($project['contact_details']); @endphp</p>
						</div>
						@endif
					</div>
				</div>
                @if(Auth::user() && Auth::user()->signup_type == 'project-enquire') 
				<!-- Description Block -->
				<div class="content-block">
					<h5 class="section-title">Description</h5>
					<div class="description-text">
						@php echo $project['description']; @endphp
					</div>
					<div class="description-footer">
						<div class="row">
							@if(!empty(($project['state'])))
							<div class="col-md-4 mb-2 mb-md-0">
								<strong>Province/State :</strong> <span class="highlight-orange">{{ $project['state'] }}</span>
							</div>
							@endif
							@if(!empty(($project['city'])))
							<div class="col-md-4 mb-2 mb-md-0">
								<strong>City/Town :</strong> <span class="highlight-orange">{{ $project['city'] }}</span>
							</div>
							@endif
							@if(!empty(($project['area'])))
							<div class="col-md-4">
								<strong>Area/Town :</strong> <span class="highlight-orange">{{ $project['area'] }}</span>
							</div>
							@endif
						</div>
					</div>
				</div>
				@else
					<div class="content-block text-center">
						<a href="{{ route('userlogin') }}">
							 <button type="button" class="btn btn-primary">
								View More
							</button>
						</a>
					</div>
                @endif

			</div>
			
			@include('front.pages.projects.details.images')
			
			
			

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