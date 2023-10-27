 <!-- ======= Testimonials Section ======= -->
 <div id="quotes" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

          <?php

          foreach($quotes as $quotes){

          ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets/admin/img/pages/quotes/') . $quotes->gambar ?>" class="testimonial-img" alt="">
                <h3><?= $quotes->nama ?></h3>
                <h4><?= $quotes->jabatan ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $quotes->quotes ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            <?php

          }

            ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->