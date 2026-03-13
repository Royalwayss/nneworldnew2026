@extends('front.layout.layout')
@section('content')


<main>

    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area" style="background-image: url('{{ asset('front/assets/imgs/processBd.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__left">
                            <h1 class="breadcrumb__title">Processes</h1>
                        </div>
                        <div class="breadcrumb__right">
                            <ul>
								<li> <a href="{{ route('aboutus') }}">About</a> </li>
                                <li> <a href="javascript:;">Processes</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->

    <!-- contact -->
    <section class="contact__area-6 pt-100 pb-150">
        <div class="container policies">
            <div class="about__content pt-0">
                            <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">Our
                            </h2>
                            <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200">Product Insights</h3>
                        </div>
            <p>Revolutionizing Manufacturing Processes: From Design to Endurance Testing</p>
            <p>Our manufacturing journey commences with our talented design specialists in the technical department, who conceptualize trend-setting models while adhering to client specifications and standard operating procedures (SOPs) for bicycle designs. Thorough product validation is conducted through virtual stimulation and DFMEA (Design Failure Mode and Effects Analysis) activities, leading to 3D prototyping. Only upon successful validation, the model progresses to production, with in-house tooling designed using the latest technology.</p>
            <p>To ensure exceptional quality, endurance, and precision, we subject random bikes, prototypes, and special components to rigorous testing in our state-of-the-art laboratory and certified testing facilities equipped with cutting-edge tools and advanced technology. These stringent tests not only uphold our reputation as a coveted manufacturer in India but also internationally.</p>
            <p>The tube preparation phase begins by carefully gathering the raw materials and polishing, cutting, punching, bending, and other meticulous processes. As lean manufacturing advocates, we incorporate quality gates at the end of each line, ensuring error-free products for subsequent operations.</p>
            <p>Our final frame welding process employs our proprietary Industry 4.0 solution, incorporating a unique identification number embedded into every frame. This number is scanned at each station, enabling us to capture crucial data such as welding parameters, quality, and efficiency. All operators are assigned to machines seamlessly connected to our servers, facilitating the collection and storage of data for up to 10 years. This live data can also be remotely accessed, allowing for real-time insights and analysis.</p>
            <p>At every stage of our manufacturing process, we embrace innovation and cutting-edge technologies to deliver superior bicycles that meet the highest performance, durability, and precision standards.</p>
        </div>
    </section>
    <!-- /contact -->



</main>


@endsection