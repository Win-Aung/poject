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
        Blank page
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
          <a class='btn btn-success' href="{{ route('role.create')}}"><i class="fa fa-plus"></i> Add New</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         
            <!-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Role-Name</th>
                  <th width="160px">Action</th>
                </tr>
                </thead>
                <tbody>
                 
                @foreach ($roles as $role)
                  <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $role->name}}</td>
                 
                    
                  <td>
                    <a  class="btn btn-primary" href="{{ route('role.edit',$role->id)}}"><i class="fa fa-edit"></i></a>
                  
                  <form id="delete-form-{{ $role->id }}" method="post" action="{{ route('role.destroy',$role->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                   </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $role->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button></a>
                            </td>
                        <!--td>
                          <form action="{{ $role->id }}" method="POST">
   
                    <a  class="btn btn-primary" href="{{ route('role.edit',$role->id)}}"><i class="fa fa-edit"></i></a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                           </form>
                  </td-->
                  
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