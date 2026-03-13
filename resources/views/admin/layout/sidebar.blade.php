@php
use App\Models\Module;
$modules =  Module::get_modules() 
@endphp
<link rel="stylesheet" href="{{ asset('admin/css/sidebar.css') }}">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="{{url('admin/dashboard')}}" class="brand-link" style="background-color:#fff; border:0px !important;">
      <img src="{{ asset('front/assets/images/logo.png') }}" alt="Logo" class="brand-image" style="width:120px; height:auto; max-height:100% !important; border:0px !important;">
   </a>
   <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <a href="{{ route('adminprofile') }}" class="d-block">
				@if(!empty(Auth::guard('admin')->user()->image))
				<img src="{{ asset('admin/images/photos/'.Auth::guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="User Image">
				@else
				<img src="{{ asset('admin/images/no-image.png') }}" class="img-circle elevation-2" alt="User Image"> 
				@endif
			</a>
         </div>
         <div class="info">
            <a href="{{ route('adminprofile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
         </div>
      </div>
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if(Session::get('page')=="dashboard")
				@php $active="active" @endphp
            @else
				@php $active = "" @endphp
            @endif
				<li class="nav-item">
				   <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $active }}">
					  <i class="nav-icon fas fa-th"></i>
					  <p>Dashboard </p>
				   </a>
				</li>
            @foreach($modules as $module)
				@if(Session::get('page')==$module['session_value'])
					@php $active="active" @endphp
				@else
					@php $active = "" @endphp
				@endif
				<li class="nav-item menu-open">
				   <a href="{{ url($module['view_route'])}}" class="nav-link {{$active}}">
					  <i class="nav-icon {{ $module['icon'] }}"></i>
					  <p style="font-size:15.5px !important">{{ $module['name'] }}</p>
					  @if(!empty($module['unseen']))
					  <small  style="color:red;">&nbsp;&nbsp; <i class="fa fa-eye-slash" aria-hidden="true"></i>&nbsp; {{ $module['unseen'] }}</small>
				      @endif
				   </a>
				</li>
            @endforeach
         </ul>
      </nav>
   </div>
</aside>