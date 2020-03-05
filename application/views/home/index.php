  <?php if( $this->session->userdata('email') ) { ?>
    <div class="row teal">
      <div class="teal white-text">
        <div class="col m1 s3">
          <h5>Note :</h5>
        </div>
        <div class="col m11 s9">
          <marquee scrollamount="12">
            <h5 class="center-align light">Selamat datang <?= $user['nama']; ?> silahkan pilih halaman mana yang ingin anda tuju</h5>
          </marquee>
        </div>
      </div>
    </div>
  <?php } ?>

    <div class="container">
      <div class="row">
        <div class="col m12">
          <h5>Addons openBVE : </h5>
        </div>
      </div>

      <div class="row">
      <?php foreach( $bve as $B ) : ?>
        <div class="col m12 s12">
          <div class="card-panel">
            <div class="row">
              <div class="col m2 center-align">
                <img src="<?= base_url(); ?>img/gambar/<?= $B["gambar"]; ?>" width="100%" alt="">
              </div>
              <div class="col m10">
                <h6><?= $B["jenis"]; ?></h6>
                <p><?= $B["deskripsi"]; ?></p>
              </div>
            </div>
              <div class="row">
                <div class="col m2 offset-m10">
                  <a href="<?= base_url(); ?>Bve">
                    <input type="submit" value="Detail" class="btn" name="btn">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
       </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col m12 center-align">
          <h4>Tentang Website ini</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4 center-align">
          <div class="card">
            <div class="card-content">
               <hr>
               <i class="large material-icons">code</i>
               <h5>Dibuat menggunakan Code igniter dan materialize</h5>
               <hr>
            </div>
          </div>
        </div>

        <div class="col s12 m4 center-align">
            <div class="card">
              <div class="card-content">
                  <hr>
                  <i class="large material-icons">timelapse</i>
                  <h5>Dibuat dengan waktu 1 Abad seluruh tahap kode nya</h5>
                  <hr>
              </div>
            </div>
          </div>

          <div class="col s12 m4 center-align">
              <div class="card">
                <div class="card-content">
                   <hr>
                    <i class="large material-icons">work</i>
                    <h5>Di kerjakan dengan niat terdalam sedalam perasaan ini</h5>
                    <hr>
                </div>
              </div>
            </div>
      </div>
    </div>
    <!-- isi -->