@extends('admin.layouts.app')

@section('head')

<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>


@section('main-content')

   <div class="content-wrapper">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Class</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <form role="form" action="{{ route('class.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Class</label>
                <!--input type="text" name="country" class="form-control select2" style="width: 100%;"-->
                <select class="form-control select2" name="country" id="inputGroupSelect01">
                  <option>Select Class Option</option>
                    <option>Grade1</option>
                    <option>Grade2</option>
                    <option>Grade3</option>
                    <option>Grade4</option>
                    <option>Grade5</option>
                    <option>Grade6</option>
                    <option>Grade7</option>
                    <option>Grade8</option>
                    <option>Grade9</option>
                    <option>Grade10</option>
                  </select>
              </div>
               <div class="form-group">
                <label>Role</label>
                <!--input type="text" name="state" class="form-control select2" style="width: 100%;"-->
                <select class="form-control select2" name="state">
                  <option>Select Role Option</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                  </select>

              </div>
               <div class="form-group">
              <label>Years</label>
                <select class="form-control select2" name="city">
                <option>Select Year Option</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                </select>
              </div>
            
           <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
            </div></form>

          
          </div>
          <!-- /.row -->
        </div>
    </div>
<div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
           <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Class</th>
              <th scope="col">Role</th>
              <th scope="col">Year</th>
              <th width="180px">Action</th>
            </tr>
          </thead>
          <tbody>
      @foreach ($croles as $crole)
    <tr>
      <th scope="row">{{ $loop->index + 1 }}</th>
      <td>{{ $crole->country}}</td>
      <td>{{ $crole->state}}</td>
      <td>{{ $crole->city}}</td>
       <td>
          <a  class="btn btn-primary" href="{{ route('class.edit',$crole->id)}}"><i class="fa fa-edit"></i></a>

                <form id="delete-form-{{ $crole->id }}" method="post" action="{{ route('class.destroy',$crole->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                </form>
                    <a href="" onclick="
                        if(confirm('Are you sure, You Want to delete this?'))
                          {
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $crole->id }}').submit();
                          }
                          else{
                                event.preventDefault();
                              }" ><button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                      
                  </td>
                </tr>
    </tr>
     @endforeach
   
  </tbody>
                
               
      </table>
</div>
      
</div>
@endsection




 
