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

 <form role="form" action="{{ route('teachers.update',$teachers->id) }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field()}}
             @method('PUT')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit 
        <small>For Teachear</small>
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
                <a class='btn btn-success' href="{{ route('teachers.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <strong>Teacher:Name</strong>
                        <input type="text" name="name" value="{{ $teachers->name }}" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                    <label for="class">Teacher:Class</label>
                        <select class="form-control" name="class" id="exampleFormControlSelect1">
                        <option>{{ $teachers->class }}</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="roll">Teacher:Roll</label>
                        <select class="form-control" name="roll" id="exampleFormControlSelect1">
                        <option>{{ $teachers->roll }}</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">BirthDay</label>
                        <input name="dob" id="datepicker" value="{{ $teachers->dob }}" class="form-control" placeholder="Class"/>
                    </div>
                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" value="{{ $teachers->phone }}" name="phone" placeholder="phone">
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $teachers->email }}" name="email" placeholder="subtitle">
                    </div>
                


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input text="address" class="form-control" id="address" value="{{ $teachers->address }}" name="address" placeholder="subtitle">
                    </div>
                
                    <div class="form-group col-md-6">
                          @foreach ($roles as $role)
                    <div class="checkbox">
                      <label><input type="checkbox" name="role[]" value="{{ $role->name}}">{{ $role->name}}</label>

                    </div>
                  @endforeach
           

                    <div class="form-group" type="hidden">
                    <input  type="hidden" class="form-control" id="phone" name="status" value="1" >
                    </div>
                    </div>


                    <div class="form-group col-md-6">
                        <strong>Teacher:Profile</strong><br>
                        <img src="{{url('/images/'.$teachers->image)}}" id="profile-img-tag" alt="" width="200" height="200">
                        <input type="file" name="image" id="image"></input>
                    </div> 
                    <div class="box-footer">
                    <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
                    </div>
                    </div>
                    
                </div>   
            </div>
        </div>
</div>
    </section>
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





