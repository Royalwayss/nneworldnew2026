@extends('front.layout.layout')
@section('content')
<?php 
Use App\Models\ProductImage;
?>
<style>

</style>
<main>
   <!-- Breadcrumb area start -->
   <section class="breadcrumb__area" style="background-image: url('{{ asset('front/assets/imgs/contactBd.jpg') }}');">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__inner">
                  <div class="breadcrumb__left">
                     <h1 class="breadcrumb__title">Contact</h1>
                  </div>
                  <div class="breadcrumb__right">
                     <ul>
                        <li> <a href="{{ route('home') }}">home</a> </li>
                        <li> <a href="javascript:;">Contact</a> </li>
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
      <div class="container">
         <div class="row mb-2 mb-lg-5">
            <div class="col-md-6 col-lg-4 col-12">
               <div class="contact__item">
                  <i class="fa-solid fa-phone"></i>
                  <h4 class="title">Call us</h4>
                  <p>+91 98729 23908</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 col-12">
               <div class="contact__item">
                  <i class="fa-solid fa-location-arrow"></i>
                  <h4 class="title">Address</h4>
                  <p>C-186 A, Phase VI, Focal Point, Ludhiana, Punjab 141003, India</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 col-12">
               <div class="contact__item">
                  <i class="fa-solid fa-envelope"></i>
                  <h4 class="title">Email</h4>
                  <a href="mailto:sales@nneworld.com">sales@nneworld.com</a>
               </div>
            </div>
         </div>
         <div class="container">
            <iframe class="w-100 border-radius-25" height="350"
               src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d109577.02430271795!2d75.925862!3d30.878771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9d6cfc56018d%3A0x2fe50240ac2d1f9b!2sNavyug%20Namdhari%20Eco%20Drive%20Private%20Limited!5e0!3m2!1sen!2sus!4v1755939717749!5m2!1sen!2sus"></iframe>
         </div>
         <div class="row pt-5">
             <div class="col-lg-6 col-12">
               <div class="blog__form pt-0">
                  <span class="blog__form-title">Leave a reply</span>
                  <form action="javascript:;" id="contact-form" data-action="{{ route('savecontact') }}">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" name="name" id="name" placeholder="Name*">
                           <p class="error_message" id="input-error-name"></p>
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="mobile" id="Mobile" placeholder="Mobile*">
                           <p class="error_message" id="input-error-mobile"></p>
                        </div>
                        <div class="col-md-12">
                           <input type="text" name="email" id="E-mail" placeholder="E-mail*">
                           <p class="error_message" id="input-error-email"></p>
                        </div>

                        <div class="col-md-12">
                           <textarea name="message" id="message" placeholder="Messsage*"></textarea>
                           <p class="error_message" id="input-error-message"></p>
                        </div>
                        <div class="contact__submitwrap">
                           <button class="contact__submit btn-rollover" type="submit">Send now <i
                                 class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <div class="col-md-12">
                           <p id="contact-result"></p>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 ">
               <div class="fullWidth WrapperEnquiry bottomSequence ">
                  @if(!empty($cartitems))
				  @foreach($cartitems as $cartitem)
                  <div class="fullWidth text-center itemEnquiry">
                     <div class="centeredImgEnquire text-left ">
                        <div class="fullWidth">
                           <?php 
						$product_url = route('product',[$cartitem['product_id'],$cartitem['product_url']]);
						$product_image = ProductImage::where('product_id',$cartitem['product_id'])->orderby('image_order','asc')->first(); ?>
                           <a href="{{ $product_url }}">
                              <div class="imgHolderEnquire" @if(!empty($product_image))
                                 style="background-image: url('{{ asset('front/assets/images/products/large/'.$product_image['image']) }}');"
                                 @endif></div>
                           </a>
                           <div class="rightDescEnquire">
                              <a href="{{ $product_url }}">
                                 <h6 class="mb-0 fullWidth text-left">
                                    {{ $cartitem['product_name'] }}
                                 </h6>
                              </a>
                              <a href="{{ route('removecartproduct',[$cartitem['id']]) }}"
                                 class="inline--link absLinkTop removeCartProduct">
                                 <span><i class="fa fa-trash "></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
            </div>

           
         </div>
      </div>
   </section>
   <!-- /contact -->
</main>
@endsection