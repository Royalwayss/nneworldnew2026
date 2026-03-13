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
          <h1 class="m-0">Visitors Management</h1>
        </div><!-- /.col -->
       
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
            <li class="breadcrumb-item active">Visitors</li>
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
             <!-- <div class="card-header">
                <h3 class="card-title">Users</h3>
                <a style="float:right" target="_blank" href="{{url('admin/export-users')}}" class="btn btn-primary">Export Users</a>
              </div>-->
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="users" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                      <th>IP address</th>
                      <th>State</th>
					  <th>Visit Date</th>
                      
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
	$('#users').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: "{{ route('visitors') }}",
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
        { data: 'user_ip', name: 'user_ip' },
        { data: 'user_info', name: 'user_info' },
        { data: 'visit_date', name: 'visit_date' },
       
    ]
});
$('#user_type').change(function() {
       var id = $(this).val(); 
       window.location.href="{{ route('updateusertype') }}"+"?id="+id;
	});
});
</script>
@endsection

