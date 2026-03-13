@extends('admin.layout.layout')
@section('content')
<style>
   body {
   color: #000;
   overflow-x: hidden;
   height: 100%;
   background-color: #D1C4E9;
   background-repeat: no-repeat;
   }
   .red_star{ color:red; }
   .container {
   margin: 200px auto;
   }
   fieldset {
   display: none;
   }
   fieldset.show {
   display: block;
   }
   select:focus, input:focus {
   -moz-box-shadow: none !important;
   -webkit-box-shadow: none !important;
   box-shadow: none !important;
   border: 1px solid #2196F3 !important;
   outline-width: 0 !important;
   font-weight: 400;
   }
   button:focus {
   -moz-box-shadow: none !important;
   -webkit-box-shadow: none !important;
   box-shadow: none !important;
   outline-width: 0;
   }
   .project_tabs {
   margin: 2px 5px 0px 5px;
   padding-bottom: 10px;
   cursor: pointer;
   }
   .project_tabs:hover, .project_tabs.active {
   border-bottom: 1px solid #2196F3;
   }
   a:hover {
   text-decoration: none;
   color: #1565C0;
   }
   .box {
   margin-bottom: 10px;
   border-radius: 5px;
   padding: 10px;
   }
   .modal-backdrop { 
   background-color: #64B5F6;
   }
   .line {
   background-color: #CFD8DC;
   height: 1px;
   width: 100%;
   }
   @media screen and (max-width: 768px) {
   .project_tabs h6 {
   font-size: 12px;
   }
   }
   .popup-sticky {
   position: sticky;
   top: 0;
   padding-top: 6px;
   z-index:10000;
   background-color: #f1f1f1;
   color: #f1f1f1;
   }
   .tab {
   overflow: hidden;
   background-color: #f1f1f1;
   }
   .tab button {
   background-color: inherit;
   float: left;
   border: none;
   outline: none;
   cursor: pointer;
   padding: 14px 16px;
   transition: 0.3s;
   font-size: 17px;
   }
   .tab button:hover {
   background-color: #ddd;
   }
   /
   .tab button.active {
   background-color: #ccc!important;
   }
   .tabcontent{ margin:10px; }
   @-webkit-keyframes fadeEffect {
   from {opacity: 0;}
   to {opacity: 1;}
   }
   @keyframes fadeEffect {
   from {opacity: 0;}
   to {opacity: 1;}
   }
   		
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Products Management</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
                  <li class="breadcrumb-item active">Products</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               @if(Session::has('success_message'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success:</strong> {{ Session::get('success_message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               @endif 
               <div class="card">
                  @if($usersModule['edit_access']==1 || $usersModule['full_access']==1)
                  <div class="card-header">
                     <a style="float:right" href="javascript:;" data-module="Add Product" data-href="{{ route('addeditproduct') }}" data-modal-type="wider" data-id="" class="btn btn-primary addedit-modal"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>
                  </div>
                  @endif
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Image</th>
                              <th>Product Name</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- Append Table Rows -->
<table class="table table-hover table-bordered table-striped imagesamplerow" style="display:none;">
   <tbody>
      <tr class="appenderTr blockIdWrap">
         <td>
            <input type="file" class="form-control" name="images[]">
         </td>
         <td>
            <input type="number" placeholder="Image Sort" name="image_sort[]" style="color:gray" autocomplete="off" class="form-control" required />
         </td>
         <td class="text-center">
            <a  class="btn btn-danger imageRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
         </td>
      </tr>
   </tbody>
</table>
<!-- /.content-wrapper -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script>
   $(document ).ready(function() { 
   
   $('#datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url: "{{ route('products') }}",
          data: function (d) {
              // Extract "id" from current URL query string and pass it to the request
              const urlParams = new URLSearchParams(window.location.search);
              const userId = urlParams.get('id');
              if (userId) {
                  d.id = userId;
              }
          }
      },
      order: [[0, "desc"]],
      columns: [
          { data: 'id', name: 'id' },
          { data: 'product_image', name: 'property_images.image',orderable: false, searchable: false },
   	{ data: 'product_name', name: 'product_name' },
          { data: 'category_name', name: 'categories.category_name' },
          { data: 'status', name: 'status' },
          { data: 'actions', name: 'actions', orderable: false, searchable: false }
      ]
   });
    
    
   
      $('.imageRowRemove').on("click", function() {
          $(this).parents("tr").remove();
      });
   
   
   
   
   
   
   });
   
   
   
   $(document).on('click','.componentRemove',function(){ 
       var id = $(this).attr('data-id');
    $('#component-'+id).hide();
    //$('#components option[value="'+id+'"]').remove();
       //$('#components').trigger('change');
    
    
    
    var selected_components = $("#components").val();
    
    var new_selected_components = $.grep(selected_components, function(value) {
          return value != id;
       });
    
    
    
    
    
    
    
    $('#components').val(new_selected_components).trigger('change');
   });
   
   
 
   
   $(document).on('click','.updateImageSort',function(){
          var imageid = $(this).data('imageid');
          var imagesort = $('#ImageSort-'+imageid).val();
          $.ajax({
              data : {imageid:imageid,imagesort:imagesort},
              url : "{{ route('updateimagesort') }}",
              type : "get",
              success:function(resp){
                  alert('Sort updated successfully');
              },
              error:function(){
   
              }
          })
      })
      $(document).on('click','.Deleteimage',function(){ 
          var id = $(this).attr('data-id');
   	$.ajax({
              data : {id:id},
              url : "{{ route('imagedelete') }}",
              type : "get",
              success:function(resp){
   			$("#delete-"+id).remove();
                  //alert('Image has been deleted successfully');
   			
              },
              error:function(){
   
              }
          })
      });
   
   $(document).on('click','.top-submit-btn',function(){ 
         $(".bottom-submit-btn").trigger("click");
   });
   
   
   
   
   
   function components_onchange(){
    
      $('.component-input').hide();
   var components = $("#components").val();
   $.each(components, function(index, value) {
            $("#component-"+value).show();
      });
   }
   
   function addImageRow(){   
          var row = jQuery('.imagesamplerow tr').clone(true);
          row.appendTo('#image-table');        
      }
   function state_onchange(){
        $('.loadingDiv').show();
   	var state = $('#state').find(":selected").attr("data-id"); 
       $.ajax({
   			 
                   headers: {
   	        'X-CSRF-TOKEN': '{{ csrf_token() }}'
   	        },
   			 url: "{{ route('get_city') }}",
   			 type:'POST',
   			
   			 data: { state:state },
   			 
   		     success:function(resp){ 
   	    	 $('.loadingDiv').hide();
   							 if(resp.status == true){
   										 
   											 //$('#city').select2();
   											 $("#city").html(resp.html);
   											 
   										 }else{
   				  
   			 }
   
                               							 
   									
   			
   			 
   	    },error:function(){
   	    	$('.loadingDiv').hide();
   			
   	    }	
   	});
   
   
   
   }	
   
   function openTab(tab) {
    if(tab == '1'){
     $("#Property_Details").show();
     $("#Images").hide();
     $(".tab1").addClass('active'); 
     $(".tab2").removeClass('active'); 
    }else{ 
     $("#Property_Details").hide();
     $("#Images").show();
     $(".tab1").removeClass('active'); 
     $(".tab2").addClass('active');
    }
   }
   
</script>
</script>
@endsection