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
          <h1 class="m-0">Tags Management</h1>
        </div><!-- /.col -->

        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
            <li class="breadcrumb-item active">Tags</li>
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
              <a style="float:right" href="javascript:;" data-module="Add Tag" data-href="{{ route('addedittag') }}" data-modal-type="small" data-id="" class="btn btn-primary addedit-modal"><i class="fa fa-plus" aria-hidden="true"></i> Add Tag</a>
            </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
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
  $(document).ready(function() {
        $('#datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('tags') }}",
            data: function(d) {
              // Extract "id" from current URL query string and pass it to the request
              const urlParams = new URLSearchParams(window.location.search);
              const userId = urlParams.get('id');
              if (userId) {
                d.id = userId;
              }
            }
          },
          order: [
            [0, "desc"]
          ],
          columns: [{
              data: 'id',
              name: 'id'
            },
            {
              data: 'tag_name',
              name: 'tag_name'
            },
            {
              data: 'status',
              name: 'status'
            },
            {
              data: 'actions',
              name: 'actions',
              orderable: true,
              searchable: false
            }
          ]
        });
   });
</script>
@endsection