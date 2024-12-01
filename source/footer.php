</div>
</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright-wrap d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          <h3>TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG</h3>
          <p>
            Địa chỉ: 73 Nguyễn Huệ Phường 2 TP. Vĩnh Long<br />
            Tel: (+84) 02703822141 - Fax: (+84) 02703821003<br />
            Sinh viên thực hiện: Trần Thị Ngọc Huyền<br />
          </p>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="https://hotrolaptrinh.github.io/js/tech/main.js"></script>

<script>
    $('#menuHeader li a[data]').each(function (){
      console.log($(this).attr('data'));
      if ($(this).attr('data').length > 0 && $(this).attr('data').includes('<?php echo basename($_SERVER["SCRIPT_FILENAME"], '.php');?>')) {
        $(this).parent().addClass('active');
      }
      else{
        $(this).parent().removeClass('active');
      }
    });
    $(document).ready(function() {
        $('.modal select').select2();
        $('select.form-control').select2();
    });

</script>

</body>

</html>