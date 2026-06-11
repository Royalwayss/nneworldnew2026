@extends('front.layout.layout')
@section('content')

<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area story"
        style="background-image: url('{{ asset('front/assets/imgs/detaill-main-2.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">Stories</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
                                <li> <a href="{{ route('aboutus') }}">NNE x CIXI</a> </li>
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
                <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">When versatility meets Chainless
                    technology
                </h2>
                <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">A compact cargo e-bike for a
                    practical everyday lifestyle.</h3>

            </div>
            <p>Cargo bikes are a proven growing product in the European market. The possibility to haul and carry more
                than a backpack makes the humble bicycle a powerful and friendly alternative to heavy traffic while
                maintaining the functionality, practicality, and flexibility required in everyday life. The compact
                cargo format goes one step further, making the larger cargo bike format more accessible and suitable for
                a wider audience and crowded cities.
            </p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_1.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">CliClo by Verdant, is versatility made easy
            </h3>
            <p data-aos="fade-up">A simple architecture elevated by the absence of a chained transmission enables a
                cleaner design that evokes a summer vibe of a vehicle that is capable of keeping up with a busy day
                while still being charming and approachable. Named CliClo, inspired by the Coquelicot ( French for
                poppies ) a notable red flower that spontaneously covers fields every year, symbolizing the lightness
                and tranquility of an upcoming warmer season.
                ​</p>
            <p>
                With an 80 kg carrying capacity, vibrant colors, and a 720 Wh battery, along with the innovative
                pedaling experience and regenerative braking provided by PERS, CliClo offers an efficient and enjoyable
                everyday experience.
            </p>
            <p>
                Additionally, its powerful motor and compact wheels (16” front and 20” rear) enable the bike to climb
                steep hills and navigate narrow city streets. The bike also features adjustable power settings,
                accommodating a wide range of rider sizes, and is equipped with 180 mm rotors for both front and rear,
                ensuring powerful and reliable braking even when carrying heavy loads.
            </p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_2.jpg') }}" alt="Image ">
                <label>Cliclo by Verdant – Tech specs</label>
            </div>
            <h3 class="sec-title">
                A Smooth, Agile, and Fruitful Collaboration
            </h3>
            <p>During the 2023 Eurobike fair, Verdant, the commercial brand of NNE, a robust manufacturer from India
                that has been producing micro-mobility solutions and supporting production and scalability for brands
                around the world since 1950. Found in CIXI’s groundbreaking technology the opportunity to bring its next
                vision project to life.</p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_3.jpg') }}" alt="Image ">
            </div>
            <p>Time flies and after a short year, the R&D teams of NNE and CIXI have maintained a steady, reactive, and
                complementary cadence of work. The outcome is a mature product ready for production. This success is
                attributed to NNE’s extensive experience and the innovative spirit of CIXI, marking a significant
                milestone for CIXI in the industrialization of the PERS system.
            </p>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_4.jpg') }}" alt="Image ">
            </div>
            <p>CIXI engineers, working on Chainless system integration</p>
            <p>
                Reflecting on this journey, the collaboration has exceeded both teams’ expectations, thanks to the
                openness, responsiveness, and dedication. As the NNE team expresses:
            </p>
            <p>
                “CIXI, with its innovative technology, takes us to the future, and NNE’s mission of making this planet
                Verdant by going back in time by adopting sustainable manufacturing, makes this groundbreaking
                collaboration a sweet success, taking us ‘Back to the Future.’
            </p>
            <p>
                CliClo will be presented at Eurobike 2024 in Frankfurt. You can find it at CIXI’s stand D16 Pavilion 08,
                and at NNE’s stand A16 Pavilion 09, or freely riding in the test area.
                For more information, contact the dedicated NNE team:
            </p>
            <div class="quote">
                <h6>Gaurav Bhatia</h6>
                International Business Manager gaurav@nytmobility.com
                <br>
                +91-98884-51108
            </div>
            <h3 class="sec-title">
                More pictures of Cliclo
            </h3>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_5.jpg') }}" alt="Image ">
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_6.jpg') }}" alt="Image ">
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_7.jpg') }}" alt="Image ">
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_8.jpg') }}" alt="Image ">
            </div>
            <div class="susImg storyImg">
                <img data-aos="fade-left" src="{{ asset('front/assets/imgs/article_2_9.jpg') }}" alt="Image ">
            </div>
            <h3 class="sec-title">
                About NNE
            </h3>
            <p>
                Celebrating 75 years in the industry, NNE is a pioneer in developing, manufacturing, and selling
                micro-mobility solutions for both Indian and global markets. With a strong emphasis on sustainability
                and innovation, NNE provides a comprehensive range of finely crafted bikes and parts, manufactured with
                advanced techniques like Industry 4.0.
            </p>
            <p>
                NNE boasts a 38-member R&D team that ensures a seamless transition from concept to production, all under
                one roof. The company operates a vast manufacturing facility spanning over 35,000 m², with a workforce
                of over 700 employees, and aims to scale its annual production capacity from 0.75 million to 1.5 million
                units by Q4 2025. Their product lineup includes bicycles for all ages, e-bikes, pedelecs, ride-ons, kick
                scooters, and cargo bikes.
            </p>
            <p>
                Committed to sustainability, NNE’s “Forest Factory” not only leverages Industry 5.0 capabilities but
                also dedicates 70% of its land to forestation, acting as a carbon sink. The factory employs renewable
                energy and environmentally friendly initiatives, making it one of the lowest CO2 footprint facilities in
                its category and region. NNE aims to achieve net-zero emissions by 2030, already offsetting more CO2
                than it emits as of Q1 2024.
            </p>
            <p>
                Under Project PAWS (People-Air-Water-Soil), NNE collaborates with 80 families across three villages near
                its factory in India, promoting sustainable farming practices and enhancing living standards by focusing
                on air, water, and soil conservation.
            </p>
            <p>For more information, visit <a href="www.forest-factory.eco" target="_blank">www.forest-factory.eco</a>
            </p>

            <h3 class="sec-title">
                About CIXI
            </h3>
            <p>At CIXI Active Mobility, we want to transform ‘passive’ journeys that are part of our busy days into
                moments of conscious effort for a more active and healthy lifestyle. Our patented PERS chainless
                pedaling system is our commitment to make all of this possible. From enabling people to enjoy bicycles
                in a new, reliable, and intuitive way, to empowering the industry to create new geometries free from
                chain constraints, we are envisioning the VIGOZ, an everyday vehicle, weather-protected, that can take
                you pedaling safely up to 120 km/h, to share that our vision of wellness through active mobility is
                possible and within reach for everyone.</p>
            <h3 class="sec-title">
                PERS. Making customized active mobility possible for all

            </h3>
            <p>
                Our patented electronic crankset, without a chain or belt, removes the geometric constraints of
                mechanical transmission to create new types of active vehicles. The PERS (Pedaling Energy Recovery
                System), is the heart of the chainless system, capable of managing, supporting, and connecting the
                electronic environment of the vehicle. By removing the chain, we enable geometric flexibility in design,
                allowing for the creation of new Active Vehicles never seen before. This innovative technology augments
                human energy, offering a tailor-made experience by adapting pedal resistance to the rider’s style.
            </p>
            <p>For more information, visit <a href="https://www.cixi.life/pers-technology"
                    target="_blank">cixi.life/pers-technology</a></p>

        </div>
        </div>
    </section>
    <!-- /contact -->



    @endsection