<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area" style="background: url(<?= base_url('assets/user/img/portfolio/wisudaa.jpeg') ?>);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  padding: 120px 0 60px;">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Team</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">All of YAJ Team</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    
  <main id="main">

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <!-- <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Gallery</h2>
            </div>
          </div>
        </div> -->
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->
          </div>
        </div>

        <div class="row">
          <?php
          foreach($team as $team){
          ?>
          <div class="col-md-3 col-sm-3 col-xs-12 mb-4">
            <div class="single-team-member">
              <div class="team-img">
                <a>
                  <img src="<?= base_url('assets/admin/img/pages/team/') . $team->gambar ?>" alt="">
                </a>
              </div>
              <div class="team-content text-center">
                <h4><?= $team->nama ?></h4>
                <p><?= $team->jabatan ?></p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>

      <a class="" style="background: #3EC1D5 none repeat scroll 0 0;
  border: 2px solid #fff;
  color: #fff;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  margin-left: 600px;
  padding: 10px 20px;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 30px;" href="<?= base_url('') ?>">Go Back</a>

</div><!-- End Blog Page -->

</main><!-- End #main -->