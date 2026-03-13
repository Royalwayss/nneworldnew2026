<div class="view-data">
   <form name="componentForm" data-modal="Component" id="addEditForm" action="javascript:;" @if(!empty($id)) data-action="{{ route('savecomponent',[$id]) }}" @else data-action="{{ route('savecomponent') }}" @endif  method="post" enctype="multipart/form-data">@csrf
	   @if(!empty($id))
	   <input type="hidden" name="id" value="{{ $id }}">
	   @endif
	   <div class="row">
		  <div class="form-group col-12">
			 <label for="name">Component Name<span class="red_star"> *</span></label>
			 <input type="textbox"  class="form-control forminput"   id="name" name="name" placeholder="Name" @if(!empty($id)) value="{{ $row['name'] }}" @endif >
			 <p class="error-message" id="error-name"></p>
		  </div>
		  <div class="form-group col-12">
			 <label for="type">Component Type<span class="red_star"> *</span></label>
			 <select id="type" name="type" class="form-control forminput component_type" onchange="component_type()">
				<option value="">Select</option>
				<option value="Textbox" @if(!empty($id) && $row['type'] == 'Textbox') selected @endif >Textbox</option>
				<option value="Dropdown" @if(!empty($id) && $row['type'] == 'Dropdown') selected @endif >Dropdown</option>
			 </select>
			 <p class="error-message" id="error-type"></p>
		  </div>
		  
		   <div class="form-group col-12" @if(empty($id) || $row['type'] != 'Dropdown')  style="display:none" @endif id="DropdownOtion">
		          <table  class="table table-hover table-bordered table-striped" id="options-table" >
						<thead>
							<tr>
								  <td>Options</td>
								  <td>Action</td>
							</tr>
						</thead>
						<tbody>
						
						    @if(!empty($id) && $row['type'] == 'Dropdown')
								<?php $options = json_decode($row['options']); ?>
							   @foreach($options as $option)
							      <tr>
								   <td>
									  <input type="textbox" class="form-control forminput option" name="options[]" placeholder="Enter the option" value="{{ $option }}">
								      <p class="error-message error-options"></p>
								   </td>
								    <td class="text-center">
										<a  class="btn btn-danger optionRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>  </a>
									</td>
							    </tr>
								@endforeach
						    @else
								<tr>
									  <td>
										<input type="textbox" class="form-control forminput option drop-down-option" name="options[]" placeholder="Enter the option">
										<p class="error-message error-options"></p>
									  </td>
									  <td></td>
								</tr>
							@endif
						</tbody>
						</tr>
		           </table>
				   <input type="button" value="Add" onclick="addOptionRow()">
		   </div>
		  
		  
		  
		  
		  
		  <div class="form-group col-4">
			 <label for="sort_order">Sort<span class="red_star"> *</span></label>
			 <input type="number"  class="form-control forminput"   id="sort_order" name="sort_order" placeholder="Component Sort" @if(!empty($id)) value="{{ $row['sort_order'] }}" @endif >
			 <p class="error-message" id="error-sort_order"></p>
		  </div>
		  <div class="form-group col-md-4">
			 <label for="is_default">Is Default </label>
			 <select id="is_default" name="is_default" class="form-control forminput">
			 <option value="0" @if(!empty($id) && $row['is_default'] == '0' ) selected @endif >No</option>
			 <option value="1" @if(!empty($id) && $row['is_default'] == '1' ) selected @endif >Yes</option>
			 </select> 	  
		  </div>
		  <div class="form-group col-md-4">
			 <label for="status">Status </label>
			 <select id="status" name="status" class="form-control forminput">
			 <option value="1" @if(!empty($id) && $row['status'] == '1' ) selected @endif >Active</option>
			 <option value="0" @if(!empty($id) && $row['status'] == '0' ) selected @endif >InActive</option>
			 </select> 	  
		  </div>
	   </div>
	   <div class="row ">
		  <div class="form-group col-12 text-right">
			 <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" > @if(!empty($id)) Save @else Add @endif Component</button> 
		  </div>
	   </div>
   </form>
</div>