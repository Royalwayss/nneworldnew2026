@extends('front.layout.layout')
@section('content')

<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area story" style="background-image: url('{{ asset('front/assets/imgs/detaill-main-1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">Stories</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
                                <li> <a href="{{ route('aboutus') }}">Stories Omm Holi</a> </li>
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
            <div class="about__content">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">Holii
                    </h2>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://nneworld.com/stories" target="_blank"> <i class="fab fa-linkedin" style="font-size: 32px;"></i></a>
                </div>
                <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">A smart, compact, cargo chainless e-bike
                    designed for everyday life.</h3>
                <p data-aos="fade-up">Omm• introduces Holii, a multi-utility e-bike powered by PERS, CIXI’s patented
                    chainless pedaling system. Designed & co-manufactured in collaboration with NNE, India, Holii brings
                    a new rhythm to city life: smooth, silent, and adaptable. It’s the first bike of its kind to enter
                    production with this technology, marking a shift in how e-bikes can look, feel, and move.​</p>
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_1.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">Built to Move People and Things</h3>
            <p data-aos="fade-up">Holii is designed to meet the needs of modern urban riders. The front basket
                transforms into a child seat with a safety foldable component. A custom-designed removable bag slides
                into the space between the twin top tubes. Adjustable sidebars accommodate various loads, from groceries
                to gear.​</p>
            <p>
                Compact yet capable, Holii measures 202 cm in length, 66 cm in width, and weighs 48 kg. With a load
                capacity of 80 kg and a 720 Wh battery, it’s equipped for heavy use. Its compact 16” front and 20” rear
                wheels, plus hydraulic brakes with 180 mm rotors, ensure safe, stable handling in tight urban spaces.
            </p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title">
                Powered by PERS Chainless, hassle-free, and regenerative
            </h3>
            <p>At the heart of Holii is the PERS Chainless Pedaling System, developed by CIXI in Annecy, France. Instead
                of a traditional chain and gears, you pedal to generate electricity. That energy powers the motor
                directly, and pedaling backward activates regenerative braking, recharging the battery while you ride.
                PERS makes the ride feel natural, smooth, and consistent. It requires no drivetrain maintenance. No
                chain to clean. No derailleur to adjust. And it frees the frame to be reimagined, unlocking new forms
                and functions that would be impossible with a traditional transmission. Riders also benefit from smart
                features, including remote lock/unlock, GPS tracking, and ride data, all accessible via their
                smartphone.</p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_3.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title">
                Movement Becomes a Celebration
            </h3>
            <p>Inspired by India’s cultural richness, Holii carries the spirit of Holi, the festival of color and joy.
                Its design language reflects that same energy, playful, adaptable, and full of life.
            </p>
            <p>
                Omm• turns mobility into a statement of identity. The brand draws from Indian traditions to create a
                tactile, expressive, and visual experience. The result is more than a bike. It’s a moving object of
                design, crafted to resonate with New Bohemians, a generation that values craftsmanship, quiet luxury,
                and emotional connection over convention.
            </p>
            <div class="quote">
                “We believe movement should feel as meaningful and immersive as a festival, a ritual, or a piece of art.
                Our mission is simple: make every ride a celebration.”
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_5.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title">
                A Radical Approach
            </h3>
            <p>In a market crowded with efficiency slogans, Omm• offers a different perspective. What if riding wasn’t
                just sustainable or high-performance, but joyful? Holii is not just a new vehicle. It’s part of a
                radical shift in how people experience movement.</p>
            <p>
                Vibrant colorways, inspired by Indian festivals, replace the cold, tech-like palettes. These are not
                just aesthetic choices; they represent prosperity, energy, and vitality.
            </p>
            <h4>
                From a Trade Show Meeting to the Streets
            </h4>
            <p>
                The journey began at Eurobike 2023, where NNE first discovered the PERS system. Within a year, design
                and engineering teams from Ludhiana and Annecy brought Holii from concept to production, a rare pace in
                the industry.
            </p>
            <div class="quote">
                “CIXI takes us into the future. NNE brings us back to sustainable roots. Together, it’s a sweet success,
                back to the future.”
            </div>
            <p>This collaboration marks the first time PERS has been industrialized at scale, signaling a new chapter
                for both companies.</p>
            <h3 class="sec-title">
                On Display at Eurobike 2025
            </h3>
            <p>
                Holii will be presented at Eurobike 2025 in Frankfurt, alongside its big brother Diwalii, a Pedelec designed for freedom, flexibility, and fun. Find Holii & Diwalii at NNE – Stand G66, Pavilion 09, and CIXI – Stand G28, Pavilion 08. Or catch it in motion in the test area.
            </p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_6.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title">
                Holii is just the beginning.
            </h3>
            <p>A Pedelec model, Diwalii, will also debut at Eurobike, with more designs in the pipeline, all built around the chainless PERS system. Both Holii and Diwalii, along with future models, will be available for purchase on the Active Pilot Shop, a new marketplace dedicated to active vehicles powered by PERS Chainless Technology, developed by CIXI. For Omm•, this is a new chapter. Because when design, culture, and smart engineering come together, movement stops being routine and becomes something worth celebrating.</p>
            <h3 class="sec-title">
                Join the movement. Celebrate every ride.
            </h3>
        </div>
        </div>
    </section>
    <!-- /contact -->



    @endsection