@extends('backend.layout.subpage')
@section('content')
<style>
        .container {
            max-width: 500px;
           
            margin: 0 auto;
            padding: 20px;
            /* border: 1px solid #ddd; */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        body{
          background-color:#00008B;
        }
        .form{
          background-color:#AFEEEE;
          padding:26px;
        }
        .mb-4{
          color:black;
        }
      .form-label{
          color:black;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
      <div class="form">
        <h1 class="mb-4">Staff Registration Form</h1>
        <form action="process_registration.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            
            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>  
    </div>
    @endsection
