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



      <div class="container">
        <div class="pt-4"></div>
        <div class="row">
          <div class="col-lg-7 bg-white position-relative">
            <img src="img/printer-icon.svg" alt="" class="img-fluid printerIcon">
            <div class="px-5">
              <div class="pt-5"></div>
              <div class="pt-5"></div>
              <p class="text-success fs-3 GraphikSB">Thank you for your order!</p>
              <p class="GraphikM pe-5 me-5 text-black-50">Your payment was done successfully. You can find your purchases
                in My Purchases section</p>
              <p class="GraphikSB mt-5">Details of order:</p>
              <div class="bg-light p-3">
                <div class="row">
                  <div class="col-7">
                    <p class="GraphikM">Date of purchase :</p>
                  </div>
                  <div class="col-5">
                    <p class="GraphikR">May 23, 2022  01:00 PM</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7">
                    <p class="GraphikM">Order Id :</p>
                  </div>
                  <div class="col-5">
                    <p class="GraphikR">77293827422383</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7">
                    <p class="GraphikM">Items :</p>
                  </div>
                  <div class="col-5">
                    <p class="GraphikR">Oracle fusion technical, <br> Java programming</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7">
                    <p class="GraphikM">Payment method :</p>
                  </div>
                  <div class="col-5">
                    <p class="GraphikR">RazorPay</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7">
                    <p class="GraphikM">Total :</p>
                  </div>
                  <div class="col-5">
                    <p class="GraphikR">₹77676</p>
                  </div>
                </div>
              </div>
              <div class="pt-4"></div>
              <button style="background-color: #58C1A3;" class="border-0 GraphikM rounded-0 text-white btn py-3 px-4">View Your Purchase</button>
              <div class="pt-5"></div>
              <div class="pt-5"></div>
              <div class="pt-5"></div>
              <div class="pt-5"></div>

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