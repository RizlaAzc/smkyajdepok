<!-- ======= About Section ======= -->
<div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About SMK YAJ</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <?php
        foreach($about as $about){
        ?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?= base_url('assets/admin/img/pages/about/') . $about->gambar ?>" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
      
                <div class="footer-contacts">
                  <p><span><?= $about->subjek ?></span></p>
                  
                </div>
                </a>
                <p>
                <?= $about->deskripsi ?>
                </p>
                <?php
          }
          ?>

                <p> jurusan yang ada di SMK YAJ antara lain :</p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> REKAYASA PERANGKAT LUNAK
                  </li>
                  <li>
                    <i class="bi bi-check"></i> TEKNOLOGI KOMPUTER JARINGAN
                  <li>
                    <i class="bi bi-check"></i> PERKANTORAN
                  </li>
                  <li>
                    <i class="bi bi-check"></i> AKUNTANSI
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->