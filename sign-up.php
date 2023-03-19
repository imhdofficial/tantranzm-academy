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
    <div class="overflow-hidden">
      <div class="row">
        <div class="col-6 d-none d-sm-block" style="background-color: #15297B;">
          <div class="px-5">
            <div class="d-flex justify-content-start align-item-center my-3">
              <img src="img/white-logo.svg" alt="" class="img-fluid">
            </div>
            <h1 class="text-white AmsiProU text-uppercase pt-5">start your <br> journey with us</h1>
            <p class="text-white-50 pt-4 pe-5 fs-5">
              Unleash your potential with the most innovative skill development courses in the industry, exclusively offered at "Tantranzm Academy". Embark on a transformative learning journey today.
            </p>

            <div class="pt-5 mt-5"></div>
            <div class="pt-5 mt-5"></div>
            <div class="pt-5 mt-3"></div>
            <div class="bg-black bg-opacity-25 rounded-4 p-5">
                <p class="text-white-50">
                  "I had an exceptional experience at Tantranzm Academy. The instructors were experts in their fields and invested in our success. The curriculum was engaging and equipped me with valuable skills. I highly recommend Tantranzm Academy."
                </p>

                <div class="d-flex mt-5">
                  <img src="img/sign-up-men.png" alt="" class="img-fluid">
                  <div class="ms-3">
                    <p class="GraphikSB text-white mb-1">Aniruddh W</p>
                    <p class="GraphikR text-white mb-0">Oracle Fusion Consultant</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="pe-sm-5">
            <div class="d-flex justify-content-between justify-content-sm-end align-item-center my-5 px-5 px-sm-0">
              <img src="img/white-logo.svg" alt="" class="img-fluid d-sm-none">
              <img src="img/cross-btn.svg" alt="" class="img-fluid">
            </div>
            <div class="pt-5 d-sm-none"></div>
            <div class="px-lg-5 px-2  mx-5">
              <h1 class="text-white AmsiProU text-uppercase">Sign in</h1>
              
              <div class="pt-5"></div>
              <form action="" class="signIn">
                <input type="text" placeholder="Full Name">
                <br> <div class="pt-5"></div>
                <input type="email" placeholder="Email Address">
                <br> <div class="pt-5"></div>
                <input type="text" placeholder="Phone Number">
                <br> <div class="pt-5"></div>
                <input type="password" placeholder="Create new password">
              </form>
              <div class="pt-5"></div>
              <button style="background-color: #58C1A3;" class="border-0 rounded-1 text-white btn w-100 py-3">Sign up</button>
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
        </div>
      </div>
    </div>

    
      
      






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