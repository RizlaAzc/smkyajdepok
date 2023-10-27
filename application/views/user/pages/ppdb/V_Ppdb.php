<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area" style="background: url(<?= base_url('assets/user/img/portfolio/rpss.jpeg') ?>);
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
                  <h1 class="title2">PPDB</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">NEW STUDENT REGISTRATION</h2>
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
        <div class="row">
        <?= $this->session->flashdata('pesan'); ?>
          
          <!-- Start  contact -->
          <div class="col-md-6">
              <div class="form contact-form">
              <h4 class="text-muted my-3">Data Pendaftaran</h4>
              <?= form_open_multipart('ppdb/ppdb'); ?>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Jalur Pendaftaran</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="jalurpendaftaran" class="form-control" id="jalurpendaftaran"  required>
                        <option value="" disabled selected> </option>
                        <option value="Online">Online</option>
                        </select>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Pilihan I</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="pilihan1" class="form-control" id="jalurpendaftaran"  required>
                        <option value="" disabled selected> </option>
                        <?php
                        foreach($study as $study1){
                        ?>
                        <option value="<?= $study1->jurusan ?>"><?= $study1->jurusan ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Pilihan II</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="pilihan2" class="form-control" id="jalurpendaftaran"  required>
                        <option value="" disabled selected> </option>
                        <?php
                        foreach($study as $study2){
                        ?>
                        <option value="<?= $study2->jurusan ?>"><?= $study2->jurusan ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Asal Sekolah</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="asalsekolah" id="asalsekolah" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>NISN</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder=" " required>
                    </div>
                    </div>
                  </div>
</div>
</div>



<!-- <div class="row"> -->
            <div class="col-md-6">
              <div class="form contact-form">
              <h4 class="text-muted my-3">Data Calon Peserta Didik Baru</h4>

              <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Nama Lengkap</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Tempat Lahir</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Tanggal Lahir</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Jenis Kelamin</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="jeniskelamin" class="form-control" id="jeniskelamin"  required>
                        <option value="" disabled selected> </option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Agama</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="agama" class="form-control" id="agama"  required>
                        <option value="" disabled selected> </option>
                        <option value="Islam">Islam</option>
                        <!-- <option value="2">Kristen</option>
                        <option value="3">Katholik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Budha</option>
                        <option value="6">Konghucu</option> -->
                        </select>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Status Anak</p>
                    </div>
                    <div class="col-sm-9">
                        <select name="statusanak" class="form-control" id="statusanak"  required>
                        <option value="" disabled selected> </option>
                        <option value="Anak Kandung">Anak Kandung</option>
                        <option value="Anak Angkat">Anak Angkat</option>
                        </select>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Anak Ke</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="anakke" id="anakke" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Alamat</p>
                    </div>
                    <div class="col-sm-9">
                    <textarea class="form-control" name="alamat" rows="4" placeholder=" " required></textarea>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Telephone</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>TK Asal</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="tkasal" id="tkasal" placeholder=" " required>
                    </div>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Email</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Photo</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="file" class="form-control" name="photo" id="file" required>
                        <div class="block-error" style="color:#333;">Tipe file harus JPG dan ukuran maksimal photo 1 MB</div>
                    </div>
                    </div>
                  </div>
</div></div>

                  
       <!-- <div class="row"> -->
            <div class="col-md-6">
              <div class="form contact-form">
              <h4 class="text-muted my-3">Data Orang Tua / Wali</h4>

              <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Nama Ayah</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="namaayah" id="namaayah" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Nama Ibu</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Alamat Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                    <textarea class="form-control" name="alamatortu" rows="4" placeholder=" " required></textarea>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Telephone Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="telephoneortu" id="telephoneortu" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Pekerjaan Ayah</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="pekerjaanayah" id="pekerjaanayah" placeholder=" " required>
                    </div>
                    </div>
                  </div>
</div>
</div>
<div class="col-md-6" style="margin-top: 60px;">
    <div class="form contact-form">

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Pekerjaan Ibu</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="pekerjaanibu" id="pekerjaanibu" placeholder=" " required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Nama wali</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="namawali" id="namawali" placeholder=" ">
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Alamat Wali</p>
                    </div>
                    <div class="col-sm-9">
                    <textarea class="form-control" name="alamatwali" rows="4" placeholder=" "></textarea>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-3 mt-2">
                        <p>Telephone Wali</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="telephonewali" id="telephonewali" placeholder=" ">
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 mt-2">
                        <p>Pekerjaan Wali</p>
                        </div>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="pekerjaanwali" id="pekerjaanwali" placeholder=" ">
                        </div>
                    </div>
                  </div>
</div></div>

              


                    <div class="text-center"><br><button class="btn btn-info text-light" type="submit">Kirim Form Pendaftaran</button></div>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->