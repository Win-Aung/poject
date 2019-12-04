@extends('admin.layouts.app')
@section('headSection')
 <link rel="stylesheet" href="AdminLTE/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  @endsection
@section('main-content')
<form role="form" action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Post
        <small>Advanced form element</small>
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
              <a class='btn btn-success' href="{{ url('admin/post/post')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            @if (count($errors)>0)
             @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error}}</p>
              @endforeach
             @endif
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                
                 <div class="form-group">
                  <label for="title">Subtitle</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle">
                </div>
             
                <div class="form-group">
                  <label for="slug">Slugquest</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>


                <div class="form-group">
                  <strong>Image</strong><br>
                  <input type="file" name="image" id="image"></input>
                </div>

              
                <div class="form-group">
                  <label>Select Tags</label>
                  <select class="form-control select2" id="tag" name="tag"  multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;" name="name">   
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id}}">{{ $tag->name}}</option>
                    @endforeach
                  </select>
                </div>
               
                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control select2" id="category" name="category" multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;" name="categories[]">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{ $category->name}}</option>

                    @endforeach
                  </select>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
                  </label>
                </div>

                
            </div>
            
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-body pad">
              
                <textarea class="textarea" name="body" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <div class="box-footer">
              
              </div>
              
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
        <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

</form>
@endsection

@section('footerSection')
<script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script>
 $(document).ready(function(){
  $(".select2").select2();
 });
</script>

@endsection