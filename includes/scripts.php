<script src="js/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/odometer.js"></script>




    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <script>
         
       
      function smartMenu(){
          $("body").toggleClass("smartMenu");
      }
      

        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
              loop:true,
              margin:30,
              nav:true,
              dots:false,
              responsive:{
                  0:{
                      items:1.2
                  },
                  600:{
                      items:3.3
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
    $('[data-aos]:not(.no-lock)').wrap(`<span style="overflow: hidden;display: inline-block;"></span>`);
  });
 AOS.init({
  offset: 120
 });


 function toggleFilters(){
    $("#allCategories").toggleClass("d-none");
}
</script>