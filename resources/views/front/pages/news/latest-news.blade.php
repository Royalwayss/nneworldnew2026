@extends('front.layout.layout')
@section('content')
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(front/assets/images/banner-gallery.jpg);">
    </div>
    <div class="shape-box"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">

                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Latest News</li>
                        </ul>
                    </div>
                    <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-style2-area">
    <section class="faq-page-one">
        <div class="container">
            <h5 class="text-danger font-weight-bold mb-5">Latest News <span class="text-danger"></span></h5>

            <div class="notice-container">
                <div class="notice-list">
                    <!-- Duplicate items for smooth looping -->
                   
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf" target="_blank">Hostel Update</a></span>
                       <a href=""><span class="notice-date">April 29, 2025</span></a>
                    </div>

               
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf" target="_blank">PCI Inspection Notice</a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf" target="_blank">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf" target="_blank">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf" target="_blank">PCI Inspection Notice</a></a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">PCI Inspection Notice</a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>

                    <!-- Repeat again for seamless loop -->
                    <div class="notice-item">
                        <span><a href="front/assets/images/dummy.pdf">Hostel Update</a></span>
                       <a href=""><span class="notice-date">April 29, 2025</span></a>
                    </div>

               
                    <div class="notice-item">
                        <span><a href="">PCI Inspection Notice</a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>
                    <div class="notice-item">
                    <span><a href="front/assets/images/dummy.pdf">PCI Inspection Notice1</a></a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">PCI Inspection Notice</a></span>
                        <span class="notice-date">March 13, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Resignation Update</a></span>
                        <span class="notice-date">April 24, 2025</span>
                    </div>
                    <div class="notice-item">
                        <span><a href="">Hostel Update</a></span>
                        <span class="notice-date">April 29, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
<!--End Main Contact Form Area-->

@endsection