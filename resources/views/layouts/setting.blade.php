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
@section('head')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  @section('headSection')

  @show
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:gray">
  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <span class="logo"><b>HOME</b></span>
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
<form action="" method="POST"  enctype="multipart/form-data">
<div class="form-group col-md-4">
  <section class="content">
    <div class="primary">
      <img  class="" src="img-thumbnail" id="profile-img-tag" name="image" width="350px"/> 
      <input type="file" name="image" id="image"></input>
      <h1>Profile</h1>
    </div>
  </section>
</div>
<div class="form-group col-md-8">
 <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Student_Registration Form</h3>
            </div>
            <div class="box-body">
               <div class="form-group col-md-6">
                <strong>Student:Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('adnumber') }}">
                </div>

                <div class="form-group col-md-6">
                <strong>Father:Name</strong>
                <input type="text" name="faname" class="form-control" placeholder="FaName" value="{{ old('adnumber') }}"> 
                </div>

                <div class="form-group col-md-6">
                <strong>Mather:Name</strong>
                <input type="text" name="maname" class="form-control" placeholder="MaName" value="{{ old('maname') }}">
                </div>


                 <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Gender</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select Option</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  </div>


                  <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Section</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select Option</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  </div>

                 <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Year</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select Option</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                  </select>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Class</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select Option</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                  </select>
                  </div>


                <div class="form-group col-md-6">
                    <strong>Student:Dob</strong>
                    <input name="datepicker" id="datepicker" class="form-control" placeholder="Date"value="{{ old('adnumber') }}">
                </div>
                <div class="form-group col-md-6">
                    <strong>Student:Phone</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                </div>

                <div class="form-group col-md-6">
                    <strong>Student:Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                </div>
                
                <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

               <div class="form-group col-md-6">
                <a class="btn btn-primary" href="/home" role="button">Cancel</a>
              </div>
              
              
                <div class="box-footer">
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
<!--Eashboard-->
  </div><br>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>

  </header>


</body>
</html>
