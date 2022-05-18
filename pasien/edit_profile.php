<?php include('include/header.php'); ?>
<body>

  <!-- ======= Header ======= -->
  <?php include('include/header_top.php'); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">EPosyandu</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Profil</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <!-- ======= Header ======= -->
          <?php include('include/sidebar.php'); ?>
          <!-- End Header -->
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row pr-5"> 
              <?php   
                $id       = $_SESSION['user_id'];
                $sql_pro  = "SELECT * FROM `ibu_hamil` WHERE `id_ibu_hamil` = '".$id."'";
                $r_pro    = mysqli_query($conn,$sql_pro);
                while($rs_pro = mysqli_fetch_array($r_pro)){
              ?> 
              <form action="controller/master_p.php?role=PROSES_EDIT_PASIEN" method="POST">
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_id" value="<?php echo $rs_pro['id_ibu_hamil']; ?>" class="form-control form-control-sm" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_nama" value="<?php echo $rs_pro['nama_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_tempat" value="<?php echo $rs_pro['tempat_lahir_ibu_hamil'] == null ? '' : $rs_pro['tempat_lahir_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" name="txt_tanggal" value="<?php echo $rs_pro['tanggal_lahir_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">No Telp</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_telp" value="<?php echo $rs_pro['no_telp_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_alamat" value="<?php echo $rs_pro['alamat_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Gol Darah</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_darah" value="<?php echo $rs_pro['gol_darah_ibu_hamil'] == null ? '' : $rs_pro['gol_darah_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_pekerjaan" value="<?php echo $rs_pro['pekerjaan_ibu_hamil'] == null ? '' : $rs_pro['pekerjaan_ibu_hamil']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Kehamilan</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_kehamilan" value="<?php echo $rs_pro['kehamilan'] == null ? '' : $rs_pro['kehamilan']; ?>" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Suami</label>
                  <div class="col-sm-10">
                    <input type="text" name="txt_suami" value="<?php echo $rs_pro['nama_suami'] == null ? '' : $rs_pro['nama_suami']; ?>" class="form-control form-control-sm">
                  </div>
                </div> 
                <div class="mt-3">
                  <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
              </form>
              <?php } ?>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <!-- End Blog Page -->

  </main><!-- End #main -->

  <?php include('include/footer.php'); ?>

  

</body>

</html>