<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:white">
  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <span class="logo"><b>Back</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
    </nav>
<!--Dashboard-->
<form action="{{ route('assigment.store') }}" method="POST"  enctype="multipart/form-data">
  @csrf
 
<div class="form-group col-md-2">
  <!--section class="content">
    <div class="primary">
      
      <input type="file" name="image" id="image"></input>
      <h1>Profile</h1>
    </div>
  </section-->
</div>

<div class="form-group col-md-8">
 <section class="content-center">
      <div class="row">
            <div class="box-header with-border">
              <h3 class="box-title">Assignment Form</h3>
            </div>
            <div class="box box-primary">
            <div class="box-body">
               <div class="form-group col-md-6">
                <input type="hidden" type="text" name="name" class="form-control" value="{{ $users->name }}">
                  <b>Name</b> <a class="pull-right">{{ $users->name }}</a>
                </div>
                <div class="form-group col-md-6">
                <input type="hidden" type="text" name="sub" class="form-control" value="{{ $users->section }}">
                 <b>Section</b> <a class="pull-right">{{ $users->section }}</a>
                </div><br><br>
              
                <div class="form-group col-md-6">
                <input type="hidden" type="text" name="year" class="form-control"  value="{{ $users->year }}">
                <b>Year</b> <a class="pull-right">{{ $users->year }}</a>
                </div>
                 <div class="form-group col-md-6">
                <input type="hidden" type="text" name="sdob" class="form-control"  value="{{ $users->class }}"> 
                <b>Class</b> <a class="pull-right">{{ $users->class }}</a>
                </div><br><br>
                <div class="form-group col-md-6">
                  <input type="hidden" type="text" name="phone" class="form-control" value="{{ $users->phone }}">
                   <b>Phone</b> <a class="pull-right">{{ $users->phone }}</a>
                </div>
                <div class="form-group col-md-6">
                  <input type="hidden" type="text" name="gender" class="form-control" value="{{ $users->address }}">
                  <b>Address</b> <a class="pull-right">{{ $users->address }}</a>
                </div><br><br>
                <div class="form-group col-md-6">
                  <strong>File</strong>
                  <input type="file" name="image" id="image"></input>
                </div>
            </div>
               </div><br><br>
               <div class="form-group col-md-6">
                <a class="btn btn-danger" href="/home" role="button">Cancel</a>
              </div>
              <div class="form-group col-md-6">
              
                  <button class="btn btn-success"  type="submit"  onclick="myFunction()">Send</button>
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
        $('#datepicker1').datepicker({
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
<!--Eashboard-->
  </div><br>
    <!--<div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>-->
    </div>
</body>
</html>
