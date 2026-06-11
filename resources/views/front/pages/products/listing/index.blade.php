@extends('front.layout.layout')
@section('content')
<?php 
$selected_sort = [];
if(!empty($selected_filters['sort'])){
	$selected_sort = $selected_filters['sort'];
}
$selected_components = [];
if(!empty($selected_filters['component_IDs'])){
	$selected_components = $selected_filters['component_IDs'];
}


 ?>
<main>

  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area" @if(!empty($catdetails['banner']))
    style="background-image: url('{{ asset('front/assets/images/category_banner/'.$catdetails['banner']) }}');" @endif>
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__inner">
            <div class="breadcrumb__left">
              <h1 class="breadcrumb__title">{{ $catdetails['category_name'] }}</h1>
            </div>
            <div class="breadcrumb__right">
              <ul>
                <li> <a href="{{ route('home') }}">home</a> </li>

                @foreach($rootCategory as $rootcat)
                <li> <a href="{{ $rootcat['category_url'] }}">{{ $rootcat['category_name'] }}</a> </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb area end -->

  <!-- Portfolio area start -->

<section>
  <div class="container">
    <h3 class="blog__form-title mb-2">Explore by Subcategory</h3>
    <div class="swiper SubSwiper">
      <div class="swiper-wrapper">
        <!-- Slides with links -->
        <div class="swiper-slide">
          <a href="link-to-kick-scooters.html">
            <img src="{{ asset('front/assets/images/products/medium/product-140406.jpg') }}" alt="Kick Scooters">
            <p>Kick Scooters</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="link-to-swing-cars.html">
            <img src="{{asset('front/assets/images/products/medium/product-140406.jpg')}}" alt="Swing Cars">
            <p>Swing Cars</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="link-to-baby-walkers.html">
            <img src="{{asset('front/assets/images/products/medium/product-140406.jpg')}}" alt="Baby Walkers">
            <p>Baby Walkers</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="link-to-electronic-rideons.html">
            <img src="{{asset('front/assets/images/products/medium/product-140406.jpg')}}" alt="Electronic Rideons">
            <p>Electronic Rideons</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="link-to-tricycles.html">
            <img src="{{asset('front/assets/images/products/medium/product-140406.jpg')}}" alt="Tricycles">
            <p>Tricycles</p>
          </a>
        </div>
      </div>
      <!-- Navigation arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>
  
  <section class="portfolio__area-6 ">
    <div class="container">
      <div class="row">
        @include('front.pages.products.listing.include.filter')

        <div @if(!empty($filters)) class="col-xxl-9 col-md-12" @else class="col-xxl-12 col-md-12" @endif
          id="appendProductListing">
          @include('front.pages.products.listing.include.product-list')
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio area end -->

</main>
</script>
@endsection