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
							<li class="active">Plans</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Plans</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-style2-area">
	<div class="container-fluid plans-main-space">		
		<!-- <div class="position-relative"> -->
			<div class="row">
				<div class="col-12 arrow-plans-sec">
					<!-- Left Arrow -->
					<button class="scroll-arrow left-arrow btn btn-light plans-left-arrow">
						&#8249;
					</button>
					<!-- Right Arrow -->
					<button class="scroll-arrow right-arrow btn btn-light plans-right-arrow">
						&#8250;
					</button>
				</div>
			</div>
			<div class="row flex-nowrap overflow-auto scroll-container px-4" style="scroll-behavior: smooth;">
			@foreach($plans as $plan)
			<div class="col-12 col-md-6 col-lg-6 col-xl-3 plans-bg-color">
				<div class="pricing-single-items style_two ">
				<div class="alb-date">{{ $plan['discount_percentage'] }}% OFF</div>
					<div class="pricing_inner">
						<div class="pricing-title">
							<h3>{{ strtoupper($plan['plan_name']) }} PLAN</h3>
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="pricing-item-text">
										<span class="currency">₹</span>
										<span class="tk">{{ $plan['price'] }}</span>
									</div>
								</div>
								<div class="col-12 col-md-6 offers-main mt-4">
									<div class="cut-price-main">
								<div class="line"></div>
									<div class="pricing-item-text-cut-value">
										<span class="currency-1">₹</span>
										<span class="tk-1">{{ $plan['mrp_price'] }}</span>

									</div>
								</div>
								</div>
							</div>
							<span class="validity-color">Validity ({{ $plan['validity_in_month'] }} month)</span>
							<div class="package-heading">
						      <h6>Package Includes</h6>
					        </div>
						</div>
					</div>
					<div class="pricing-body ">
						<div class="pricing-feature">
							@php  echo $plan['description']; @endphp
						</div>
					</div>
					
					
				</div>
			</div>
			
			@endforeach
		</div>
	</div>
</section>

<section class="slogan-style2-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="slogan-style2-content">
					<div class="title">
						<h2>We’re Delivering the Best<br> Customer Experience</h2>
					</div>
					<div class="button-box">
						<a class="btn-one" href="{{ route('contactus') }}"><span class="txt">Join Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
