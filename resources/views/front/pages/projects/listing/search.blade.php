<div class="col-12 col-md-12 col-lg-12">
   <div class="">
      <form>
         <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
               <div class="form-group">
                  <label for="search-state">State</label>
                  <select id="search-state" name="state"  class="form-control searchselect">
                     <option value="" selected>Choose...</option>
                     @foreach($states as $state)
					 <option value="{{$state }}" @if(isset($filter['state']) && $filter['state'] == $state) selected @endif >{{$state }}</option>
					 @endforeach
                  </select>
               </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
               <div class="form-group">
                  <label for="search-city">City</label>
                  <select id="search-city" name="city"  class="form-control searchselect">
                     @foreach($cities as $city)
					 <option value="{{$city }}" @if(isset($filter['city']) && $filter['city'] == $city) selected @endif >{{$city }}</option>
					 @endforeach
                  </select>
               </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 mb-3 search-btn forms-buttons form-group">
               <div class="forms-buttons form-group project-search-btn">
                  <span class="input-group-btn" >
                  <button class="btn btn-search project-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
                  </span>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>