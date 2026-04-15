<?php $__env->startSection('content'); ?>
<section class="hero">
   <div class="hero-container">
      <h1 class="hero-title" style="--shift-to-y: -355px;"><span>Experience The Power of</span> NNE World</h1>
   </div>
   <div class="hero-shape">
      <!-- <img class="hero-img" src="https://iili.io/HOlkfV4.jpg" alt="Flower studio preview"> -->
      <video autoplay muted playsinline loop src="front/assets/video/nneHero.mp4" class="hero-video"></video>
      <div class="overlay"></div>
   </div>
</section>
<section class="service__area pt-150 pb-130">
   <div class="container">
      <div class="bg-light1 border-radius-25 pt-120 px-lg-5 px-4 pb-90 pb-120">
         <div class="row pb-120">
            <div class="col-xxl-7 col-xl-7 col-xl-7">
               <div class="service__title-wrap" data-aos="fade-up">
                  <h2 class="sec-subtitle">Our Categories
                  </h2>
                  <h3 class="sec-title" data-aos="fade-up">Micro Mobility Solutions Tailored to Every Need</h3>
               </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-xl-5">
               <div class="service__text  pt-0">
                  <p class="ms-0" data-aos="fade-left">Explore our wide range of solutions including OEM & ODM bicycle
                     manufacturing,
                     premium e-bikes, and high-performance components. Whether you're building your brand or
                     enhancing your product line, our categories cover everything from innovation to scalability.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="service-inner px-lg-5 px-4">
         <div class="row pt-4">
            <div class="swiper product_slider">
               <div class="swiper-wrapper">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <?php if(!empty($category['image'])): ?>
                              <img src="<?php echo e(asset('front/assets/images/category/'.$category['image'])); ?>"
                                 alt="<?php echo e($category['category_name']); ?>" title="<?php echo e($category['category_name']); ?>">
                              <?php endif; ?>
                           </div>
                           <a href="<?php echo e(url($category['category_url'])); ?>">
                              <div class="service__title"><?php echo e($category['category_name']); ?></div>
                           </a>
                           <p><?php echo $category['description']; ?></p>
                           <a class="db-btn-arrow" href="<?php echo e(url($category['category_url'])); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="counter__area bg-white">
   <div class="container">
      <div class="row counter__inner">
         <div class="col-4 counter__item" data-aos="fade-right">
            <div class="counter__number counter_slow style2">75+
            </div>
            <h3 class="counter__title color-heading">Years of <br> Experience </h3>
         </div>
         <div class="col-4 counter__item" data-aos="fade-right" data-aos-delay="300">
            <div class="counter__number counter_slow style2">25+
            </div>
            <h3 class="counter__title color-heading">Countries <br> Network</h3>
         </div>
         <div class="col-4 counter__item" data-aos="fade-right" data-aos-delay="600">
            <div class="counter__number counter_slow style2">1000+
            </div>
            <h3 class="counter__title color-heading">Team <br>Members </h3>
         </div>
      </div>
   </div>
</section>
<section class="about__area">
   <div class="container">
      <div class="row">
         <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
            <div class="about__imgs" data-aos="fade-up">
               <div class="image-1">
                  <img class="border-radius-25" src="front/assets/imgs/about-3.jpg" alt="img" title="img">
               </div>
               <!-- <div class="image-2">
                  <img src="front/assets/imgs/about-2.jpg" alt="Image" data-speed="0.85">
                  </div> -->
               <div class="bell">
                  <span>
                  <i class="fa-regular fa-bell text-white"></i>
                  </span>
               </div>
               <div class="projects">
                  <img src="front/assets/imgs/medal.png" width="40px" alt="img" title="img">
                  <p>
                     <span class="">ISO 9001:2015</span>Quality Certified
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
            <div class="about__content">
               <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">ABOUT US
               </h2>
               <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200">Legacy. Innovation. Mobility.</h3>
               <div class="">
                  <p data-aos="fade-left" data-aos-delay="250">Navyug Namdhari Eco Drive (NNE) carries forward a legacy
                     rooted in the early years of independent India, when our elders founded Navyug Bicycle Industries
                     in 1950. Established in 2022, NNE is part of the NNE Group, originally formed in 2005 and continues
                     to build on decades of engineering, manufacturing and global trade expertise.
                  </p>
                  <p data-aos="fade-right" data-aos-delay="250">Recognised by the Government of India as a Star Export
                     House, we operate across B2B and B2C markets on five continents. As an ODM partner, we also offer
                     white-label solutions for leading global brands, delivering innovation, reliability and scalable
                     growth.
                  </p>
               </div>
               <div data-aos="fade-up" data-aos-delay="300">
                  <a class="db-btn-arrow" href="<?php echo e(route('aboutus')); ?>">More Info <i
                     class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <img src="front/assets/imgs/shape/6.png" alt="img" title="img" class="shape">
   </div>
</section>
<!-- <section class="service__area pt-150 pb-130">
   <div class="container">
      <div class="bg-light1 border-radius-25 pt-120 px-lg-5 px-4 pb-90 pb-120">
         <div class="row pb-120">
            <div class="col-xxl-7 col-xl-7 col-xl-7">
               <div class="service__title-wrap" data-aos="fade-up">
                  <h2 class="sec-subtitle">Agriculture Range
                  </h2>
                  <h3 class="sec-title" data-aos="fade-up">Custom Agriculture Solutions Tailored to Every Agriculture
                     Need
                  </h3>
               </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-xl-5">
               <div class="service__text  pt-0">
                  <p class="ms-0" data-aos="fade-left">
                     At NNE, we manufacture and supply a wide range of high-quality mower components and assemblies. Our product range includes tail wheel hubs, laminated tires, wheel assemblies, forks, and essential service parts. Each component is precision-engineered to ensure durability, reliability, and optimal performance. All products are developed to meet strict quality standards for smooth and efficient mower operation.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="service-inner px-lg-5 px-4">
         <div class="row pt-4">
            <div class="swiper product_slider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-173683.jpg')); ?>"
                                 alt="Finish Mower Assembly" title="Finish Mower Assembly">
                           </div>
                           <a href="<?php echo e(url('finish-mower-assembly')); ?>">
                              <div class="service__title">Finish Mower Assembly</div>
                           </a>
                           <p class="service_description">Complete finish mower units engineered for smooth, precise, and professional-grade cutting.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('finish-mower-assembly')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-267063.png')); ?>"
                                 alt="Tail Wheel Hub" title="Tail Wheel Hub">
                           </div>
                           <a href="<?php echo e(url('tail-wheel-hub')); ?>">
                              <div class="service__title">Tail Wheel Hub</div>
                           </a>
                           <p class="service_description">Durable tail wheel hubs designed for reliable support and long-lasting field performance.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('tail-wheel-hub')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-575630.png')); ?>"
                                 alt="Tail Wheel &amp; Hub Assemblies" title="Tail Wheel &amp; Hub Assemblies">
                           </div>
                           <a href="<?php echo e(url('tail-wheel-hub-assemblies')); ?>">
                              <div class="service__title">Tail Wheel &amp; Hub Assemblies</div>
                           </a>
                           <p class="service_description">Pre-assembled tail wheel and hub units for easy installation and dependable operation.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('tail-wheel-hub-assemblies')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-434924.png')); ?>"
                                 alt="Laminated Tires" title="Laminated Tires">
                           </div>
                           <a href="<?php echo e(url('laminated-tires')); ?>">
                              <div class="service__title">Laminated Tires</div>
                           </a>
                           <p class="service_description">Heavy-duty laminated tires built to resist punctures and withstand tough terrain conditions.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('laminated-tires')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-592409.jpg')); ?>"
                                 alt="Service Parts" title="Service Parts">
                           </div>
                           <a href="<?php echo e(url('service-parts')); ?>">
                              <div class="service__title">Service Parts</div>
                           </a>
                           <p class="service_description">High-quality replacement parts to keep your equipment running efficiently and reliably.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('service-parts')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-603442.jpg')); ?>"
                                 alt="Finish Mower Wheel" title="Finish Mower Wheel">
                           </div>
                           <a href="<?php echo e(url('finish-mower-wheel')); ?>">
                              <div class="service__title">Finish Mower Wheel</div>
                           </a>
                           <p class="service_description">Strong and stable mower wheels designed for smooth movement and consistent cutting height.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('finish-mower-wheel')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-830607.jpg')); ?>"
                                 alt="Tail Wheel Assemblies" title="Tail Wheel Assemblies">
                           </div>
                           <a href="<?php echo e(url('tail-wheel-assemblies')); ?>">
                              <div class="service__title">Tail Wheel Assemblies</div>
                           </a>
                           <p class="service_description">Complete tail wheel systems engineered for balance, durability, and field stability.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('tail-wheel-assemblies')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
                              <img src="<?php echo e(asset('front/assets/images/category/category-281953.jpg')); ?>"
                                 alt="Tail Wheel Forks" title="Tail Wheel Forks">
                           </div>
                           <a href="<?php echo e(url('tail-wheel-forks')); ?>">
                              <div class="service__title">Tail Wheel Forks</div>
                           </a>
                           <p class="service_description">Robust tail wheel forks built for enhanced strength, stability, and long-term performance.</p>
                           <a class="db-btn-arrow" href="<?php echo e(url('tail-wheel-forks')); ?>">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="process__area-4 bg-light1 pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="process__title-wrap-3">
               <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">work process</h2>
               <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">Driven by Research,<br> Shaped by
                  Innovation
               </h3>
            </div>
            <div class="process__list-4">
               <div class="process__item-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="serial">01</div>
                  <div class="process__content-4">
                     <h3 class="process__title-4">Market Insights</h3>
                     <p>We start with in-depth market research to understand user behavior, emerging trends, and
                        innovation gaps. This ensures every project is rooted in real-world demand.
                     </p>
                  </div>
               </div>
               <div class="process__item-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="serial">02</div>
                  <div class="process__content-4">
                     <h3 class="process__title-4">Concept Validation</h3>
                     <p>Our team transforms ideas into viable concepts, validating them through data, testing,
                        and customer feedback before any development begins.
                     </p>
                  </div>
               </div>
               <div class="process__item-4" data-aos="fade-up" data-aos-delay="500">
                  <div class="serial">03</div>
                  <div class="process__content-4">
                     <h3 class="process__title-4">Prototype Engineering</h3>
                     <p>We develop functional prototypes to bring ideas to life. This phase helps us test
                        usability, functionality, and scalability in a controlled setting.
                     </p>
                  </div>
               </div>
               <div class="process__item-4" data-aos="fade-up" data-aos-delay="600">
                  <div class="serial">04</div>
                  <div class="process__content-4">
                     <h3 class="process__title-4">Continuous Innovation</h3>
                     <p>Innovation doesn’t stop at launch. We continuously refine our processes and solutions
                        based on analytics, feedback, and technological advancements.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="brand__area pt-150 pb-150" id="brands">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-3 col-12">
            <div class="sec-title-wrap pb-3" data-aos="fade-up">
               <h2 class="sec-subtitle mb-0">Our Brands
               </h2>
            </div>
         </div>
         <div class="col-lg-9 col-12">
            <div class="brand__inner p-0">
               <div class="swiper brand__slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/brand/orbishox.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide ">
                           <img src="front/assets/imgs/brand/orlando.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/brand/speevo.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide"> <!-- gray -->
                           <img src="front/assets/imgs/brand/Verdant-bikes.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/brand/omm.svg" alt="img" title="img">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="hero__area sustain">
   <div class="hero__inner">
      <div class="hero__top">
         <h1 class="hero__title" data-aos="fade-up">
            <span class="visibleText">Beyond Sustainability.</span> <br>
             <a href="javascript::void()" data-bs-toggle="modal" data-bs-target="#videoPopup"> <span><i
               class="fa-solid fa-play"></i></span></a>
                <span class="visibleText">Towards Regeneration.</span>
         </h1>
         <div class="hero__contact cxufadeUp2">
            <a href="https://nneworld.rtpltech.in/sustainability">
            <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <div class="text">
               <p class="pointer" onclick="window.location.href='https://nneworld.rtpltech.in/sustainability'">Read More</p>
            </div>
         </div>
      </div>
      
      <div class="hero__btm">
         <div class="">
            <p>We design products and processes that reduce environmental impact and promote a better tomorrow. From
               responsible sourcing to eco-conscious packaging, we're driven by purpose and guided by innovation.
            </p>
         </div>
      </div>
   </div>
   <div class="modal fade" id="videoPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
       <video autoplay loop muted class="w-100">
         <source src="front/assets/video/factory.mp4" type="video/mp4">
      </video>
      </div>

    </div>
  </div>
</div>

</section>
<section class="who__area" style="background-image: url('front/assets/imgs/hero/00.png');">
   <div class="who__area_inner infra pt-5 pb-5">
      <div class="container mt-xl-5 mb-xl-5">
         <div class="row">
            <div class="sec-title-wrap pb-3" data-aos="fade-up">
               <h2 class="sec-subtitle" data-aos="fade-up">Infrastructure
               </h2>
               <h3 class="sec-title" data-aos="fade-right">Strong Infrastructure That Drives Innovation
               </h3>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12">
               <div class="who__left">
                  <div class="who__features">
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="300">
                        <div class="number">
                           <span class="color-base">01</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Product Testing & Validation Facility</h4>
                           <p>Our fully equipped in-house laboratories validate bicycles and components as per the latest international standards, ensuring performance, safety, and durability before every product reaches the market.
                           </p>
                        </div>
                     </div>
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="600">
                        <div class="number">
                           <span class="color-base">02</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Advanced Robotic & CNC Systems</h4>
                           <p>With 7-axis robotic welding and 5-axis CNC tubular bending, our precision-driven infrastructure enables high accuracy, repeatability and superior structural integrity across all frames and components.
                           </p>
                        </div>
                     </div>
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="900">
                        <div class="number">
                           <span class="color-base">03</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Smart Frame Fabrication Shop</h4>
                           <p>Integrated TIG/Argon welding lines, automated tube processing, and material-ready workflows streamline fabrication while maintaining strict quality benchmarks.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12">
               <div class="who__left">
                  <div class="who__features">
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="300">
                        <div class="number">
                           <span class="color-base">04</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Painting & Decal Pasting Shop</h4>
                           <p>Equipped with cutting-edge machinery and quality control systems, our facilities
                              ensure precision, consistency, and large-scale production.
                           </p>
                        </div>
                     </div>
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="600">
                        <div class="number">
                           <span class="color-base">05</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Smart Assembly Lines</h4>
                           <p>Powered by Industry 4.0 technologies, our wheel and e-bike assembly lines include Asia’s first smart e-bike assembly setup – designed for speed, scalability and precision.
                           </p>
                        </div>
                     </div>
                     <div class="who__feature" data-aos="fade-up" data-aos-delay="900">
                        <div class="number">
                           <span class="color-base">06</span>
                        </div>
                        <div class="who__content">
                           <h4 class="title">Storage & Dispatch</h4>
                           <p>With optimised warehousing and 40’ container load capabilities, we ensure secure storage, rapid dispatch and seamless global logistics.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="brand__area pt-150 pb-150">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-4 col-12">
            <div class="sec-title-wrap pb-3" data-aos="fade-up">
               <h2 class="sec-subtitle mb-0">Our Associated Brands
               </h2>
            </div>
         </div>
         <div class="col-lg-8 col-12 as-brand">
            <div class="brand__inner p-0">
               <div class="swiper brand__slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="brand__slide">
                          <a target="_blank" href="https://acerelectric.in/">
						  <img src="front/assets/imgs/brand/acer.svg" alt="img" title="img">
                          </a>
						</div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <a target="_blank" href="https://www.decathlon.in/"> 
						   <img src="front/assets/imgs/brand/dc.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <a target="_blank" href="https://firefoxlife.com/"> 
						   <img src="front/assets/imgs/brand/firefox.jpg" alt="img" title="img">
                           </a>
						</div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <a target="_blank" href="https://www.huffy.com/">  
						   <img src="front/assets/imgs/brand/huffy.svg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                          <a target="_blank" href="https://www.herocycles.com/">     
						   <img src="front/assets/imgs/brand/hero-cycles.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						 <a target="_blank" href="https://www.mcleodaccessories.com.au/">     
                           <img src="front/assets/imgs/brand/mcleod.png" alt="img" title="img">
						    </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						 <a target="_blank" href="https://sunbaby.pl/">      
                           <img src="front/assets/imgs/brand/sun-baby.png" alt="img" title="img">
						    </a>
                        </div>
                     </div>
                    
                     <div class="swiper-slide">
                        <div class="brand__slide">
						 <a target="_blank" href="https://www.torontobicycles.com/">  
                           <img src="front/assets/imgs/brand/toronto.png" alt="img" title="img">
						    </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						 <a target="_blank" href="https://trinitycyclesindia.com/">   
                           <img src="front/assets/imgs/brand/trinity.png" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						<a target="_blank" href="https://www.tgc.bike/">    
                           <img src="front/assets/imgs/brand/cb.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						   <a target="_blank" href="https://www.emotorad.com/">   
                              <img src="front/assets/imgs/brand/motorad.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                    
                     <div class="swiper-slide">
                        <div class="brand__slide">
                          <a target="_blank" href="https://africrooze.com/">    
						   <img src="front/assets/imgs/brand/afr.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
						  <a target="_blank" href="https://www.tgc.bike/">     
                           <img src="front/assets/imgs/brand/tandem.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                            <a target="_blank" href="https://www.huffy.com/">   
						   <img src="front/assets/imgs/brand/disney.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                            <a target="_blank" href="https://www.huffy.com/">   
						   <img src="front/assets/imgs/brand/marvel.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                            <a target="_blank" href="https://www.tvsmotor.com/">   
						   <img src="front/assets/imgs/brand/tvs.jpg" alt="img" title="img">
						   </a>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--<section class="blog__area-4 pt-150 pb-150">-->
<!--   <div class="container">-->
<!--      <div class="blog__top-4">-->
<!--         <div class="sec-title-wrap">-->
<!--            <h2 class="sec-subtitle" data-aos="fade-up">Events</h2>-->
<!--            <h3 class="sec-title" data-aos="fade-right">Explore Upcoming Events &<br>Highlights From NNE</h3>-->
<!--         </div>-->
<!--         <div class="btn-wrap" data-aos="fade-up" data-aos-delay="300">-->
<!--            <a class="db-btn-border btn-rollover border-radius-50" href="">Explore Now <i-->
<!--                  class="fa-solid fa-arrow-right"></i></a>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="row">-->
<!--         <div class="col-xxl-12">-->
<!--            <div class="blog__list">-->
<!--               <article class="blog__item-4" data-aos="fade-up" data-aos-delay="300">-->
<!--                  <div class="blog__thumb-4" data-tilt>-->
<!--                     <a href="#"><img src="front/assets/imgs/event_1.jpg" alt="img" title="img"></a>-->
<!--                  </div>-->
<!--                  <div class="blog__content-4">-->
<!--                     <ul class="blog__meta-4">-->
<!--                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>-->
<!--                        <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 27, 2025</a></li>-->
<!--                     </ul>-->
<!--                     <a href="#">-->
<!--                        <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>-->
<!--                     </a>-->
<!--                     <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>-->
<!--                  </div>-->
<!--               </article>-->
<!--               <article class="blog__item-4" data-aos="fade-up" data-aos-delay="400">-->
<!--                  <div class="blog__thumb-4" data-tilt>-->
<!--                     <a href="#"><img src="front/assets/imgs/event_2.jpg" alt="img" title="img"></a>-->
<!--                  </div>-->
<!--                  <div class="blog__content-4">-->
<!--                     <ul class="blog__meta-4">-->
<!--                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>-->
<!--                        <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 29, 2025</a></li>-->
<!--                     </ul>-->
<!--                     <a href="#">-->
<!--                        <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>-->
<!--                     </a>-->
<!--                     <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>-->
<!--                  </div>-->
<!--               </article>-->
<!--               <article class="blog__item-4" data-aos="fade-up" data-aos-delay="500">-->
<!--                  <div class="blog__thumb-4" data-tilt>-->
<!--                     <a href="#"><img src="front/assets/imgs/event_3.jpg" alt="img" title="img"></a>-->
<!--                  </div>-->
<!--                  <div class="blog__content-4">-->
<!--                     <ul class="blog__meta-4">-->
<!--                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>-->
<!--                        <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 30, 2025</a></li>-->
<!--                     </ul>-->
<!--                     <a href="#">-->
<!--                        <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>-->
<!--                     </a>-->
<!--                     <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>-->
<!--                  </div>-->
<!--               </article>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<section class="newsletter__area bg-light1 pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-4 col-xl-4 col-lg-4 align-self-center">
            <h3 class="sec-title pb-0" data-aos="fade-right">Certification</h3>
         </div>
         <div class="col-xxl-7 col-xl-7 col-lg-7">
            <div class="brand__inner p-0">
               <div class="swiper brand__slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/logo/certified-1.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/logo/certified-2.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/logo/certified-3.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/logo/certified-4.png" alt="img" title="img">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand__slide">
                           <img src="front/assets/imgs/logo/certified-5.png" alt="img" title="img">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\nneworldnew2026\nneworldnew2026\resources\views/front/pages/home/index.blade.php ENDPATH**/ ?>