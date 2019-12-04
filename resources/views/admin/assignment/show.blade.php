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
        Assignment
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
      <div class="box">
        <div class="box-header with-border">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
        </div>
        <div class="box-body">
            <div class="box-body">
              <table id="example1" class="table table-hover table-warning table-bordered data-table table-striped">
           <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>YEAR</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>FILE</th>
                    <th>Action</th>
                </tr>
            </thead>
             <tbody>
               @foreach ($assignments as $key=>$assignment)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $assignment->name }}</td>
                <td>{{ $assignment->sub }}</td>
                <td>{{ $assignment->year }}</td>
                <td>{{ $assignment->gender }}</td>
                <td>{{ $assignment->phone }}</td>
                <td>
                <a  href="{{url('/images/'.$assignment->image)}}" download="{{url('/images/'.$assignment->image)}}" class="btn btn-danger">download</a>
                </td>
                <td>
                  <form id="delete-form-{{ $assignment->id }}" method="post" action="{{ route('assignment.destroy',$assignment->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                  </form>
                      <a href="" onclick="
                                  if(confirm('Are you sure, You Want to delete this?'))
                                      {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $assignment->id }}').submit();
                                      }
                                      else{
                                        event.preventDefault();
                                      }" ><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>  
          </tbody>
       
    @endforeach 
          
              </table>
            </div>

    </section>
    <!-- /.content -->
  </div>

@endsection





