<!-- ======= Contact Section ======= -->
<div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact Us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: 021-87900425<br>
                    <span>Monday-Thursday (7am - 3:15pm)<br>Friday (7am - 11am)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email:  info@smkyajdepok.sch.id<br>
                    <span>Web: www.smkyaj.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Arridho Street No. 166 <br>
                    <span>Rt. 001/004 Jatimulya, Cilodong<br> Depok City West Java 16413</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://maps.google.com/maps?q=smk yaj&t=&z=10&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="<?= base_url('contact/fungsi_tambah') ?>" method="post" role="form" >
                      <?= $this->session->flashdata('pesan'); ?>
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <!-- <div class="loading">Loading</div> -->
                    <!-- <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div> -->
                  </div>
                  <div class="text-center"><button type="submit" class="btn btn-info text-light">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->