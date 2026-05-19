            <div class="product-count">
             <strong> Showing <span id="total-products">{{ $total_products }}</span> @if($total_products > 1) products @else product @endif </strong>
            </div>
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
        