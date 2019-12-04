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
    <section class="content-header"><br>
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
                    <th>Logo/Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th width="150px">Logo/Image</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($settings as $settings)
								<tr>
                <!-- <td>{{ $loop->index + 1 }}</td> -->
								<td>{{ $settings->name}}</td>
                <td>{{ $settings->phone}}</td>
                <td>{{ $settings->address}}</td>
                <td><img src="{{url('/images/'.$settings->image)}}" alt="Cinque Terre" width="50" height="50"></td>
                
                <td><a class="btn btn-primary" href="{{ route('adminsetting.edit',$settings->id) }}"><i class="fa fa-edit"></i></a></td>
								</tr>
                @endforeach	
              </tbody>
              </table>
            </div>

    </section>
    <!-- /.content -->
  </div>

@endsection





