@php 
use App\Models\Country;
$countries = Country::getCountries();
@endphp



					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="country">Country</label>
							<select id="country" name="country" class="form-control searchselect" onchange="get_state_city('1')" style="width:100%">
								<option value="" selected>Choose...</option>
							    @foreach($countries as $country)
								<option data-id="{{ $country['id'] }}" value="{{ $country['name'] }}" @if($account['country'] == $country['name']) selected @endif>{{ $country['name'] }}</option>
								@endforeach
							</select>
							@php echo from_input_error_message('country') @endphp
						</div>
					</div> 
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="state">State</label>
							<select class="form-control searchselect" name="state" id="state" onchange="get_state_city('2')" style="width:100%">
							   <option value="" selected>Choose...</option>
							    @foreach($states as $state)
								<option data-id="{{ $state['id'] }}" value="{{ $state['name'] }}" @if($account['state'] == $state['name']) selected @endif>{{ $state['name'] }}</option>
								@endforeach
							</select>
							@php echo from_input_error_message('state') @endphp
						</div>
					</div>
					
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<div class="form-group">
							<label for="city">City</label>
							<select class="form-control searchselect" name="city" id="city" style="width:100%">
							    <option value="" selected>Choose...</option>
							    @foreach($cities as $city)
								<option data-id="{{ $city['id'] }}" value="{{ $city['name'] }}" @if($account['city'] == $city['name']) selected @endif>{{ $city['name'] }}</option>
								@endforeach
							</select>
							@php echo from_input_error_message('city') @endphp
						</div>
					</div>
					
					