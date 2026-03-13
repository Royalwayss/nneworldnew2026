@extends('front.layout.layout')
@section('content')


<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area" style="background-image: url('{{ asset('front/assets/imgs/aboutBd.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">About Us</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
                                <li> <a href="{{ route('home') }}">Home</a> </li>
                                <li> <a href="javascript:;">About Us</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->

    <!-- About area start -->
    <section class="about__area-6 pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
                    <div class="main-img">
                        <img class="m-0" data-aos="fade-right" data-aos-delay="100" src="{{ asset('front/assets/imgs/aboutMission.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
                    <div class="about__content pt-0">
                        <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">ABOUT US
                        </h2>
                        <h3 class="sec-title">NNE AT A GLANCE:</h3>
                        <div class="p-animation">
                            <p>NNE is a story of vision, dedication, and a passion to innovate. Our story began with a
                                vision and mission aligned with the intelligentsia that founded NNE. From the outset our
                                objective has been to deliver an unparalleled experience to leading global brands by
                                integrating futuristic technology into our bicycles. We achieve this through extensive
                                research, planning, and design, cultivating a growing list of prestigious clients and
                                collaborations with industry-leading global brands.</p>
                            <p>Set in the scenic landscape of locale India we have three operational plants with an
                                upcoming bicycle manufacturing facility in progress, with a combined area that spans
                                over 6500 Sq. meter. </p>
                            <p>With a legacy spanning over seven decades and millions of bicycles, we are committed to
                                building a future anchored in smart, sustainable, and innovative solutions. These
                                principles form the bedrock of our capabilities, enabling us to create bicycles that
                                will endure for generations while proudly embodying India’s essence.</p>
                            <p>As we take strides towards a future of autonomy as a major bicycle manufacturer, NNE is
                                dedicated to supporting renowned international brands that cater to the burgeoning
                                mobility industry. Our extensive R&D has helped NNE to extend its growing list of
                                clients continuously, brands that are leading players in the bicycle industry and have
                                continued to partner with us on our journey of growth on a global scale.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('front/assets/imgs/shape/6.png') }}" alt="Zigzag Shape" class="shape">
    </section>
    <!-- About area end -->
    <!-- Counter area start -->
    <section class="counter__area-6">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="counter__inner flx">
                        <div class="counter__item">
                            <div class="counter__number counter_slow underline-5">75+ <span>75+</span></div>
                            <h3 class="counter__title underline-2">Years of <br> Experience</h3>
                        </div>
                        <div class="counter__item">
                            <div class="counter__number counter_slow underline-5">25+ <span>25+</span></div>
                            <h3 class="counter__title underline-2">Countries <br>Network</h3>
                        </div>
                        <div class="counter__item">
                            <div class="counter__number counter_slow underline-5">1000+ <span>1000+</span></div>
                            <h3 class="counter__title underline-2">Team <br>Members </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter area end -->


    <!-- mission vision area start -->
    <section class="who__area-6 pt-170 pb-120 missionVis">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="who__left ">
                        <div class="about__content pt-0">
                            <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">who we are
                            </h2>
                            <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200">Transforming ideas <br>
                                into reality</h3>
                        </div>
                        <div class="who__features">
                            <div class="who__feature d-block" data-aos="fade-left" data-aos-delay="100">
                                <div class="number">
                                </div>
                                <div class="who__content">
                                    <h4 class="title">Our Purpose </h4>
                                    <p>At Navyug Namdhari Eco Drive, our purpose is to create meaningful environmental impact by adopting sustainable manufacturing practices and advancing micro-mobility solutions. We aim to redefine the future of transportation by making it smarter, cleaner, and more accessible – while committing to becoming <strong>carbon negative by 2030.</strong> Our vision is to be the difference in how mobility supports both people and the planet. </p>
                                </div>
                            </div>
                            <div class="who__feature d-block" data-aos="fade-right" data-aos-delay="200">
                                <div class="who__content">
                                    <h4 class="title">OUR Mission</h4>
                                    <p> Our mission is to build long-term value for our stakeholders while addressing one of humanity’s most pressing challenges – sustainable mobility. We strive to go beyond conventional bicycles by developing intelligent, future-ready transportation solutions that balance profitability with responsibility. For us, progress means innovation with purpose. </p>
                                </div>
                            </div>
                            <div class="who__feature d-block" data-aos="fade-right" data-aos-delay="200">
                                <div class="who__content">
                                    <h4 class="title">Our Values</h4>
                                    <p>Everything we do at NNE is guided by four core pillars:</p>
                                    <ul>
  <li><strong>Innovation</strong> – Constantly pushing boundaries in design, technology and engineering.</li>
  <li><strong>Eco-Friendly Thinking</strong> – Embedding sustainability into every process and product.</li>
  <li><strong>Smart Customer Value</strong> – Delivering meaningful, practical and scalable solutions.</li>
  <li><strong>Respect</strong> – For people, partnerships, communities and the environment.</li>
</ul>

                                    <p> These values shape our culture, decisions and long-term direction. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="who__right">
                        <div class="main-img">
                            <img class="m-0" data-aos="fade-up" data-aos-delay="100" src="{{ asset('front/assets/imgs/mision.jpg') }}" alt="Image">
                        </div>
                        <img src="{{ asset('front/assets/imgs/shape/7.png') }}" alt="Shape" class="shape">
                        <img src="{{ asset('front/assets/imgs/shape/12.png') }}" alt="Shape" class="shape-2">
                        <img src="{{ asset('front/assets/imgs/shape/13.png') }}" alt="Shape" class="shape-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission vision area end -->




</main>


@endsection