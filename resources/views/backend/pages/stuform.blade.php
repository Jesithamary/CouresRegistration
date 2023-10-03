@extends('backend.layout.subpage')
@section('content')
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



<br>
<br>
</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
<h3>Register Form</h3></div></div>


  <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data"><br>
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
                            <option >Select a Address</option>
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
                        <label for="">Coures Types</label>
                        <select name="coures_types" id="course types" class="form-control" >
                            <option>Choose a coures</option>
                            <option value="Lampr">Lamp</option>
                            <option value="Pytho">Python</option>
                            <option value=".net">.net</option>
                            <option value="Testing">Testing</option>
                            <option value="Java">Java</option>
                            <option value="Java">C</option>
                            <option value="Java">C++</option>
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
</div>

@endsection
    