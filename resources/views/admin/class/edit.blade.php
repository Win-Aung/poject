@extends('admin.layouts.app')

@section('head')

<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">


 
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

@endsection

@section('main-content')
<form role="form" action="{{ route('class.update',$croles->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              {{ method_field('PATCH') }}

   <div class="content-wrapper">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Class</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
       
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          <div class="box-header with-border">
              <a class='btn btn-success' href="{{ route('class.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Class</label>
                <!--input type="text" name="country" class="form-control select2" style="width: 100%;" value="{{ $croles->country }}"-->
                <select class="form-control select2" name="country">
                  <option>{{ $croles->country }}</option>
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
                <!--input type="text" name="state" class="form-control select2" style="width: 100%;" value="{{ $croles->state }}"-->
                 <select class="form-control select2" name="state">
                  <option>{{ $croles->state }}</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                  </select>
                  
                
              </div>
               <div class="form-group">
                <label>Years</label>
                <!--input type="text" name="city" class="form-control select2" style="width: 100%;" value="{{ $croles->city }}"-->
                 <select class="form-control select2" name="city">
                <option>{{ $croles->city }}</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                </select>
                  
                
              </div>
           <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
   </div>
 </div>

</form>

@endsection





