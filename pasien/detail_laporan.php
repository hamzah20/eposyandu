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
            <div class="row">  
             <?php  
              $id_laporan = $_GET['id'];
              $sql  = "SELECT * FROM v_laporan WHERE id_laporan = '".$id_laporan."' ";
              $r    = mysqli_query($conn,$sql);
              while($rs = mysqli_fetch_array($r)){
             ?>
             <div style="width: 55rem; margin-left: 10px; margin-bottom: 10px;"> 
              <div>
                <h5>LAPORAN / <?php echo $rs['tanggal_laporan']; ?></h5> 
                <p class="card-text">
                  <table> 
                    <tr>
                      <td colspan="3"><span class="badge bg-primary mt-3 mb-2">Data Pribadi</span></td>
                    </tr>
                    <tr>
                      <td> Nama</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['nama_ibu_hamil']; ?></td>
                    </tr>
                     <tr>
                      <td> Usia</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['usia_ibu_hamil']." Tahun"; ?></td>
                    </tr>
                    <tr>
                      <td> Tinggi Badan</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['tinggi_badan']." cm"; ?></td>
                    </tr>
                     <tr>
                      <td> Berat Badan Badan</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['berat_badan']." kg"; ?></td>
                    </tr> 
                  </table> <br>
                  <table>
                    <tr>
                      <td colspan="3"><span class="badge bg-primary">Data Perhitungan</span></td>
                    </tr>
                    <tr>
                      <td> Usia Kehamilan</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['usia_kehamilan'] ." bulan"; ?></td>
                    </tr>
                     <tr>
                      <td> BEE</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['bee']; ?></td>
                    </tr>
                    <tr>
                      <td> TEE</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['tee']; ?></td>
                    </tr>
                    <tr>
                      <td> Keluhan</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['keluhan']; ?></td>
                    </tr>
                    <tr>
                      <td> Catatan</td>
                      <td class="px-3"> :</td>
                      <td> <?php echo $rs['catatan']; ?></td>
                    </tr>
                  </table>
                </p>  
              </div>
            </div>
            <?php 
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->

  <?php include('include/footer.php'); ?>

  

</body>

</html>