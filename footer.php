<footer id="footer" class="section-bg">
	<div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheTestingPro<sup>TM</sup></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End  Footer -->
     <input type="hidden" value="<?php echo $activePage ?>" id="activePage">      
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  

<!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
   /*  $(document).ready(function() {
      
      console.log("Acive Page "+ activePage);
    }); */
    $(document).ready(function(){
      $('.main-nav .m1').each(function(){ 
          var label = $(this).attr("label");
          var activePage = $("#activePage").val();
          console.log(label);
          if(label == activePage) {
            $(this).addClass("active");
          }
      });
    });
  </script>
</body>

</html>