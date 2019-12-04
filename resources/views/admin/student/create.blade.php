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

 <form role="form" action="{{ route('students.store')}}" method="post" enctype="multipart/form-data" >
              {{ csrf_field()}}
              
        @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register 
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
              <a class='btn btn-success' href="{{ route('students.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="box-body">
              <div class="form-group col-md-6">
              <strong>Animation Number</strong>
              <input type="text" name="adnumber" class="form-control" placeholder="student animation number" value="{{ old('adnumber') }}">
              </div>

               <div class="form-group col-md-6">
                <strong>Student:Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                </div>

                <div class="form-group col-md-6">
                <strong>Father:Name</strong>
                <input type="text" name="faname" class="form-control" placeholder="FaName" value="{{ old('faname') }}"> 
                </div>

                <div class="form-group col-md-6">
                <strong>Mather:Name</strong>
                <input type="text" name="maname" class="form-control" placeholder="MaName" value="{{ old('maname') }}">
                </div>

          <div class="form-group col-md-6">
                 <strong>Student:Section</strong>
                <!-- <input type="text" name="section" class="form-control" placeholder="Section" value="{{ old('section') }}"> -->
                <select class="form-control" name="section" id="exampleFormControlSelect1" value="{{ old('section') }}">
                  <option>Select Option</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                  </select>
          </div>

          <div class="form-group col-md-6">
            <strong>Student:Year</strong>
            <!-- <input type="text" name="year" class="form-control" placeholder="year" value="{{ old('year') }}"> -->
             <select class="form-control" name="year" id="inputGroupSelect01" value="{{ old('year') }}">
              <option>Select Option</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
            </select>
          </div>

        <div class="form-group col-md-6">
                <strong>Student:Class</strong>
              <!-- <input type="text" name="class" class="form-control" placeholder="Class" value="{{ old('class') }}">  -->
              <select class="form-control" name="class" id="inputGroupSelect01" value="{{ old('class') }}">
              <option>Select Option</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <strong>Student:Birthday</strong>
            <input name="dob" id="datepicker" class="form-control" placeholder="Date"value="{{ old('dob') }}">
        </div>
         <div class="form-group col-md-6">
            <strong>Student:Phone</strong>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group col-md-6">
          <strong>student:Roll</strong><br>
            <select class="form-control" name="roll" id="inputGroupSelect01">
              <option>Select Option</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
            </select>
        </div>
         <div class="form-group col-md-6">
         <strong>Student:Email</strong>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group col-md-6">
        <strong>Student:Password</strong>
        <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group col-md-6">
            <strong>Student:Address</strong>
            <textarea type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}"></textarea>
        </div>
       
       
            <div class="form-group col-md-6">
            <strong>Student:Profile</strong>
            <input type="file" name="image" id="image"></input>
            
        </div>
         <div class="form-group col-md-12">
                 <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
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





