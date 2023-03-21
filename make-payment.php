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









  <body class="bg-light brandonR">

    <!-- --------------------- This is Header ---------------------  -->
      <?php include 'includes/header.php'  ?>


    <div class="bg-white">
      <div class="container">
        <div class="pt-5 d-none d-sm-block"></div>
        <div class="pt-5 d-none d-sm-block"></div>
        <div class="row makePaymentColReverse">
          <div class="col-sm-6 col-12">
            <div class="px-lg-5">
              <p class="fs-3 GraphikSB d-none d-sm-block">Make Payment</p>
              <p class="GraphikM mt-5">Select payment gateway</p>
              <img src="img/razorpay-logo.svg" alt="" class="img-fluid">
              <div class="pt-5"></div>
              <p class="GraphikM">
                + Stripe 
                <br>
                + Paytm
              </p>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-4"></div>
              <button style="background-color: #58C1A3;" class="border-0 GraphikM rounded-0 text-white btn py-3 px-5">Pay Now</button>
            </div>
          </div>
          <div class="col-sm-6 col-12 position-relative">
            <div class="px-lg-5">
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5 d-none d-sm-block"></div>
              <p class="fs-3 GraphikSB mt-5 d-sm-none">Make Payment</p>
              <p class="GraphikSB mt-5">Order Summery  :</p>
              <div class="p-3">
                <div class="row">
                  <div class="col-7 text-capitalize">
                    <p class="GraphikR">oracle fusion technical</p>
                  </div>
                  <div class="col-5 text-end">
                    <p class="GraphikM">4242/-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7 text-capitalize">
                    <p class="GraphikR">oracle fusion technical</p>
                  </div>
                  <div class="col-5 text-end">
                    <p class="GraphikM">4242/-</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7 text-capitalize">
                    <p class="GraphikR">oracle fusion technical</p>
                  </div>
                  <div class="col-5 text-end">
                    <p class="GraphikM">4242/-</p>
                  </div>
                </div>
                <div class="row bg-light py-2">
                  <div class="col-7 ">
                    <p class="GraphikR">
                      Coupon Applied:
                      <br>
                      <span class="text-success GraphikM">AX3749JE</span> <span class="GraphikM"> 12% Discount</span>
                    </p>
                  </div>
                  <div class="col-5 text-end">
                    <p class="GraphikM text-success">- 499/-</p>
                  </div>
                </div>
                <div class="row bg-light mt-3 py-2 align-item-center">
                  <div class="col-7 text-capitalize">
                    <p class="GraphikM mb-0">Total :</p>
                  </div>
                  <div class="col-5 text-end">
                    <p class="GraphikM mb-0">₹77676</p>
                  </div>
                </div>
              </div>
              <div class="pt-3"></div>
              <div class="d-flex align-items-center px-2 lh-1">
                <img src="img/lock.svg" alt="" class="img-fluid">
                <p class="GraphikR mb-0 ps-4 text-justify"><small>This is a secure page which uses SSL/TLS (Secure Socket Layer/Transport Layer Security) to encrypt and securely transmit your payment data.</small></p>
              </div>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5 d-none d-sm-block"></div>
              <div class="pt-5"></div>
            </div>
          </div>
        </div>
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