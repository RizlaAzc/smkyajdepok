  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

        <?php
        foreach($carousel as $carousel){
        ?>
          <div class="carousel-item active" style="background-image: <?= base_url("assets/admin/img/pages/carousel/") . $carousel->gambar ?>">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><?= $carousel->subjek ?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $carousel->deskripsi ?></p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">GO</a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>

          <!-- <div class="carousel-item" style="background-image: url(assets/user/img/background/ykk.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">VISI</h2>
                <p class="animate__animated animate__fadeInUp">Making SMK YAJ a vocational high school that produces skilled, superior, independent and religious students</p>
                <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">GO</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/user/img/background/yaj.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">MOTTO</h2>
                <p class="animate__animated animate__fadeInUp">We come to study and follow the rules</p>
                <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">GO</a>
              </div>
            </div>
          </div> -->

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  </main><!-- End #main -->

