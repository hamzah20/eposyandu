
<div class="modal fade" id="addPerhitungan" tabindex="-1" aria-labelledby="addPerhitungan" aria-hidden="true">
  <div class="in modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleKader"><i class="align-middle me-2" data-feather="plus"></i> Perhitungan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="controller/master_p.php?role=TAMBAH_PERHITUNGAN" method="POST">
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Ibu Hamil</label>
          <select class="form-select" name="slc_hamil">
            <?php 
              $sql="SELECT * FROM ibu_hamil";
              $r=mysqli_query($conn,$sql);
              while($rs=mysqli_fetch_array($r)){
                ?>
                  <option value="<?php echo $rs['id_ibu_hamil'];?>"><?php echo $rs['id_ibu_hamil']?> / <?php echo $rs['nama_ibu_hamil']?></option>
                <?php
              }
            ?>
          </select>
        </div>
       <!--   <div class="mb-3">
          <label class="form-label">Bidan</label>
          <select class="form-select" name="slc_bidan">
            <?php 
              $sql="SELECT * FROM bidan";
              $r=mysqli_query($conn,$sql);
              while($rs=mysqli_fetch_array($r)){
                ?>
                  <option value="<?php echo $rs['id_bidan'];?>"><?php echo $rs['id_bidan']?> / <?php echo $rs['nama_bidan']?></option>
                <?php
              }
            ?>
          </select>
        </div> --> 
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label">Tinggi Badan</label>
              <input type="number" name="txt_tb" id="txt_tb" class="form-control" placeholder="Tinggi Badan" value="0">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label">Berat Badan</label>
              <input type="number" name="txt_bb"  id="txt_bb" class="form-control" placeholder="Berat Badan" value="0">
            </div>
          </div>
        </div>
        
        
       <!--  <div class="mb-3">
          <label class="form-label">Usia Kehamilan</label>
          <input type="number" name="txt_usia" id="txt_usia" class="form-control" placeholder="Usia Kehamilan" value="0">
        </div> -->
        <!-- <div class="mb-3">
          <label class="form-label">BMR</label>
          <input type="number" name="txt_bmr" id="txt_bmr" class="form-control" placeholder="Bmr" readonly="">
        </div> -->
        <div class="mb-3">
          <label class="form-label">Aktivitas</label>
          <select class="form-select" name="slc_aktivitas">
            <?php 
              $sql="SELECT * FROM aktivitas";
              $r=mysqli_query($conn,$sql);
              while($rs=mysqli_fetch_array($r)){
                ?>
                  <option value="<?php echo $rs['rec_id'];?>"><?php echo $rs['aktivitas']?></option>
                <?php
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Rumus : </label>
          <br>
          <?php 
            $sql="SELECT * FROM rumus";
            $r=mysqli_query($conn,$sql);
            while($rs=mysqli_fetch_array($r)){
              ?> 
                <input class=" form-check-input" type="radio" value="<?php echo $rs['rec_id']?>" name="r_rumus" checked>
                <span class="form-check-label">
                  <?php echo $rs['nama_rumus']?>
                </span> <br>
              <?php
            }
            ?>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
        <input type="submit" class="btn btn-primary" value="Save Changes">
      </div>
     </form>
    </div>
  </div>
</div>