<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Online Course Registration</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}"/>

        <link href="{{asset('frontend/css/tooplate-little-fashion.css')}}" rel="stylesheet">
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>
 <!--header-->
@include ('frontend.include.header')
<!--end header-->  

<!--slideshow-->
@include ('frontend.include.slideshow')
<!--slideshow--> 
            
<!--aboutsection-->
@include ('frontend.include.aboutsection')
<!--aboutsection--> 
           
<!--product-->
@include ('frontend.include.product')
<!--product--> 
           
  <!--productsection-->
@include ('frontend.include.productsection')
<!--productsection-->           
            

        </main>

        <!--footer-->
@include ('frontend.include.footer')
<!--end footer--> 

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/js/Headroom.js')}}"></script>
        <script src="{{asset('frontend/js/jQuery.headroom.js')}}"></script>
        <script src="{{asset('frontend/js/slick.min.js')}}"></script>
        <script src="{{asset('frontend/js/custom.js')}}"></script>

    </body>
</html>
