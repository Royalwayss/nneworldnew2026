@extends('front.layout.layout')
@section('content')

<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area" style="background-image: url('{{ asset('front/assets/imgs/susBd.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">Sustainability</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
                                <li> <a href="{{ route('aboutus') }}">About</a> </li>
                                <li> <a href="javascript:;">Sustainability</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->

    <!-- contact -->
    <section class="contact__area-6 pb-150">
        <div class="container sus">


            <!-- Intro -->
            <div class="sustain__section">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="content text-center">
                            <h2 class="sec-subtitle">Sustainability at NNE</h2>
                            <h2 class="sec-title">Beyond Sustainability. Towards Regeneration.</h2>
                            <p class="hero-p">
                                At NNE, sustainability is not a checkbox – it’s a transformation. We don’t just reduce
                                impact; we actively <strong>Restore ecosystems, Empower communities and Redesign
                                    manufacturing for the future</strong>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <!-- IMAGE HERE -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forest Factory -->
            <div class="sustain__section">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">The Forest Factory</h2>
                            <h3 class="sec-title">Where Industry Meets Ecology</h3>
                            <p>Our “Factory of Tomorrow” is built around a radical idea: manufacturing and nature can
                                coexist.</p>
                            <ul>
                                <li><strong>15+ acres</strong> dedicated to forest development</li>
                                <li><strong>5+ km</strong> bike test track integrated within green ecosystems</li>
                                <li>Designed to become <strong>carbon neutral by 2030/31</strong></li>
                                <li>Built to create a new industrial standard</li>
                            </ul>
                            <p>This is not a factory with trees.<br>This is a forest that manufactures responsibly.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-placeholder">
                            <video muted autoplay playsinline loop controls
                                src="{{ asset('front/assets/imgs/bg.mp4') }}"></video>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carbon Sink -->
            <div class="sustain__section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">Carbon Sink Initiative</h2>
                            <h3 class="sec-title">We Don’t Offset. We Absorb.</h3>
                            <p>Through our carbon sink project, we actively capture carbon – not just reduce emissions.
                            </p>
                            <ul>
                                <li><strong>15-acre</strong> forest already developed</li>
                                <li>Target: <strong>100+ acres by 2030</strong></li>
                                <li>Carbon stored through soil, trees, and biodiversity systems</li>
                            </ul>
                            <p>We are engineering a future where industries become net contributors to the planet.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/carbon-sink.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Circular Economy -->
            <div class="sustain__section">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">Circular Economy in Action</h2>
                            <h3 class="sec-title">From Waste to Value</h3>
                            <p>We redesign materials and processes to eliminate waste at the source.</p>
                            <ul>
                                <li><strong>100% recycled rubber</strong> used in laminated wheels</li>
                                <li><strong>~350 tons</strong> annual carbon footprint reduction</li>
                                <li>Material innovation reducing steel thickness <strong>(5mm → 3.2mm)</strong></li>
                                <li><strong>~85 tons</strong> of additional emission reduction annually</li>
                            </ul>
                            <p>For us, sustainability means closing loops, not managing waste.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/ce.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Renewable Energy -->
            <div class="sustain__section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">Renewable Energy Transition</h2>
                            <h3 class="sec-title">Powering the Shift to Clean Energy</h3>
                            <p>We are rapidly transitioning towards renewable energy across operations:</p>
                            <ul>
                                <li><strong>25% renewable by 2026</strong></li>
                                <li><strong>80% by 2027</strong></li>
                                <li><strong>100% by 2028</strong></li>
                            </ul>
                            <p>Our goal is clear: energy independence with zero environmental compromise.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/renew.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- People Air Water Soil -->
            <div class="sustain__section full-width">

                <div class="content text-center mb-4">
                    <h2 class="sec-subtitle">People. Air. Water. Soil.</h2>
                    <h3 class="sec-title">Reviving the Fundamentals of Life</h3>
                    <p class="hero-p">
                        We believe real sustainability begins where impact is the highest – people and agriculture.
                        That’s where ecosystems are shaped, and that’s where transformation truly scales.
                    </p>
                </div>

                <!-- Nav Tabs -->
                <ul class="nav nav-pills justify-content-center mb-4 flex-wrap" id="sustainTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#people">PEOPLE</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#air">AIR</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#water">WATER</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#soil">SOIL</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">

                    <!-- PEOPLE -->
                    <div class="tab-pane fade show active" id="people">
                        <div class="row align-items-center g-4 mt-2">

                            <div class="col-lg-6 col-12">
                                <div class="content">
                                    <h4 class="sec-title">PEOPLE: Driving Change at the Source</h4>
                                    <ul>
                                        <li>~50% of India’s land and population is engaged in agriculture.</li>
                                        <li>That’s larger than the entire EU population.</li>
                                        <li>By educating and empowering farmers, we create an exponential environmental
                                            impact.</li>
                                        <li>Our approach focuses on awareness, training, and behavioural change at the
                                            grassroots.</li>
                                        <li>Because when people change, systems follow.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="image-placeholder">
                                    <img src="{{ asset('front/assets/imgs/people.jpg') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- AIR -->
                    <div class="tab-pane fade" id="air">
                        <div class="row align-items-center g-4 mt-2">

                            <div class="col-lg-6 col-12">
                                <div class="content">
                                    <h4 class="sec-title">AIR: Eliminating the Root Cause</h4>
                                    <p>We don’t just measure emissions – we work to eliminate them at the source.</p>
                                    <ul>
                                        <li>Burning 1 ton of paddy straw releases ~1.5 tons of greenhouse gases</li>
                                        <li>~1,460 kg CO₂ per ton (major contributor to global warming)</li>
                                        <li>~60 kg CO (toxic, impacts oxygen transport in the body)</li>
                                        <li>3–12 kg particulate matter (PM2.5/PM10) harmful to the lungs</li>
                                        <li>~199 kg ash and additional trace gases (SO₂, CH₄, NOx)</li>
                                    </ul>
                                    <p><strong>Our Action:</strong></p>
                                    <ul>
                                        <li>Stubble management across: 33 acres (2021) → 2782 acres (2025) → 3000-acre
                                            target (2026)</li>
                                        <li>Converting agricultural waste into Bio-CNG fuel</li>
                                        <li>GPS-based field tracking for transparency and efficiency</li>
                                    </ul>
                                    <p>We’re not reducing pollution.<br>We’re preventing it from being created.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="image-placeholder">
                                    <img src="{{ asset('front/assets/imgs/air.jpg') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- WATER -->
                    <div class="tab-pane fade" id="water">
                        <div class="row align-items-center g-4 mt-2">

                            <div class="col-lg-6 col-12">
                                <div class="content">
                                    <h4 class="sec-title">WATER: Smarter, Sustainable Farming</h4>
                                    <ul>
                                        <li>5-acre research facility dedicated to alternative farming</li>
                                        <li>Target: 50% reduction in water consumption by 2027</li>
                                        <li>Promoting techniques that reduce dependency on water-intensive practices
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="image-placeholder">
                                    <img src="{{ asset('front/assets/imgs/water.jpg') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- SOIL -->
                    <div class="tab-pane fade" id="soil">
                        <div class="row align-items-center g-4 mt-2">

                            <div class="col-lg-6 col-12">
                                <div class="content">
                                    <h4 class="sec-title">SOIL: Regeneration, Not Just Preservation</h4>
                                    <ul>
                                        <li>300% increase in soil organic matter within 48 months</li>
                                        <li>Training farmers to improve fertility and yield sustainably</li>
                                        <li>Enhancing long-term agricultural productivity</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="image-placeholder">
                                    <img src="{{ asset('front/assets/imgs/soil.jpg') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Society -->
            <div class="sustain__section">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">Society & Community (SCR)</h2>
                            <h3 class="sec-title">Sustainability That Includes People</h3>
                            <p>Our initiatives extend beyond the environment into social impact:</p>
                            <ul>
                                <li>Tree plantation drives</li>
                                <li>Free health check-ups</li>
                                <li>Cancer awareness programs</li>
                                <li>Farmer education & soil conservation</li>
                                <li>Plastic-free campaigns</li>
                                <li>Skill development programs</li>
                            </ul>
                            <p>We believe sustainability is incomplete without human progress.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/scr.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forest Development -->
            <div class="sustain__section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">Forest Development</h2>
                            <h3 class="sec-title">Engineering Living Ecosystems</h3>
                            <ul>
                                <li><strong>9,500+</strong>plants grown (2021–2025)</li>
                                <li><strong>20-acre</strong> forest with 46+ species</li>
                                <li><strong>Nitrogen-fixing</strong> ecosystems improve soil health</li>
                                <li><strong>80% water savings</strong> through drip irrigation</li>
                            </ul>
                            <p>This is sustainability designed to sustain itself.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/forest-dev.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- One Earth -->
            <div class="sustain__section">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="sec-subtitle">One Earth Initiative</h2>
                            <h3 class="sec-title">Scaling Impact, One Tree at a Time</h3>
                            <ul>
                                <li>1 tree planted for every e-bike export</li>
                                <li>1 tree for every push bike shipment</li>
                                <li>20,000+ trees planted</li>
                                <li>Target: 1 million trees by 2030</li>
                            </ul>
                            <p>Because every product we ship should leave the planet better than before.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-placeholder">
                            <img src="{{ asset('front/assets/imgs/1e.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Philosophy -->
            <div class=" center">
                <div class="content text-center">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                        <h2 class="sec-subtitle">Our Philosophy</h2>
                        <h4 class="sec-title">People. Planet. Progress.</h4>
                        <ul>
                            <li>People are empowered</li>
                            <li>Planet is restored</li>
                            <li>Progress is redefined</li>
                        </ul>
                        <p class="hero-p">
                            We align with global sustainability frameworks while creating our own path – where:
                        </p>
                        <p class="hero-p">
                            We don’t treat sustainability as an environmental function.
                            We treat it as a human movement – powered by people, proven through impact.
                        </p>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- /contact -->



    @endsection