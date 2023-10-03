<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="{{ asset('backend/assets/css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{ asset('backend/assets/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('backend/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('backend/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('backend/assets/css/app-style.css')}}" rel="stylesheet"/>
  </head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #030C0F; */
  padding: 20px;
}
</style>
<body class="bg-theme bg-theme1">
 
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  @include('backend.include.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('backend.include.header')
<!--End topbar header-->

 <!-- <br>
<br>
<br>
</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
<h3>Register Form</h3></div></div>


  <form action="" method="POST" enctype="multipart/form-data"><br>
    @csrf
  
    <div class="row">
  <div class="col-md-4"></div>
    <div class="form-group col-md-8">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" class="form-control">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
    <div class="form-group col-md-8">
    <label for="lname">Mail</label>
    <input type="email" id="mail" name="email" class="form-control">
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
    <div class="form-group col-md-8">
    <label for="lname">Age</label>
    <input type="number" id="age" name="age" class="form-control"></div>
   
    </div>
    <div class="row">
    <div class="col-md-4"></div>
                   <div class="form-group col-md-8">
                        <label for="">Gender:</label><br>
                        
                        <input type="radio" name="gender" value="Male" >Male
                        <input type="radio" name="gender" value="Female" >Female
                        <input type="radio" name="gender" value="Other" >Other</div>
</div>

<div class="row"> 
<div class="col-md-4"></div>
                        <div class="form-group col-md-8">
                        <label for="">Address</label>
                        <select name="address" id="address" class="form-control" >
                            <option value="">Select a Address</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Osur">Osur</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Yelagiri">Yelagiri</option>
                        </select></div>
                        </div>
                        <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-8">
                        <label for="">CouresTypes</label>
                        <select name="jcoures_types" id="course types" class="form-control" >
                            <option value="">Choose a coures</option>
                            <option value="Lampr">Lamp</option>
                            <option value="Pytho">Python</option>
                            <option value=".net">.net</option>
                            <option value="Testing">Testing</option>
                            <option value="Java">Java</option>
                        </select></div>
                        </div>
                        <div class="row">
                        <div class="col-md-4"></div>
                    <div class="form-group col-lg-8">
                            <lable for="">Upload file</lable>
                            <input type="file" class="form-control" name="file" id="fileToUpload" required></div><br>
                    
                            </div>

                            <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
    <input type="submit" name="submit" id="submit" class="btn btn-primary"></div></div>
  </form>
</div>
</div>
</div>
</div>
</div>  -->
     













@yield('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

<!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	@include('backend.include.footer')
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/bootstrap.min.js')}}"></script>
	
 <!-- simplebar js -->
  <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('backend/assets/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
  <script src="{{ asset('backend/assets/js/jquery.loading-indicator.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('backend/assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  
  <script src="{{ asset('backend/assets/plugins/Chart.js/Chart.min.js')}}"></script>
 
  <!-- Index js -->
  <script src="{{ asset('backend/assets/js/index.js')}}"></script>

  
</body>
</html>
