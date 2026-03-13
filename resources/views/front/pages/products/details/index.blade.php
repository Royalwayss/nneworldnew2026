@extends('front.layout.layout')
@section('content')

<main>

  <!-- Breadcrumb area start -->
  <!-- <section class="breadcrumb__area detailBread" style="background-image: url('{{ asset('front/assets/imgs/kidBd.jpg') }}');"> -->
  <section class="breadcrumb__area detailBread">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__inner">
            <!-- <div class="breadcrumb__left">
              <h1 class="breadcrumb__title">{{ $productdetails['category']['category_name'] }}</h1>
            </div> -->
            <div class="breadcrumb__right">
              <ul>
                <li> <a href="{{ route('home') }}">home</a> </li>
                <li> <a href="{{ url($productdetails['category']['category_url']) }}">{{ $productdetails['category']['category_name'] }}</a> </li>
                <li> <a href="">{{ $productdetails['product_name'] }}</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb area end -->


  <!-- Portfolio area start -->
  <section class="projectd__details-inner pt-150 pb-130">
    <div class="container">
      <div class="projectd__wrapper-inner">
        <div class="projectd__thumb pb-lg-5">
		 @if(!empty($productdetails['product_image']))
          <img data-aos="fade-up" data-aos-delay="200" src="{{ asset('front/assets/images/products/large/'.$productdetails['product_image']['image']) }}" alt="img">
		  @endif
        </div>
        <div class="about__content pt-0">
          <!-- <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">Verdant Kids
          </h2> -->
          <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200">{{ $productdetails['product_name'] }}</h3>
        </div>
        <h2 class="projectd__details-title mb-3"> </h2>
        @if(!empty($productdetails['components']))
		<table class="table table-striped">
          <thead>
            <tr>
              <th>Component</th>
              <th>Specification</th>
            </tr>
          </thead>
          <tbody class="">
            @foreach($productdetails['components'] as $component)
			<tr>
              <td>{{ $component['name'] }}</td>
              <td>{{ $component['value'] }}</td>
            </tr>
			@endforeach
          </tbody>
        </table>
        @endif
		<div class="contact__submitwrap">
		 <form action="{{ route('addtocart') }}" method="post">@csrf
		  <input type="hidden" name="product_id" value="{{ $productdetails['id'] }}">
		  <button class="contact__submit btn-rollover" type="submit" id="enquire-now">Enquire Now<i class="fa-solid fa-arrow-right"></i></button>
		 </form>
		</div>
      </div>
    </div>
  </section>
  <!-- Portfolio area end -->


</main>

@endsection