<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" href="admin/flag.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  @section('headSection')

  @show
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:white">
  <header class="main-header">
    <!-- Logo -->
    <a href="/home" class="logo">
      <span class="logo"><b>BACK</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
              <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}   
              </a>
              <!--div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
              </div-->
          </li>
           <li class="nav-item">
             @if (Auth::guest())
            <a class="nav-link" href="{{ route('login')}}">Login</a>
             @else
             
           <a  class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
            </form>

             @endif
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
<!--Dashboard-->

<div class="form-group col-md-4">
          <!-- Profile Image -->
            <!--div class="box-body box-profile">
              <img class="img-thumbnail"  src="{{url('/images/'.$users->image)}}" alt="User profile picture">
              <input type="file" name="image" id="image"></input>
              
            </div-->
</div>
<form action="{{ route('profile.update',$users->id) }}" method="POST"  enctype="multipart/form-data">
@csrf
@method('PUT')
<section class="content-fuild">

      <div class="row">
        <div class="col-md-4">
            <div class="box-body box-profile">
              <img class="img-thumbnail" src="{{url('/images/'.$users->image)}}" alt="User profile picture">
               <input type="hidden" type="text" name="name" class="form-control" value="{{ $users->name }}">
              <h3 class="profile-username text-center">{{ $users->name }}</h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <input type="hidden" type="text" name="adnumber" class="form-control" value="{{ $users->adnumber }}">
                  <b>ID</b> <a class="pull-right">{{ $users->adnumber }}</a>
                </li>
                <li class="list-group-item">
                <input type="hidden" type="text" name="faname" class="form-control" placeholder="FaName" value="{{ $users->faname }}"> 
                  <b>Father:Name</b> <a class="pull-right">{{ $users->faname }}</a>
                </li>
                <li class="list-group-item">
                <input type="hidden" type="text" name="maname" class="form-control" placeholder="MaName" value="{{ $users->maname }}">
                  <b>Mather:Name</b> <a class="pull-right">{{ $users->maname }}</a>
                </li>
                 <li class="list-group-item">
                  <input type="hidden" type="text" name="section" class="form-control" placeholder="Section" value="{{ $users->section }}">
                  <b>Section</b> <a class="pull-right">{{ $users->section }}</a>
                </li>
                <li class="list-group-item">
                  <input type="hidden" type="text" name="year" class="form-control" placeholder="year" value="{{ $users->year }}">
                  <b>Year</b> <a class="pull-right">{{ $users->year }}</a>
                </li>
                <li class="list-group-item">
                  <input type="hidden" type="text" name="class" class="form-control" placeholder="Class" value="{{ $users->class }}"> 
                  <b>Class</b> <a class="pull-right">{{ $users->class }}</a>
                </li>
                <li class="list-group-item">
                  <input type="hidden" type="text" name="class" class="form-control" placeholder="Class" value="{{ $users->roll }}"> 
                  <b>Roll</b> <a class="pull-right">{{ $users->roll }}</a>
                </li>
                
                <li class="list-group-item">
                  <input type="hidden" name="datepicker" id="datepicker" class="form-control" placeholder="Date"value="{{ $users->datepicker }}"> 
                  <b>Birthday</b> <a class="pull-right">{{ $users->datepicker }}</a>
                </li>
                <li class="list-group-item">
                  <b>PhoneNumber</b> <a class="pull-right"><input  type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $users->phone }}"></a>
                </li>
                 <li class="list-group-item">
                  <b>Address</b> <a class="pull-right"><input type="text" name="address" class="form-control" placeholder="Address" value="{{ $users->address }}"></a>
                </li>
                 <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><input type="email" class="form-control" name="email" placeholder="Email" value="{{ $users->email }}"></a>
                </li>
                
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><input  type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}"></a>
                </li>
                <li class="list-group-item">
                  <b>Profile</b> <a class="pull-right"> <input type="file" name="image" id="image"></input></a>
                </li>
              </ul>

               <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Update</button>
            </div>
            <!-- /.box-body -->
          </div>
</form>
<div class="form-group col-md-4">
        
</div>
<!--Eashboard-->
 
 <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        // $('#datepicker').datepicker({
        //     uiLibrary: 'bootstrap4'
        // });
        
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

  </header>


</body>
</html>
