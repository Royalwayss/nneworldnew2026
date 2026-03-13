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
							<li class="active">Projects</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Projects </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-style2-area project-inner-sec">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
			<div class="">
			<form>
				<div class="row">
					
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-4 mb-3 search-btn forms-buttons form-group">
						<div class="forms-buttons form-group">
						<span class="input-group-btn">
        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
						</div>
					</div>
					
				</div>


			</form>
		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							<span class="badge new-launch">NEW LAUNCH</span>
							<div class="card-top">
								<div class="image-container">
									<!-- Replace with your actual image path -->
									<img src="front/assets/images/testimonial/1-sale.png" alt="Romell Ariana Building">
									<!-- <span class="badge rera-badge">
													<i class="fas fa-check-circle"></i> RERA
												</span> -->
								</div>
								<div class="details">
									<h2>Omaxe</h2>
									<p class="location">Ludhiana, Punjab</p>
									<div class="price-type">
										<span class="price">₹ 1.79 - 1.83 Cr</span>
										<span class="type">2 BHK Apartment</span>
									</div>
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										15.8% price increase in last 1 year in IC
									</p>
								</div>
							</div>
							<div class="card-bottom">
								<div class="offer">
									<i class="fa fa-tag" aria-hidden="true"></i>
									<span class="offer-text">Get preferred options<br>@zero brokerage</span>
								</div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('project_details') }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
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