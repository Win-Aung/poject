<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
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

<div class="form-group col-md-12">
 <section class="content-center-fuild">
      <div class="row">
            <div class="card-body" id="app">
                <chat-app :user="{{ auth()->user() }}"></chat-app>
            </div>
      </div>
  </section>
</div>

 <script src="{{ asset('js/app.js') }}"></script>
   
    
<!--Eashboard-->
  </div><br>
    <!--<div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>-->
    </div>
</body>
</html>
