@php 
Use App\Models\Category;
$get_categories = Category::get_categories(); 
$agri_categories = Category::agri_categories();
@endphp
<style>
</style>
<!-- Scroll to top -->
<button id="scroll_top" class="scroll-top">
<i class="fa-solid fa-arrow-up"></i>
</button>
<!-- Offcanvas area start -->
<div class="offcanvas__area">
   <div class="offcanvas__inner">
      <div class="offcanvas__top">
         <img src="{{ asset('front/assets/imgs/logo/nne_logo.png') }}" title="Logo" alt="Logo">
         <button id="offcanvas_close">
         <i class="fa-solid fa-xmark"></i>
         </button>
      </div>
      <div class="offcanvas__menu">
         <div class="offcanvas-menu">
            <ul >
               <li>
                  <a href="{{ route('aboutus') }}">About</a>
                  <ul>
                     <li><a href="{{ route('processes') }}">Processes</a></li>
                     <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                     <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
                     <li><a href="{{ route('forestvideo') }}">Forest Video</a></li>
                  </ul>
               </li>
               <li>
                  <a href="javacript:;">Products</a>
                  <ul>
                     @foreach($get_categories as $category)
                     <li>
                        <a href="{{ url($category['category_url']) }}">{{  $category['category_name'] }}</a>
                        @if(!empty($category['sub_categories']))
                        <ul>
                           @foreach($category['sub_categories'] as $sub)
                           <li>
                              <a href="{{ url($sub['category_url']) }}">
                              {{ $sub['category_name'] }}
                              </a>
                           </li>
                           @endforeach
                        </ul>
                        @endif
                     </li>
                     @endforeach
                  </ul>
               </li>
               <li><a href="{{ route('home') }}#brands">Brands</a></li>
               <!-- <li><a href="https://tracking.nneworld.com/login">Tracing</a></li> -->
               <li><a href="https://forest-factory.eco/">Forest Factory</a></li>
               <li>
                  <a href="javacript:;">Stories</a>
                  <ul>
                     <li><a href="https://nneworld.com/stories-omm-holi/">Omm Holii</a></li>
                     <li><a href="https://nneworld.com/article-collaboration/">NNE x CIXI</a></li>
                  </ul>
               </li>
               <li><a href="{{ route('contactus') }}">Contact Us</a></li>
            </ul>
         </div>
         <div class="footer__social-3">
            <ul class="d-block ">
               <li>
                  <a class="mt-4" target="_blank" href="https://www.facebook.com/people/Navyug-Namdhari-Ecosystems-PvtLtd/100087155512253/">
                  <i class="fa-brands fa-facebook-f"></i>
                  </a>
               </li>
               <li>
                  <a class="mt-4" target="_blank" href="https://in.linkedin.com/company/navyug-group-nng">
                  <i class="fa-brands fa-linkedin"></i>
                  </a>
               </li>
               <li>
                  <a class="mt-4" target="_blank" href="https://www.instagram.com/navyug.namdhari?igsh=MWZseWRqOW54dXBwYg==">
                  <i class="fa-brands fa-instagram"></i>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="offcanvas__map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6848.564018919881!2d75.925862!3d30.878771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9d6cfc56018d%3A0x2fe50240ac2d1f9b!2sNavyug%20Namdhari%20Eco%20Drive%20Private%20Limited!5e0!3m2!1sen!2sus!4v1753072393164!5m2!1sen!2sus"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="offcanvas__btm">
         <div class="footer__address-3">
            <ul>
               <li>
                  <span>
                  <i class="fa-solid fa-location-dot"></i>
                  </span>
                  <p class="text-white">C-186-A, Focal Point Phase 6, Focal Point, Ludhiana, Punjab 141003</p>
               </li>
               <li>
                  <span>
                  <i class="fa-solid fa-phone"></i>
                  </span>
                  <div>
                     <a href="tel:+919872923908">+91 98729 23908</a>
                  </div>
               </li>
               <li>
                  <span>
                  <i class="fa-solid fa-envelope"></i>
                  </span>
                  <div>
                     <a href="mailto:sales@nneworld.com">sales@nneworld.com</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="footer__social-3">
            <ul>
               <li>
                  <a target="_blank" href="https://www.facebook.com/people/Navyug-Namdhari-Ecosystems-PvtLtd/100087155512253/">
                  <i class="fa-brands fa-facebook-f"></i>
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://in.linkedin.com/company/navyug-group-nng">
                  <i class="fa-brands fa-linkedin"></i>
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://www.instagram.com/navyug.namdhari?igsh=MWZseWRqOW54dXBwYg==">
                  <i class="fa-brands fa-instagram"></i>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Offcanvas area end --> 
<header class="header__area pos-abs plr-100">
   <div class="header__inner">
      <div class="header__logo">
         <a href="{{ route('home') }}"><img src="{{ asset('front/assets/imgs/logo/nne_logo.png') }}" title="Logo" alt="Logo"></a>
      </div>
      <div class="header__menu">
         <nav class="main-menu">
            <ul>
               <li class="has-dropdown">
                  <a href="{{ route('aboutus') }}">About</a>
                  <ul class="main-dropdown">
                     <li><a href="{{ route('processes') }}">Processes</a></li>
                     <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                     <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
                     <li><a href="{{ route('forestvideo') }}">Forest Video</a></li>
                     <li><a href="https://forest-factory.eco/">Forest Factory</a></li>
                  </ul>
               </li>
               <li class="has-dropdown">
                  <a href="javascript:;">Products</a>
                  <ul class="main-dropdown">
                     @foreach($get_categories as $category)
                     <li class="has-sub-dropdown @if(!empty($category['sub_categories'])) has-dropdown @endif">
                        <a href="{{ url($category['category_url']) }}">
                        {{ $category['category_name'] }}
                        </a>
                        @if(!empty($category['sub_categories']))
                        <ul class="sub-dropdown">
                           @foreach($category['sub_categories'] as $sub)
                           <li>
                              <a href="{{ url($sub['category_url']) }}">
                              {{ $sub['category_name'] }}
                              </a>
                           </li>
                           @endforeach
                        </ul>
                        @endif
                     </li>
                     @endforeach
                  </ul>
               </li>
               <li><a href="{{ route('home') }}#brands">Brands</a></li>
               <!-- <li><a href="https://tracking.nneworld.com/login">Tracing</a></li> -->
               <li class="has-dropdown">
                  <a href="javacript:;">Stories</a>
                  <ul class="main-dropdown">
                     <li><a href="https://nneworld.com/stories-omm-holi">Omm Holii</a></li>
                     <li><a href="https://nneworld.com/article-collaboration">NNE x CIXI</a></li>
                  </ul>
               </li>
               <li><a href="{{ route('contactus') }}">Contact Us</a></li>
            </ul>
         </nav>
      </div>
      <div class="header__others">
         <div class="header__offcanvas">
            <button class="menu_icon bg-base">
            <img src="{{ asset('front/assets/imgs/menu.png') }}" title="img" alt="img">
            </button>
         </div>
      </div>
   </div>
</header>