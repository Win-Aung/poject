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
        Admin-Page
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
          <!-- <h3 class="box-title">Tag</h3> -->
            <div class="pull-top">
            <a class="btn btn-success"  href="{{ route('teachers.create') }}"><i class="fa fa-plus"></i> Create New Teacher</a>
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
                    <th width="5px">No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Address</th>
                    <th width="160px">Action</th>
                </tr>
            </thead>
            <tbody>
                   @foreach ($teachers as $key=>$teacher)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->class }}</td>
            <td>{{ $teacher->address }}</td>
           <!--th><img src="{{url('/images/'.$teacher->image)}}" alt="" width="100" height="50"></th-->
            <td>
                <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}"><i class="fa fa-edit"></i></a>
                

            <form id="delete-form-{{ $teacher->id }}" method="post" action="{{ route('teachers.destroy',$teacher->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                   </form>
                   <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $teacher->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button></a>
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





