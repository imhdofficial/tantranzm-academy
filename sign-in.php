<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TantranZm</title>
    <link rel="shortcut icon" href="img/ficon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="js/owlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owlCarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="js/owlCarousel/assets/animate.min.css"> 
    <link rel="stylesheet" href="js/owlCarousel/assets/animate.min.css"> 
    <link rel="stylesheet" href="js/odometer/odometer-theme-car.css" />

    <link rel="stylesheet" href="css/aos.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/jquery.min.js"></script>
    <script src="js/odometer.min.js"></script>
  </head>









  <body class="bg-dark GraphikR">
    <div class="container">
      <div class="d-flex justify-content-between align-item-center my-3">
        <img src="img/white-logo.svg" alt="" class="img-fluid">
        <img src="img/cross-btn.svg" alt="" class="img-fluid">
      </div>

      <div class="pt-5 mt-5"></div>
      <div class="row justify-content-center">
        <div class="col"></div>
        <div class="col-sm-4 col-12 px-2 px-sm-0">
          <div class="">
            <h1 class="text-white AmsiProU text-uppercase">Sign in</h1>
            <p class="text-white GraphikSB">New to TantranZm Academy ? <span class="text-primary ms-3">Sign up for free</span></p>
            <div class="pt-5"></div>
            <form action="" class="signIn">
              <input type="email" placeholder="Email Address">
              <br> <div class="pt-4"></div>
              <input type="password" placeholder="Password">
            </form>
            <p class="text-primary mt-4">Forgot password?</p>
            <button style="background-color: #58C1A3;" class="border-0 rounded-1 text-white btn w-100 py-3">Sign in</button>
            <p class="text-center text-white-50 my-3">
              <small>or</small>
            </p>
            <button class="border-0 rounded-1 bg-white text-muted btn w-100 py-3"><img src="img/google-logo.svg" alt="" class="img-fluid me-4"><span>Continue with Google</span></button>
            <div class="pt-5 mt-5"></div>
            <div class="pt-5 mt-5"></div>
            <p class="text-center text-white">
              <small>© 2022 Tantranzm Academy</small>
            </p>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>

    
      
      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/odometer.js"></script>




    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.odometer').html(
            
          ) // with jQuery
            
        });


        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
              loop:true,
              margin:30,
              nav:true,
              dots:false,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:3
                  },
                  1000:{
                      items:3.5
                  }
              }
          })
            
        });
        
    </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  $(document).ready(function(){
    $('[data-aos]').wrap(`<span style="overflow: hidden;display: inline-block;"></span>`);
  });
 AOS.init({
  offset: 120
 });
</script>
    
  </body>
</html>