@extends('admin.layouts.app')

@section('content')

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
      Post
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <div class="pull-top">
            <a class='btn btn-success' href="{{ route('post.index')}}"><i class="fa fa-plus"></i> Add New</a>
        </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
        </div>
        <div class="box-body">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Subtitle</th>
                      <th>Slugquest</th>
                      <!-- <th width="150px">Image</th> -->
                      <!-- <th>Edit</th>
                      <th>Delete</th> -->
                      <th width="160px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($posts as $post)
                      <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $post->title}}</td>
                      <td>{{ $post->subtitle}}</td>
                      <td>{{ $post->slug}}</td>
                      <!-- <td><img src="{{url('/images/'.$post->image)}}" alt="" width="150" height="150"></td> -->

                      <td>
                        <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                          <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}"><i class="fa fa-edit"></i></a>
                          @csrf
                          @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                        </form>
                      </td>
                  </tr>

                  @endforeach
               
               
                </tbody>
             
              </table>
            </div>

    </section>
    <!-- /.content -->
  </div>

@endsection





