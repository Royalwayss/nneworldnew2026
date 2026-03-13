@extends('front.layout.layout')
@section('content')

<main>

    <!-- Breadcrumb area start -->
     <section class="breadcrumb__area" @if(!empty($catdetails['banner']))
    style="background-image: url('{{ asset('front/assets/images/category_banner/'.$catdetails['banner']) }}');"
@endif>
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
                                <li> <a href="">{{ $catdetails['category_name'] }}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area end -->


    <!-- Portfolio area start -->
    <section class="portfolio__area-6 pt-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="portfolio__list-6">
                        @if(!empty(count($products)))
							@foreach($products as $product)
							@php 
							$product_url = route('product',[$product['id'],$product['product_url']]);
							$product_image = isset($product['product_image']['image']) ? 'front/assets/images/products/medium/'.$product['product_image']['image'] : '';
							if(empty($product_image) || !File::exists(public_path($product_image))){
								$product_image = 'front/assets/images/no-image-found.jpg';
							} 
							@endphp
							<div class="portfolio__item-4">
								<div class="shine">
									<a href="{{  $product_url }}"><img src="{{ $product_image; }}" alt="NNE Curl" data-lag="0.3"></a>
								</div>
								<div class="portfolio__content-4">
									<!-- <p>Verdant by NNE</p> -->
									<a href="{{ $product_url }}">
										<h2 class="portfolio__title-4">{{ $product['product_name'] }}</h2>
									</a>
								</div>
							</div>
                        @endforeach
                        @else
							<h4>Products not found</h4>
						@endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area end -->


</main>


@endsection