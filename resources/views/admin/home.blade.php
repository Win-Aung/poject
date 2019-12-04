@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{ $teacher }}</h3>
              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="{{ url('admin/user/')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $users }}</sup></h3>
              <p>Student</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </div>
            <a href="{{ url('admin/students/')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $tags }}</h3>

              <p>Tag</p>
            </div>
            <div class="icon">
              <i class="fa fa-tags"></i>
            </div>
            <a href="{{ url('admin/tag/tag')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $crols }}</h3>
              <p>Class and Section</p>
            </div>
            <div class="icon">
              <i class="fab fa-expeditedssl"></i>
            </div>
            <a href="{{ url('admin/class/')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $assignments }}</h3>
              <p>Assignment</p>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
            <a href="{{ url('admin/assignment/')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
       <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>{{ $categorys }}</h3>
              <p>Category</p>
            </div>
            <div class="icon">
              <i class="fa fa-align-left"></i>
            </div>
            <a href="{{ url('admin/category/category')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
         <!-- ./col -->
         <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
            <h3>{{ $teacher }}</h3>
              <p>Teacher</p>
            </div>
            <div class="icon">
              <i class="fa fa-align-left"></i>
            </div>
            <a href="{{ url('admin/teachers/')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>

         <!-- ./col -->
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3>{{ $permession }}</h3>
              <p>Permession</p>
            </div>
            <div class="icon">
              <i class="fa fa-align-left"></i>
            </div>
            <a href="{{ url('admin/permession')}}" class="small-box-footer"><i class="fa fa-check-square"></i></a>
          </div>
        </div>
         <!-- ./col -->
         <div class="col-lg-8 col-xs-6">
          <div class="small-box bg-light-blue-active">
           
              <h3>@include('clander')</h3>
             
        
          </div>
        </div>
        
      </div>
      
    </div>
    
@endsection