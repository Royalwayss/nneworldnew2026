@extends('admin.layout.layout')
@section('content')
@php
use App\Models\User;
@endphp

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1 class="m-0">Components Management</h1>
        </div><!-- /.col -->
       
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
            <li class="breadcrumb-item active">Components</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
                <a style="float:right" href="javascript:;" data-module="Add Component" data-href="{{ route('addeditcomponent') }}" data-modal-type="small" data-id="" class="btn btn-primary addedit-modal"><i class="fa fa-plus" aria-hidden="true"></i> Add Component</a>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Input Type</th>
                      <th>Is Default</th>
                      <th>Status</th>
					   <th>Action</th>
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
<table class="table table-hover table-bordered table-striped optionsamplerow" style="display:none;">
    <tbody>
        <tr class="appenderTr blockIdWrap">
            <td>
				<input type="textbox" class="form-control forminput option drop-down-option" name="options[]" placeholder="Enter the option">
			    <p class="error-message error-options"></p>
			</td>
            <td class="text-center">
				<a  class="btn btn-danger optionRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
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
        url: "{{ route('components') }}",
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
        { data: 'name', name: 'name' },
        { data: 'type', name: 'type' },
        { data: 'is_default', name: 'is_default' },
        { data: 'status', name: 'status' },
        { data: 'actions', name: 'actions', orderable: false, searchable: false }
       
       
    ]
});
 $(document).on("click",".optionRowRemove",function(){
        $(this).parents("tr").remove();
 });
 
 
 $(document).on("click",".component_type",function(){
	var component_type = $('.component_type').val();
	if(component_type == 'Dropdown'){
		$('#DropdownOtion').show();
		//$('.drop-down-option').attr('required', 'required'); 
		
	}else{
		$('#DropdownOtion').hide();
		//$('.drop-down-option').removeAttr('required'); 
	}
}); 
 
 
});

 

function addOptionRow(){   
        var row = jQuery('.optionsamplerow tr').clone(true);
        row.appendTo('#options-table');        
}




</script>
@endsection

