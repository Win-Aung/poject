@extends('admin.layouts.app')

@section('head')

  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
           OnLine Registeration
        <small>for student</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="category"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="category">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="box-body">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                   <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Roll</th>
                    <th>Profile</th>
                    <th>confrim</th>
                    <th>Action</th> 
                </tr>
                </thead>
                <tbody>
               @foreach ($posts as $key=>$post)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->class }}</td>
            <td>{{ $post->roll }}</td>
            <td><img src="{{url('/images/'.$post->image)}}" alt="" width="100" height="50"></td>
            
               <td class="text-center">
                  @if($post->is_approved == false)
                     <a href="{{ route('register.approve', $post->id) }}"
                       class="btn btn-danger">comfirmation</a>
                        <form method="post" action="{{ route('register.approve',$post->id) }}" id="approval-form-{{ $post->id }}" style="display: none">
                           @csrf
                             @method('PUT')
                               </form>
                                 @endif 
                </td>
                 <td>
                  <form action="" method="POST">
                      <a class="btn btn-primary" href="{{ route('approve.edit',$post->id) }}"><i class="fa fa-check"></i></a>
                      
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                  </form>
                  </td>
                  
            </td>      
        </tr>  
        @endforeach 
        </tbody>
       
    
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
       
    </section>
    <!-- /.content -->
  </div>
@endsection





