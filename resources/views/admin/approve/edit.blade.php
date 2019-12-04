@extends('admin.layouts.app')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@section('head')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
@section('main-content')
<form role="form" action="{{ route('approve.update',$users->id) }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field()}}
             @method('PUT') 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Check 
        <small>For Student</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header with-border">
              <a class='btn btn-success' href="{{ route('approve.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="box-body">
              <div class="form-group col-md-6">
              <strong>Adnumber</strong>
              <input type="text" name="adnumber" class="form-control" placeholder="Adnumber" value="{{ $users->adnumber }}">
              </div>

               <div class="form-group col-md-6">
                <strong>Student:Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $users->name }}">
                </div>

                <div class="form-group col-md-6">
                <strong>Fa:Name</strong>
                <input type="text" name="faname" class="form-control" placeholder="FaName" value="{{ $users->faname }}"> 
                </div>

                <div class="form-group col-md-6">
                <strong>Ma:Name</strong>
                <input type="text" name="maname" class="form-control" placeholder="MaName" value="{{ $users->maname }}">
                </div>

               <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Section</label>
                  <select class="form-control" name="section" id="exampleFormControlSelect1" value="{{ $users->section }}">
                  <option>{{ $users->section }}</option>
                  
                  </select>
                  </div>

                 <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Year</label>
                  <select class="form-control" name="year" id="exampleFormControlSelect1" value="">
                  <option>{{ $users->year }}</option>
                   
                  </select>
                  </div>

                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Class</label>
                  <select class="form-control" name="class" id="exampleFormControlSelect1">
                  <option>{{ $users->class }}</option>
                 
                  </select>
                  </div>


                  <div class="form-group col-md-6">
                      <strong>Student:Birthday</strong>
                      <input name="dob" id="datepicker" class="form-control" placeholder="Date" value="{{ $users->dob }}">
                  </div>
                  <div class="form-group col-md-6">
                      <strong>Student:Phone</strong>
                      <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $users->phone }}">
                  </div>

         
        <div class="form-group col-md-6">
        <strong>Student:Email</strong>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $users->email }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        
       <div class="form-group col-md-6">
            <strong>Student:Roll</strong>
            <select class="form-control" name="roll" id="exampleFormControlSelect1" value="{{ $users->roll }}">
            <option>{{ $users->roll }}</option>
            </select>
        </div>
        <div class="form-group col-md-6">
        <strong>Student:Password</strong>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
    
     
        <div class="form-group col-md-12">
            <strong>Student:Address</strong>
            <textarea type="text" name="address" class="form-control" placeholder="Address" value="{{ $users->address }}"></textarea>
        </div>
        <div class="form-group col-md-6">
            
           <br><br><br><br><br><br>
                 <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Update</button>
        </div>
         
        <div class="form-group col-md-6">
        <strong>Student:Profile</strong><br>
        <!--img  class="" src="img-thumbnail" id="profile-img-tag" name="image" width="200px" style="background-color:red"/-->
        <img src="{{url('/images/'.$users->image)}}" id="profile-img-tag" alt="" width="200" height="200">
        <!--input type="file" name="image" id="image"></input-->
        </div> 
        
         
      </div>   
    </div>
</div>
    </section>

 </div>
</form>
  <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        
    function readURL(input) {
     
        if (input.files && input.files[0]) {
            var reader = new FileReader();   
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
        readURL(this);
    });
    </script>

@endsection





