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
          <div class="col-md-8 col-sm-8 col-xs-12 pl-3"> 
            <div class="row"> 
              <div class="row">
                <div class="col- mb-3">
                  <form action="laporan.php" method="POST"> 
                    <table>
                      <tr>
                        <td>Dari :</td>
                        <td>Sampai :</td>
                      </tr>
                      <tr>
                        <td>
                          <input type="date" name="txt_start_date" class="form-control" placeholder="Date Start" style="width: 200px;float: left;">
                        </td>
                        <td>
                          <input type="date" name="txt_end_date" class="form-control" placeholder="Date End" style="width: 200px;float: left;">
                          <input type="submit" value="Cari" class="btn btn-primary" style="margin-left:10px;width: 100px;float: left;">
                          <a href="controller/master_p.php?role=EXPORT_EXCEL_LAPORAN&start_date=<?php echo $_POST['txt_start_date']?>&end_date=<?php echo $_POST['txt_end_date']?>" style="margin-left:10px;float: left;font-size: 24px;"><span class="iconify" data-icon="mdi:microsoft-excel"></span></a> 
                        </td>
                      </tr>
                    </table> 
                  </form> 
                  
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-md">
                  <table class="table" id="scheduleTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Laporan</th>  
                        <th>Nama</th>  
                        <th>TEE</th>
                        <th>Karbohidrat</th>
                        <th>Protein</th>
                        <th>Lemak</th>   
                        <th>Keluhan</th>   
                        <th>Catatan</th>   
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i=1;
                        $date=date('Y-m-d');
                        if(empty($_POST['txt_start_date'])){
                          $sql="SELECT * FROM v_laporan where id_ibu_hamil= '".$_SESSION['user_id']."' ";
                        }
                        else{
                          $sql="SELECT * FROM v_laporan  where tanggal_laporan>='".$_POST['txt_start_date']."' and tanggal_laporan<='".$_POST['txt_end_date']."' and id_ibu_hamil='".$_SESSION['user_id']."'";
                        }
                        $r=mysqli_query($conn,$sql);
                        while($rs=mysqli_fetch_array($r)){
                          ?>
                          <tr>
                            <td><?php echo $i;?></td> 
                            <td><?php echo $rs['tanggal_laporan']?></td>  
                            <td><?php echo $rs['nama_ibu_hamil']?></td> 
                            <td><?php echo $rs['tee']?></td>
                            <td><?php echo number_format($rs['karbohidrat'],2)?></td>
											      <td><?php echo number_format($rs['protein'],2)?></td>
											      <td><?php echo number_format($rs['lemak'],2)?></td>
                            <td><?php echo $rs['keluhan']?></td>
                            <td><?php echo $rs['catatan']?></td>
                          </tr>
                          <?php
                          $i++;
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
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