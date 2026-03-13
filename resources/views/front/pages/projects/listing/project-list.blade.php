@foreach($properties as $project)
			<div class="col-12 col-md-6 col-lg-6">
				<!--Start Single Team Style1-->
				<div class="single-team-style1 mr-2">
					<div class="property-card-container">
						<div class="property-card">
							@if($project['newly_launched'] == '1')
							<span class="badge new-launch">NEW LAUNCH</span>
							@endif
							<div class="card-top">
								<div class="image-container">
									@if($project['logo'] != '')
									<img src="{{ asset('front/assets/images/projects/logo/'.$project['logo']) }}" alt="img">
								    @endif
								</div>
								<div class="details">
									<h2>{{  $project['property_name']  }}</h2>
									<p class="location">{{ $project['city'].','.$project['state'] }}</p>
									<div class="price-type">
										<span class="price">₹ {{ $project['price_from'] }} @if($project['price_to'] != '') - {{ $project['price_to'] }} @endif</span>
										<span class="type">{{ $project['apartment'] }}</span>
									</div>
									@if($project['alert_message'] != '') 
									<p class="trend">
										<i class="fas fa-arrow-trend-up"></i>
										<!-- Optional: Added trend icon -->
										{{ $project['alert_message'] }}
									</p>
									@endif
								</div>
							</div>
							<div class="card-bottom">
                               <div class="offer">
								  @if($project['project_status'] != '')
									  <i class="fa fa-tag" aria-hidden="true"></i>
									  <span class="offer-text">{{ $project['project_status'] }} </span>
								  @endif
                              </div>
								<!-- <button class="view-button"></button> -->
								<a href="{{ route('projectdetails',[$project['id'],$project['property_seo_unique']]) }}"><button type="button" class="btn btn-primary" >
									View More
								</button></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			@endforeach