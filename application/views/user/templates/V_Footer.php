  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                <h4>sosial media</h4>
                <p>You can visit our social media by<br>clicking below.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://mobile.facebook.com/smkyajdepokofficiall?wtsid=rdr_00I3bHXieV3EunChx&_rdc=1&_rdr&refsrc=deprecated" target="_blank"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://x.com/paskibra_yaj?t=vc_CfhRcRLKLlIVs6c79WQ&s=08" target="_blank"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://instagram.com/smkyaj_official?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://youtube.com/@smkyajdepok2280?si=_wlsU_i7R_pV_h2L" target="_blank"><i class="bi bi-youtube"></i></a>
                    </li>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                 We came to learn and follow the rules.
                </p>
                <div class="footer-contacts">
                  <p><span>Telephone:</span> (021) 87900425</p>
                  <p><span>Email:</span> @smkyajdepok.sch.id</p>
                  <p><span>Working Hours:</span> 07.00 - 15.15 WIB</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Gallery</h4>
                <div class="flicker-img">
                <?php
                foreach($gallery as $gallery){
                ?>
                  <a><img src="<?= base_url('assets/admin/img/pages/gallery/') . $gallery->gambar ?>" alt=""></a>
                <?php
                if ($gallery->id == 6) break;
                }
                ?>
                  <!-- <a href="#"><img src="<?= base_url('assets/user/');?>img/portfolio/ykk.jpeg" alt=""></a>
                  <a href="#"><img src="<?= base_url('assets/user/');?>img/portfolio/wisuda.jpeg" alt=""></a>
                  <a href="#"><img src="<?= base_url('assets/user/');?>img/portfolio/rps.jpeg" alt=""></a>
                  <a href="#"><img src="<?= base_url('assets/user/');?>img/portfolio/duha.jpg" alt=""></a>
                  <a href="#"><img src="<?= base_url('assets/user/');?>img/portfolio/senam.jpg" alt=""></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>SMK YAJ</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <strong>Aslab RPL XV</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/user/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/user/');?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/user/');?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/user/');?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/user/');?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/user/');?>js/main.js"></script>

</body>

</html>