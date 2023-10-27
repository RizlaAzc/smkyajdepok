<!-- ======= Team Section ======= -->
<div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Team</h2>
            </div>
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
          if ($team->id == 4) break;
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
  margin-left: 615px;
  padding: 10px 20px;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 30px;" href="<?= base_url('team');?>">See More</a>
    </div><!-- End Team Section -->