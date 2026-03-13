<div class="col-12 col-md-4 col-lg-4">
				@if(!empty($project['property_images']))
				<div class="row">
					@foreach($project['property_images'] as $image)
					<div class="col-12 col-md-6 col-lg-12 mb-5">
						<div class="property-images">
							<img src="{{ asset('front/assets/images/projects/large/'.$image['image']) }}">
						</div>
					</div>
					@endforeach
				</div>
				@endif
			</div>