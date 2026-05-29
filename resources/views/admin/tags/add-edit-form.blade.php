<div class="view-data">
   <form name="componentForm" data-modal="Tag" id="addEditForm" action="javascript:;" @if(!empty($id)) data-action="{{ route('savetag',[$id]) }}" @else data-action="{{ route('savetag') }}" @endif  method="post" enctype="multipart/form-data">@csrf
	   @if(!empty($id))
	   <input type="hidden" name="id" value="{{ $id }}">
	   @endif
	   <div class="row">
		  <div class="form-group col-12">
			 <label for="name">Tag Name<span class="red_star"> *</span></label>
			 <input type="textbox"  class="form-control forminput"   id="tag_name" name="tag_name" placeholder="Tag Name" @if(!empty($id)) value="{{ $row['tag_name'] }}" @endif >
			 <p class="error-message" id="error-tag_name"></p>
		  </div>
		  
		  
       <div class="form-group col-12">
			 <label for="status">Status </label>
			 <select id="status" name="status" class="form-control forminput">
			 <option value="1" @if(!empty($id) && $row['status'] == '1' ) selected @endif >Active</option>
			 <option value="0" @if(!empty($id) && $row['status'] == '0' ) selected @endif >InActive</option>
			 </select> 	  
		  </div>
		  
	
	   </div>
	   <div class="row ">
		  <div class="form-group col-12 text-right">
			 <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" > @if(!empty($id)) Save @else Add @endif Tag</button> 
		  </div>
	   </div>
   </form>
</div>