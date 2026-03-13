<div class="addedit-form">
   <div class="row popup-sticky">
      <div class="col-8 tab">
         <button class="tab1 project_tabs tablinks active" onclick="openTab(1)">Product Details</button>
         <button class="tab2 project_tabs tablinks" onclick="openTab(2)">Images</button>
      </div>
      <div class="col-4 " >
         <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-success save-btn top-submit-btn">Save Product</button> 
         </div>
      </div>
   </div>
   <form name="productForm" data-modal="Product" id="addEditForm" action="javascript:;" @if(!empty($id)) data-action="{{ route('saveproperty',[$id]) }}" @else data-action="{{ route('saveproperty') }}" @endif  method="post" enctype="multipart/form-data">@csrf
   <div class="row" >
      @if(!empty($id))
      <input type="hidden" name="id" value="{{ $id }}">
      @endif
      <div class="row tabcontent" id="Property_Details">
         <div class="form-group col-4">
            <label for="product_name">Product Name<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput"   id="product_name" name="product_name" placeholder="Enter Product Name" @if(!empty($id)) value="{{ $product['product_name'] }}" @endif onkeyup="get_slug('product_name','product_url')">
            <p class="error-message" id="error-product_name"></p>
         </div>
         <div class="form-group col-4">
            <label for="product_url">Product Url<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput" id="product_url" name="product_url" placeholder="Enter Product Url" @if(!empty($id)) value="{{ $product['product_url'] }}" @endif>
            <p class="error-message" id="error-product_url"></p>
         </div>
         <div class="form-group col-4">
            <label for="property_name">Category<span class="red_star"> *</span></label>
            <select id="category_id" name="category_id" class="form-control forminput">
               <option value="">Choose ... </option>
               @foreach($categories as $category)
               <option value="{{ $category['id'] }}" @if(!empty($id) && $product['category_id'] == $category['id'] ) selected @endif >&#9679;&nbsp;{{ $category['category_name'] }}</option>
               @foreach($category['sub_categories'] as $sub_category)
               <option value="{{ $sub_category['id'] }}" @if(!empty($id) && $product['category_id'] == $sub_category['id'] ) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;&raquo;{{ $sub_category['category_name'] }}</option>
               @endforeach
               @endforeach
            </select>
            <p class="error-message" id="error-category_id"></p>
         </div>
         <?php
            $selected_components = [];
            $product_components = [];
            if(!empty($id)){
              foreach($product['product_components'] as $product_component){
               $selected_components[] = $product_component['component_id'];
               $product_components[ $product_component['component_id']] = $product_component;
              }
              
              
            }else{
             foreach($components as $component){
              if($component['is_default'] == '1'){
            	  $selected_components[] = $component['id'];
              }
             }
            }
            
            
            ?>
         <div class="form-group col-12">
            <label for="components">Components<span class="red_star"> *</span></label>
            <select id="components" width="width:100%" name="components[]" class="form-control forminput selectbox MultipleSelect select2" multiple onchange="components_onchange('1')">
				@foreach($components as $component)
				<option value="{{ $component['id'] }}" @if(in_array($component['id'],$selected_components)) selected @endif>{{ $component['name'] }}</option>
				@endforeach
            </select>
            <span class="btn btn-success btn-sm select-all" style="margin-top:8px;">Select all</span>
            <span class="btn btn-danger btn-sm deselect-all" style="margin-top:8px;">Deselect all</span>
            <p class="error-message" id="error-components"></p>
         </div>
         <div class="form-group col-12">
            <table  class="table table-hover table-bordered table-striped" id="component-table" >
               <tbody>
                  <tr>
                     <th style="width:250px">Label</th>
                     <th >Value</th>
                     <th>Actions</th>
                  </tr>
                  @foreach($components as $key => $component)
                  <tr class="component-input" id="component-{{$component['id']}}" @if(in_array($component['id'],$selected_components)) @else style="display:none" @endif >
                  <td>{{ $component['name'] }}</td>
                  <td>
                     @if( $component['type'] == 'Textbox')
                     <input type="textbox" class="form-control" name="component_value_{{ $component['id'] }}" @if(!empty( $product_components) && isset( $product_components[$component['id']])) value="{{ $product_components[$component['id']]['value']; }}" @endif>
                     @endif
                     @if( $component['type'] == 'Dropdown')
                     <?php $options = json_decode($component['options']); ?>
                     <select class="form-control" name="component_value_{{ $component['id'] }}">
                        <option value="">select</option>
                        @foreach($options as $option)
                        <option value="{{ $option }}" @if(!empty( $product_components) && isset( $product_components[$component['id']]) && $product_components[$component['id']]['value'] == $option)  selected @endif>{{ $option }}</option>
                        @endforeach
                     </select>
                     @endif
                  </td>
                  <td class="text-center">
                     <a class="btn btn-danger componentRemove" data-id="{{ $component['id'] }}" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
                  </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <div class="form-group col-4">
            <label for="sort_order">Sort<span class="red_star"> *</span></label>
            <input type="text" class="form-control forminput" id="sort_order" name="sort_order" placeholder="Sort" @if(!empty($id)) value="{{ $product['sort_order'] }}" @endif>
         </div>
         <div class="form-group col-md-4">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
            <option value="1" @if(!empty($id) && $product['status'] == '1' ) selected @endif >Active</option>
            <option value="0" @if(!empty($id) && $product['status'] == '0' ) selected @endif >InActive</option>
            </select> 	  
         </div>
         <div class="form-group col-md-4">
            <label for="newly_launched">Newly Launched </label>
            <select id="newly_launched" name="newly_launched" class="form-control">
            <option value="0" @if(!empty($id) && $product['newly_launched'] == '0' ) selected @endif >No</option>
            <option value="1" @if(!empty($id) && $product['newly_launched'] == '1' ) selected @endif >Yes</option>
            </select> 	  
         </div>
      </div>
      <div class="row tabcontent" id="Images" style="display:none">
         <div class="form-group col-md-12">
            <label class="col-md-12 control-label">Product Images: <span style="color:red">Dimensions (1290 X 628)</span></label>
            <div class="col-md-12">
               <table  class="table table-hover table-bordered table-striped" id="image-table" >
                  <tbody>
                     <tr>
                        <th width="35%">Image</th>
                        <th width="35%">Sort</th>
                        <th>Actions</th>
                     </tr>
                     @if(!empty($product['product_images']))
                     @foreach($product['product_images'] as $key => $image)
                     <tr id="delete-{{$image['id']}}">
                        <td>
                           @if(!empty($image['image']))
                           <img  style="width:30%" src="{{asset('front/assets/images/products/large/'.$image['image']) }}"/>
                           @else
                           N/A
                           @endif
                        </td>
                        <td class="text-center">
                           <input id="ImageSort-{{$image['id']}}"  type="number" class="" style="width:90px" value="{{$image['image_order']}}">
                           <button data-imageid="{{$image['id']}}" style="height: 28px;padding-top: 0px" class="btn btn-success updateImageSort" type="button"> Update</button>
                        </td>
                        <td class="text-center">
                           <a   data-id="{{ $image['id'] }}" class="btn btn-danger Deleteimage" href="javascript:void(0);"><i class="fa fa-times"></i>
                           </a>
                        </td>
                     </tr>
                     @endforeach
                     @endif
                     @for ($i=1; $i <=1; $i++)
                     <tr class="blockIdWrap">
                        <td>
                           <input type="file" class="form-control" name="images[]">
                        <td>
                           <input type="text" placeholder="Image Sort" name="image_order[]" style="color:gray" autocomplete="off" class="form-control"  />
                        </td>
                        </td>
                        <td></td>
                     </tr>
                     @endfor
                  </tbody>
               </table>
               <input type="button" onclick="addImageRow()" value="Add More" />
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="row ">
         <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-primary bottom-submit-btn save-btn" >Save Product</button> 
         </div>
      </div>
   </div>
</div>
</form>
</div>