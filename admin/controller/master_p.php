<?php
	include('../../conn.php');

	$role=$_GET['role'];
    switch ($role) {
        //---------------------- case master jadwal ---------------------------------------------------
        case'TAMBAH_JADWAL':
            $tanggal=date("Y-m-d",strtotime($_POST['txt_tanggal']));
            $jam=date("H:i:s",strtotime($_POST['txt_jam']));
            $year=date("Y",strtotime($_POST['txt_tanggal']));
            $tempat=$_POST['txt_tempat'];

            //------------- mencari apakah ada jadwal di jam yang sama
            $sql="select count(*) as TOTAL from jadwal where tanggal_jadwal='".$tanggal."' and waktu_jadwal='".$jam."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            if ($rs["TOTAL"]>0)
            {
                $_SESSION["message"]="Jadwal Sudah Terisi";
                header  ("location:../jadwal.php");
                exit;
            }
            
            //------------- mencari nomor terkhir untuk penambahan jadwal
            $sql="select count(*) as TOTAL from jadwal where substring(kode_jadwal,2,4)='".$year."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            if ($rs["TOTAL"]!=0)
            {
                $sql1 = "select substring(kode_jadwal,6,5) as LAST_NO from jadwal WHERE substring(kode_jadwal,2,4)='".$year."' order by substring(kode_jadwal,6,5) desc";
                $result= mysqli_query($conn,$sql1);
                $rs = mysqli_fetch_array($result);
                $run_no = str_pad(strval(intval($rs["LAST_NO"]) + 1), 5, "0", STR_PAD_LEFT);
            }else{
                $run_no = str_pad(strval(intval(1)), 5, "0", STR_PAD_LEFT);
            }
            $doc_no="A".$year.$run_no;

            //------------- menambahkan jadwal ke dalam database
            $sql="INSERT INTO jadwal (kode_jadwal,tempat_jadwal,tanggal_jadwal,waktu_jadwal) values('".$doc_no."','".$tempat."','".$tanggal."','".$jam."')";
            $r=mysqli_query($conn,$sql);
            header  ("location:../jadwal.php");

        break;
        case"DELETE_JADWAL":
            $id=$_POST['idx'];
           $sql="DELETE FROM jadwal where rec_id='".$id."'";
          $r=mysqli_query($conn,$sql);
        break;
        case"EDIT_JADWAL":
            $id=$_POST['id'];
            $sql="SELECT * FROM jadwal where rec_id='".$id."'";
            $r= mysqli_query($conn,$sql);
            $rs = mysqli_fetch_array($r);
            ?>
                <div class="mb-3">
                  <label class="form-label">Kode Jadwal</label>
                  <input type="text" name="txt_kode" class="form-control" placeholder="kode" value="<?php echo $rs['kode_jadwal'];?>" readonly>
                  <input type="hidden" name="txt_rec_id" class="form-control" placeholder="kode" value="<?php echo $id;?>" readonly>

                </div>

                <div class="mb-3">
                  <label class="form-label">Tanggal</label>
                  <input type="date" name="txt_tanggal" class="form-control" placeholder="Tanggal" value="<?php echo $rs['tanggal_jadwal'];?>">
                </div>
             
                <div class="mb-3">
                  <label class="form-label">Jam</label>
                  <input type="time" name="txt_jam" class="form-control" placeholder="Jam" value="<?php echo $rs['waktu_jadwal'];?>">
                </div>
            
                <div class="mb-3">
                  <label class="form-label">Tempat</label>
                  <input type="text" name="txt_tempat" class="form-control" placeholder="Tempat" value="<?php echo $rs['tempat_jadwal'];?>">
                </div>
            <?php
        break;
        case"PROSES_EDIT_JADWAL":
            $rec_id=$_POST['txt_rec_id'];

            $tanggal=date("Y-m-d",strtotime($_POST['txt_tanggal']));
            $jam=date("H:i:s",strtotime($_POST['txt_jam']));
            //$year=date("Y",strtotime($_POST['txt_tanggal']));
            $tempat=$_POST['txt_tempat'];

            $sql="
                UPDATE jadwal SET
                tanggal_jadwal='".$tanggal."',
                waktu_jadwal='".$jam."',
                tempat_jadwal='".$tempat."'

                where rec_id='".$rec_id."'
            ";
            $r=mysqli_query($conn,$sql);
            header  ("location:../jadwal.php");
        break;
        
    }
?>

       