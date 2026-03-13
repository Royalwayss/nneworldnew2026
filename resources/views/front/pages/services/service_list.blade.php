@extends('front.layout.layout')
@section('content') 
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url( {{ asset('front/assets/images/banner-forms.jpg') }});">
	</div>
	<div class="shape-box"></div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="inner-content">

					<div class="breadcrumb-menu">
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li class="active">Services</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>Services</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Start Service Style2 Area-->
<section class="service-style2-area">
    <div class="service-style2--primary-bg"></div>
    <div class="container-fluid px-5">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="border-box"></div>
                <h3>Our Services</h3>
            </div>
            <h2>What We’re Offering </h2>
            <!-- <h6>REAL ESTATE INVESTMENT PLANNING </h6> -->
        </div>
        <div class="row text-right-rtl">
           
            
			@foreach($services as $service)
			<div class="col-12 col-md-6 col-xl-4 col-lg-4 px-4 mb-5 wow fadeInUp" data-wow-delay="00ms"
                data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                        <img src="{{ asset('front/assets/images/services/'.$service['image']) }}" alt="">
                        </div>
                        <div class="icon new-icons-services">
                            <!-- <span class="icon-creative"></span> -->
                            <img src="{{  asset('front/assets/images/icon/'.$service['icon']) }}">
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('services',[$service['seo_unique_url']]) }}">{{ $service['name'] }}</a></h3>
                        <div class="text">
                            <p> @php echo $service['short_description']; @endphp  ...</p>

                         
                            
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('services',[$service['seo_unique_url']]) }}"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
			@endforeach
			
           
        </div>
    </div>

</section>
<!--End Service Style2 Area-->


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
<!--End Slogan Style2 Area-->


@endsection