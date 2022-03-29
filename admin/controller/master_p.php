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

        //--------------------------------------------------------- INFORMASI
        case"TAMBAH_INFORMASI":
            $judul=$_POST['txt_judul'];
            $tgl=$_POST['txt_tgl'];
            $deskripsi=$_POST['txt_deskripsi'];

            $tanggal=date("Y-m-d",strtotime($tgl));
            $year=date("Y",strtotime($tgl));

            
            //------------- mencari nomor terkhir untuk penambahan infromasi
             $sql="select count(*) as TOTAL from informasi_gizi where substring(kode_informasi,2,4)='".$year."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            if ($rs["TOTAL"]!=0)
            {
                $sql1 = "select substring(kode_informasi,6,5) as LAST_NO from informasi_gizi WHERE substring(kode_informasi,2,4)='".$year."' order by substring(kode_informasi,6,5) desc";
                $result= mysqli_query($conn,$sql1);
                $rs = mysqli_fetch_array($result);
                $run_no = str_pad(strval(intval($rs["LAST_NO"]) + 1), 5, "0", STR_PAD_LEFT);
            }else{
                $run_no = str_pad(strval(intval(1)), 5, "0", STR_PAD_LEFT);
            }
             $doc_no="I".$year.$run_no;


            
            $ext = end(explode('.', $_FILES["txt_image"]["name"])); // upload file ext
            
            $name = md5(rand()) . '.' . $ext; // rename nama file gambar
            $path = "../../boostrap/img/informasi/". $name; // image upload path
            $file_name="boostrap/img/informasi/". $name;

            $upload=move_uploaded_file($_FILES["txt_image"]["tmp_name"], $path);
            if($upload){
                 $sql="INSERT INTO informasi_gizi (kode_informasi,judul_informasi,tanggal_informasi,deskripsi_informasi,gambar_informasi)VALUES('".$doc_no."','".$judul."','".$tanggal."','".$deskripsi."','".$file_name."')";
                $r=mysqli_query($conn,$sql);    
                header('location:../informasi.php');
            }
        break;
        case"DETAIL_INFORMASI":
            $id=$_POST['id'];
            //echo$id;
            $sql="SELECT * FROM informasi_gizi where rec_id='".$id."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            ?>
                <div class="mb-3">
                    <label class="form-label">Kode Informasi</label>
                    <input type="text" name="txt_judul" class="form-control" placeholder="Judul" readonly="" value="<?php echo $rs['kode_informasi']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul Informasi</label>
                    <input type="text" name="txt_judul" class="form-control" placeholder="Judul" readonly="" value="<?php echo $rs['judul_informasi']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Informasi</label>
                    <input type="date" name="txt_tgl" class="form-control" placeholder="Tanggal" readonly="" value="<?php echo $rs['tanggal_informasi']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name='txt_deskripsi' disabled=""> <?php echo $rs['deskripsi_informasi']?></textarea>
                </div>

                <div class="mb-3">
                <label>Gambar</label>
                    <img src="../<?php echo $rs['gambar_informasi']?>" class="img-fluid">
                </div>
            <?php
        break;
        case"DELETE_INFORMASI":
            $id=$_POST['idx'];
            $sql_image="SELECT gambar_informasi FROM informasi_gizi where rec_id='".$id."'";
            $r_image=mysqli_query($conn,$sql_image);
            while($rs_image=mysqli_fetch_array($r_image)){
                $path= "../../".$rs_image['gambar_informasi'];
                //echo $path;
                if(unlink($path)){
                    $sql="DELETE FROM informasi_gizi WHERE rec_id='".$id."'";
                    mysqli_query($conn,$sql);
                }
            }
        break;

        //---------------------------------------------------------------- Makanan
        case"TAMBAH_MAKANAN":
            $judul=$_POST['txt_judul'];
            $tgl=$_POST['txt_tgl'];
            $deskripsi=$_POST['txt_deskripsi'];

            $tanggal=date("Y-m-d",strtotime($tgl));
            $year=date("Y",strtotime($tgl));

            
            //------------- mencari nomor terkhir untuk penambahan makanan
             $sql="select count(*) as TOTAL from menu_makanan where substring(kode_makanan,2,4)='".$year."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            if ($rs["TOTAL"]!=0)
            {
                $sql1 = "select substring(kode_makanan,6,5) as LAST_NO from menu_makanan WHERE substring(kode_makanan,2,4)='".$year."' order by substring(kode_makanan,6,5) desc";
                $result= mysqli_query($conn,$sql1);
                $rs = mysqli_fetch_array($result);
                $run_no = str_pad(strval(intval($rs["LAST_NO"]) + 1), 5, "0", STR_PAD_LEFT);
            }else{
                $run_no = str_pad(strval(intval(1)), 5, "0", STR_PAD_LEFT);
            }
             $doc_no="M".$year.$run_no;


            
            $ext = end(explode('.', $_FILES["txt_image"]["name"])); // upload file ext
            
            $name = md5(rand()) . '.' . $ext; // rename nama file gambar
            $path = "../../boostrap/img/makanan/". $name; // image upload path
            $file_name="boostrap/img/makanan/". $name;

            $upload=move_uploaded_file($_FILES["txt_image"]["tmp_name"], $path);
            if($upload){
                 $sql="INSERT INTO menu_makanan (kode_makanan,nama_makanan,tanggal_makanan,isi_makanan,gambar_makanan)VALUES('".$doc_no."','".$judul."','".$tanggal."','".$deskripsi."','".$file_name."')";
                $r=mysqli_query($conn,$sql);    
                header('location:../makanan.php');
            }
        break;
        case"DETAIL_MAKANAN":
            $id=$_POST['id'];
            //echo$id;
            $sql="SELECT * FROM menu_makanan where rec_id='".$id."'";
            $r=mysqli_query($conn,$sql);
            $rs=mysqli_fetch_array($r);
            ?>
                <div class="mb-3">
                    <label class="form-label">Kode Makanan</label>
                    <input type="text" name="txt_judul" class="form-control" placeholder="Judul" readonly="" value="<?php echo $rs['kode_makanan']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Makanan</label>
                    <input type="text" name="txt_judul" class="form-control" placeholder="Judul" readonly="" value="<?php echo $rs['nama_makanan']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Makanan</label>
                    <input type="date" name="txt_tgl" class="form-control" placeholder="Tanggal" readonly="" value="<?php echo $rs['tanggal_makanan']?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Makanan</label>
                    <textarea class="form-control" name='txt_deskripsi' disabled=""> <?php echo $rs['isi_makanan']?></textarea>
                </div>

                <div class="mb-3">
                <label>Gambar</label>
                    <img src="../<?php echo $rs['gambar_makanan']?>" class="img-fluid">
                </div>
            <?php
        break;
        case"DELETE_MAKANAN":
            $id=$_POST['idx'];
            $sql_image="SELECT gambar_makanan FROM menu_makanan where rec_id='".$id."'";
            $r_image=mysqli_query($conn,$sql_image);
            while($rs_image=mysqli_fetch_array($r_image)){
                $path= "../../".$rs_image['gambar_makanan'];
                //echo $path;
                if(unlink($path)){
                    $sql="DELETE FROM menu_makanan WHERE rec_id='".$id."'";
                    mysqli_query($conn,$sql);
                }
            }
        break;

        
    }
?>

       