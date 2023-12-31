<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area" style="background: url(<?= base_url('assets/user/img/portfolio/upacaraa.jpg') ?>);
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
                  <h1 class="title2">Gallery</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">All of YAJ Gallery</h2>
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

        <div class="row awesome-project-content portfolio-container">

        <?php
        foreach($gallery as $gallery){
        ?>
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url('assets/admin/img/pages/gallery/') . $gallery->gambar ?>" width="400" height="150" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="<?= base_url('assets/admin/img/pages/gallery/') . $gallery->gambar ?>">
                      <h4><?= $gallery->subjek ?></h4>
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->
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