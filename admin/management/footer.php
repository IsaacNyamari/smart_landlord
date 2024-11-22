  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Smart - Landlord</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Papaa Izoo</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo url_for('/admin/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/quill/quill.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?php echo url_for('/admin/assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo url_for('/admin/assets/js/main.js') ?>"></script>
  <script>
let message_count = document.getElementById("message_count");
let param = `count=count`;
let xhr = new XMLHttpRequest();
xhr.open()
xhr.onload = function(){
  console.log(this.response);
  
}
xhr.send(param)
  </script>
  </body>

  </html>