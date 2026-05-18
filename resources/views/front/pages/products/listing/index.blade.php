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
                <div class="col-lg-6 text-start">
                    <button class="filter-toggle-btn" type="button" id="filterToggleBtn">
                        Filters
                    </button>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="sort-wrapper">
                        <select class="sort-select" name="sort">
                            <option value="">Sort By</option>
                            <option value="latest">Latest</option>
                            <option value="price_low_high">Price: Low to High</option>
                            <option value="price_high_low">Price: High to Low</option>
                            <option value="name_a_z">Name: A to Z</option>
                            <option value="name_z_a">Name: Z to A</option>
                        </select>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-12">
                    <!-- Overlay for mobile -->
                    <div class="filter-overlay" id="filterOverlay"></div>

                    <!-- Filter Sidebar -->
                    <aside class="filter-sidebar" id="filterSidebar">
                        <div class="filter-header">
                            <h4>Filters</h4>
                            <button type="button" class="filter-close-btn" id="filterCloseBtn">×</button>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Compatibility
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="compatibility[]" value="option-1"> Option 1</label>
                                <label><input type="checkbox" name="compatibility[]" value="option-2"> Option 2</label>
                            </div>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Range
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="range[]" value="low"> Low Range</label>
                                <label><input type="checkbox" name="range[]" value="high"> High Range</label>
                            </div>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Top Speed
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="speed[]" value="25"> Up to 25 km/h</label>
                                <label><input type="checkbox" name="speed[]" value="45"> Up to 45 km/h</label>
                            </div>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Tire Size
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="tire_size[]" value="10"> 10 inch</label>
                                <label><input type="checkbox" name="tire_size[]" value="12"> 12 inch</label>
                            </div>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Product Size
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="product_size[]" value="small"> Small</label>
                                <label><input type="checkbox" name="product_size[]" value="large"> Large</label>
                            </div>
                        </div>

                        <div class="filter-item">
                            <button class="filter-title" type="button">
                                Brands
                                <span>+</span>
                            </button>
                            <div class="filter-content">
                                <label><input type="checkbox" name="brands[]" value="brand-1"> Brand 1</label>
                                <label><input type="checkbox" name="brands[]" value="brand-2"> Brand 2</label>
                            </div>
                        </div>

                        <div class="filter-actions">
                            <button type="button" class="clear-filter-btn">Clear All</button>
                            <button type="submit" class="apply-filter-btn">Apply</button>
                        </div>
                    </aside>
                </div>
                <div class="col-xxl-9 col-md-12">
                    <div class="portfolio__list-6">
                        @if(!empty(count($products)))
                        @foreach($products as $product)
                        @php
                        $product_url = route('product',[$product['id'],$product['product_url']]);
                        $product_image = isset($product['product_image']['image']) ?
                        'front/assets/images/products/medium/'.$product['product_image']['image'] : '';
                        if(empty($product_image) || !File::exists(public_path($product_image))){
                        $product_image = 'front/assets/images/no-image-found.jpg';
                        }
                        @endphp
                        <div class="portfolio__item-4">
                            <div class="shine">
                                <a href="{{  $product_url }}"><img src="{{ $product_image; }}" alt="NNE Curl"
                                        data-lag="0.3"></a>
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