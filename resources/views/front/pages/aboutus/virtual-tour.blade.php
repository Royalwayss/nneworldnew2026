@extends('front.layout.layout')
@section('content')


<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area" style="background-image: url('{{ asset('front/assets/imgs/tour.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">Virtual Tour</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
								<li> <a href="{{ route('aboutus') }}">About</a> </li>
                                <li> <a href="javascript:;">Virtual Tour</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->
    <section class="contact__area-6 pt-100 pb-150">

        <div class="container">
            <div class="about__content pt-0">
                        <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">Experience Innovation with
                        </h2>
                        <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200"> Navyug Namdhari Eco Drive Pvt Ltd (NNE)</h3>
</div>
            <div class="youtube">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RWrvQZcxWo8?si=sqvKRH4PuLZMNCCX"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>




</main>

@endsection