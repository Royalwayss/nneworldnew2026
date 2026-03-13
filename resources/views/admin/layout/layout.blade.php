<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>{{config('constants.project_name')}} Admin Panel</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
      
   
      <link rel="stylesheet" href="{{ asset('admin/css/jquery.ui.autocomplete.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
	  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
      <style>
        
		 .select2-selection__rendered {
				width: 100%!important;
				margin: 10px;
				
		}
		.select2-container {
  width: 100% !important; 
}        .select2-selection--single { height:40px!important; }
		.select2-container--default.select2-container--focus .select2-selection--single {
			border-color: #80bdff;
			height: 40px!important;
			 display: block;
			width: 100%;
			height: calc(2.25rem + 2px);
			padding: .375rem .75rem;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			box-shadow: inset 0 0 0 transparent;
			transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
         }
		.select2-container--default .select2-selection--multiple .select2-selection__rendered li {
              color: black;
			  margin-left:10px;
         }

      </style>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
       <!--  <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('admin/images/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
         </div> -->
         @include('admin.layout.header')
         @include('admin.layout.sidebar')
         @yield('content')
         <aside class="control-sidebar control-sidebar-dark">
         </aside>
         @include('admin.layout.modals')
         @include('admin.layout.footer')
      </div>
      <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
      <script src="{{ asset('admin/js/adminlte.js') }}"></script>
      <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
      <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
      <script src="{{ asset('admin/js/demo.js') }}"></script>
      
      
      <script src="{{ asset('admin/js/custom.js') }}?v=2.0"></script>
      <script src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script>
         $(function () {
           
           $("#categories").DataTable({
             "order": [[ 0, "desc" ]], //or asc 
           });
           $("#products").DataTable({
             "order": [[ 0, "desc" ]], //or asc 
           });
           $("#brands").DataTable({
             "order": [[ 0, "desc" ]], //or asc 
           });
           
          
         });
      </script>
      
      <!-- Select2 -->
      <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
      <script>
         $('.select2').select2();
      </script>
      <!-- SweetAlert -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!-- Jquery Multiple Image Upload with Preview and Delete -->
     
      <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/super-build/ckeditor.js"></script>
      
    
   </body>
</html>