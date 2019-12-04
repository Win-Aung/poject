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
        New Student Register
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
            <a class="btn btn-success"  href="{{ route('students.create') }}"><i class="fa fa-plus"></i> Create New Student</a>
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
                    <th>Id</th>
                    <th>Name</th>
                    <th>class</th>
                    <th>Roll</th>
                    <th width="150px">Image</th>
                    <th width="160px">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($students as $key=>$student)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->roll }}</td>
            <td><img src="{{url('/images/'.$student->image)}}" alt="" width="100" height="50"></td>
           
           <td>
                <!-- <form action="{{ route('students.destroy',$student->id) }}" method="POST"> -->
               
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="fa fa-edit"></i></a>
                  <!--   @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>-->
               
                
                               <form id="delete-form-{{ $student->id }}" method="post" action="{{ route('students.destroy',$student->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                   </form>
                   <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $student->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button></a>
            </td>
        </tr>  
        <tbody>
       
    @endforeach 
          
              </table>
            </div>

    </section>
    <!-- /.content -->
  </div>

@endsection





