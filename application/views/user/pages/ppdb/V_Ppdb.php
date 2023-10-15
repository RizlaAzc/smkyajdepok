<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
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
    
    <div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('karyawan/store') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Lengkapi formulir Berikut</h4>
                </div>

                <div class="card-body border-top py-0 my-3  ">
                    <h4 class="text-muted my-4">Data Pendaftaran</h4> 
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label>Jalur Pendaftaran : </label>
                                <select name="Jalur_pendaftaran" id="Jalur_pendaftaran" class="form-control">
                                    <option value="" disabled selected>-- Choose --</option>
                                    <option value="1">Online</option>
                                </select>
                            </div>
                        </div>
                      

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="divisi">Pilihan I : </label>
                                <select name="Jalur_pendaftaran" id="Jalur_pendaftaran" class="form-control">
                                    <option value="" disabled selected>-- Choose --</option>
                                    <option value="1">Teknik Jaringan Komputer dan Telekomunikasi</option>
                                    <option value="2">Pengembangan Perangkat Lunak dan Gim</option>
                                    <option value="3">Akuntansi Keuangan Lembaga</option>
                                    <option value="4">Manajemen Perkantoran Lembaga Binis</option>
                                </select>
                            </div>
                        </div>
                    
                      
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="divisi">Pilihan II : </label>
                                <select name="Jalur_pendaftaran" id="Jalur_pendaftaran" class="form-control">
                                    <option value="" disabled selected>-- Choose --</option>
                                    <option value="1">Teknik Jaringan Komputer dan Telekomunikasi</option>
                                    <option value="2">Pengembangan Perangkat Lunak dan Gim</option>
                                    <option value="3">Akuntansi Keuangan Lembaga</option>
                                    <option value="4">Manajemen Perkantoran Lembaga Binis</option>
                                </select>
                            </div>
                        </div>
                                   
                     </div>
                     <br>
                    
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="sekolahasal">Sekolah Asal : </label>
                                <input type="text" name="Sekolah_Asal" id="sekolahasal" class="form-control" placeholder="Masukan Asal Sekolah Siswa" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="nisn">NISN : </label>
                                <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukan NISN Siswa" required="reuqired" />
                            </div>
                        </div>
                    </div> 

                </div>
            


               
                <!-- <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div> -->
            </form>
        </div>
    </div>
</div>
<br>