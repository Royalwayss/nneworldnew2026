@extends('admin.layout.layout')
@section('content')
@php
use App\Models\User;
@endphp

<style>
#historyTable {
    border-collapse: collapse;
}
tr.heading {
    background: #f0def7;
    height: 30px;
    font-weight: bold;
    color: #252525;
}
#id-form td {
    padding: 5px 0;
    font-weight: normal;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 13px;
}
tr.heading2 {
    background: #ffe08d;
    height: 30px;
    font-weight: bold;
    color: #252525;
}
tr.heading_enable {
    background: #c6e7a2;
    height: 30px;
    font-weight: bold;
    color: #252525;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    width:100%!important;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1 class="m-0">Category Management</h1>
        </div><!-- /.col -->
       
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
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
                <a style="float:right" href="javascript:;" data-module="Add Category" data-href="{{ route('addeditcategory') }}" data-modal-type="wide" data-id="" class="btn btn-primary addedit-modal"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Image</th>
					  <th>Category For</th>
                      <th>Name</th>
                      <th>Parent Category</th>
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


<!-- /.content-wrapper -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script>
 $(document ).ready(function() { 
	$('#datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: "{{ route('categories') }}",
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
        { data: 'image', name: 'image' },
        { data: 'category_type', name: 'category_type' },
        { data: 'category_name', name: 'category_name' },
        { data: 'parent_id', name: 'parent_id' },
        { data: 'status', name: 'status' },
        { data: 'actions', name: 'actions', orderable: false, searchable: false }
       
       
    ]
});
});
</script>
@endsection

