<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright. All Rights Reserved - 2024
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
      Made with <i class="fa fa-heart"></i> by <a href="https://anakit41.my.id/">AnakIT41 | EngMars Corp.</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/depan/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url() ?>assets/depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/depan/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/depan/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
  import {
    Carousel,
    initMDB
  } from "mdb-ui-kit";

  initMDB({
    Carousel
  });
</script>

<script>
  window.addEventListener("load", () => {

    const loader = document.querySelector(".loader");

    loader.classList.add("loader--hidden");

    loader.addEventListener("transitioned", () => {
      document.body.removeChild(document.querySelector(".loader"));
    });
  });
</script>
<script type="text/javascript">
  $(window).load(function() {
    $("#loader").hide();
  });

  $("#nama_lengkap").keyup(function() {
    $(this).val($(this).val().toUpperCase());
  });
</script>


</body>

</html>