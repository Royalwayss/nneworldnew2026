@extends('admin.layout.layout')
@section('content')
@php
use App\Models\Module;
$modules =  Module::get_modules() 
@endphp
<link rel="stylesheet" href="{{ asset('admin/css/sidebar.css') }}">
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{'/admin/dashboard'}}">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   @if(Session::has('error_message'))
   <div class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
      <strong>Error:</strong> {{ Session::get('error_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            @foreach($modules as $module)
            <div class="col-12 col-sm-6 col-md-3">
               <a href="{{ url($module['view_route']) }}">
                  <div class="info-box">
                     <span class="info-box-icon bg-info elevation-1" style="background-color:{{ $module['bg_color'] }}!important"><i class="nav-icon {{ $module['icon'] }}"></i></span>
                     <div class="info-box-content">
                        <span class="info-box-text">{{ $module['name'] }}</span>
                        <span class="info-box-number">
                        {{ $module['count'] }}
                        </span>
                     </div>
                  </div>
               </a>
            </div>
            @endforeach
         </div>
      </div>
   </section>
</div>
@endsection