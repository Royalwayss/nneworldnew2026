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
  <section class="breadcrumb__area" @if(!empty($catdetails['banner'])) style="background-image: url('{{ asset('front/assets/images/category_banner/'.$catdetails['banner']) }}');" @endif>
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
  <section class="portfolio__area-6 ">
    <div class="container">
      <div class="row">
        @include('front.pages.products.listing.include.filter')
		
		<div @if(!empty($filters)) class="col-xxl-9 col-md-12" @else class="col-xxl-12 col-md-12" @endif id="appendProductListing">
          @include('front.pages.products.listing.include.product-list')
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio area end -->

</main>
</script>
@endsection