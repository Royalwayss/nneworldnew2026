<div class="view-data">
  <form name="categoryForm" data-modal="Message" id="addEditForm" action="javascript:;" @if(!empty($id)) data-action="{{ route('savemessage',[$id]) }}" @else data-action="{{ route('savemessage') }}" @endif  method="post" enctype="multipart/form-data">@csrf
	             @if(!empty($id))
				  <input type="hidden" name="id" value="{{ $id }}">
				  @endif
				 <div class="row">
				 
				 
				  <div class="form-group col-6">
					<label for="category_name">Category For<span class="red_star"> *</span></label>
					<select type="textbox"  class="form-control forminput"   id="category_type" name="category_type">
					    <option value="normal-products" @if(!empty($id) && $row['category_type'] == 'normal-products') selected @endif>Normal Products</option>
					    <option value="agri-products" @if(!empty($id) && $row['category_type'] == 'agri-products') selected @endif>Agri Products</option>
					</select>
					<p class="error-message" id="error-category_name"></p>
			     </div>
				 
				 
				 
				 
				 
				 <div class="form-group col-6">
					<label for="parent_id">Select Parent Category<span class="red_star"> *</span></label>
					<select id="parent_id" name="parent_id" class="form-control forminput">
					      <option value="ROOT">Main Category</option>
						  @foreach($categories as $category)
						  <option value="{{ $category['id'] }}" @if(!empty($id) && $row['parent_id'] == $category['id']) selected @endif >{{ $category['category_name'] }}  </option>
						  @endforeach
					</select>
				    <p class="error-message" id="error-parent_id"></p>
				  </div> 
		      
			  <div class="form-group col-6">
				<label for="category_name">Category Name<span class="red_star"> *</span></label>
				<input type="textbox"  class="form-control forminput"   id="category_name" name="category_name" placeholder="Category Name" @if(!empty($id)) value="{{ $row['category_name'] }}" @endif   onkeyup="get_slug('category_name','category_url')">
				<p class="error-message" id="error-category_name"></p>
			  </div>


			  <div class="form-group col-6">
				<label for="category_url">Category Url<span class="red_star"> *</span></label>
				<input type="textbox"  class="form-control forminput"   id="category_url" name="category_url" placeholder="Category Url" @if(!empty($id)) value="{{ $row['category_url'] }}" @endif >
				<p class="error-message" id="error-category_url"></p>
			  </div>
			  
			   <div class="form-group col-6">
				<label for="image">Image (Recommended size 311 x 212)<span class="red_star"> *</span></label>
				<input type="file"  class="form-control forminput"   id="image" name="image">
				<p class="error-message" id="error-image"></p>
			   </div>
			  
			  @if(!empty($id) && $row['image'] != '')
				  <div class="form-group col-6">
						<label for="">Uploaded Image</label>
						<img src="{{ asset('front/assets/images/category/'.$row['image']) }}" style="width:20%">
						
			      </div>
			  @endif
			  
			  <div class="form-group col-6">
				<label for="banner">Banner (Recommended size 4069 x 1703)<span class="red_star"> *</span></label>
				<input type="file"  class="form-control forminput"   id="banner" name="banner">
				<p class="error-message" id="error-banner"></p>
			   </div>
			  
			  @if(!empty($id) && $row['banner'] != '')
				  <div class="form-group col-6">
						<label for="">Uploaded banner</label>
						<img src="{{ asset('front/assets/images/category_banner/'.$row['banner']) }}" style="width:20%">
						
			      </div>
			  @endif
			  
			  
			  
			  
			  <div class="form-group col-12">
				<label for="description">Description<span class="red_star"> *</span></label>
				<textarea  class="form-control forminput"   id="description" name="description" placeholder="Description"  >
				@php if(!empty($id)){ echo $row['description']; }  @endphp
				</textarea>
				<p class="error-message" id="error-description"></p>
			  </div>

             <div class="form-group col-6">
				<label for="sortorder">Sort<span class="red_star"> *</span></label>
				<input type="number"  class="form-control forminput"   id="sortorder" name="sortorder" placeholder="Category Sort" @if(!empty($id)) value="{{ $row['sortorder'] }}" @endif >
				<p class="error-message" id="error-sortorder"></p>
			  </div>


              <div class="form-group col-md-6">
                    <label for="status">Status </label>
					 <select id="status" name="status" class="form-control forminput">
					      <option value="1" @if(!empty($id) && $row['status'] == '1' ) selected @endif >Active</option>
					      <option value="0" @if(!empty($id) && $row['status'] == '0' ) selected @endif >InActive</option>
					  </select> 	  
                  </div>


			  
			  <div>
			  <div>
			  <div class="row ">
			   <div class="form-group col-12 text-right">
					 <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" > @if(!empty($id)) Save @else Add @endif Category</button> 
			   </div>		  
			  </div>
			
		
	</form>
  
</div>