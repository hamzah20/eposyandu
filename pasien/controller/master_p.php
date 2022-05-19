<?php
	include('../../conn.php');

	$role=$_GET['role'];
    switch ($role) {
        //---------------------- case master jadwal ---------------------------------------------------
        case"PROSES_EDIT_PASIEN":
            $id         = $_POST['txt_id'];
            $nama       = $_POST['txt_nama'];   
            $tempat     = $_POST['txt_tempat']; 
            $tanggal    = $_POST['txt_tanggal']; 
            $telp       = $_POST['txt_telp']; 
            $pekerjaan  = $_POST['txt_pekerjaan']; 
            $alamat     = $_POST['txt_alamat']; 
            $darah      = $_POST['txt_darah']; 
            $kehamilan  = $_POST['txt_kehamilan']; 
            $suami      = $_POST['txt_suami'];  

            $updatePasien = "UPDATE `ibu_hamil` SET `nama_ibu_hamil`='".$nama."',`tempat_lahir_ibu_hamil`='".$tempat."',`tanggal_lahir_ibu_hamil`='".$tanggal."',`gol_darah_ibu_hamil`='".$darah."',`alamat_ibu_hamil`='".$alamat."',`pekerjaan_ibu_hamil`='".$pekerjaan."',`kehamilan`='".$kehamilan."',`no_telp_ibu_hamil`='".$telp."',`nama_suami`='".$suami."' WHERE `id_ibu_hamil`='".$id."'";
            $r_updatePasien = mysqli_query($conn,$updatePasien); 

            header  ("location:../profile.php");
           
        break;

        case"EXPORT_EXCEL_LAPORAN":
        header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data Laporan ".$_GET['start_date']." - ".$_GET['end_date'].".xls");
        ?>
        <table style="border:1px solid #ddd;">
            <thead >
                <tr style="border:1px solid #ddd;">
                    <th>No</th>
                    <th>Id Ibu Hamil</th>
                    <th>Nama</th>
                    <th>BB</th> 
                    <th>TB</th> 
                    <th>USIA</th> 
                    <th>BEE</th> 
                    <th>TEE</th> 
                    <th>Tanggal Laporan</th> 
                    <th>Bidan</th> 
                    <th>Catatan</th> 
                    <th>Keluhan</th> 
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=1;
                   // $date=date('Y-m-d');
                    if(empty($_GET['start_date'])){
                        $sql="SELECT * FROM v_laporan  ";
                    }
                    else{
                        $sql="SELECT * FROM v_laporan  where tanggal_laporan>='".$_GET['start_date']."' and tanggal_laporan<='".$_GET['end_date']."'";
                    }
                    $r=mysqli_query($conn,$sql);
                    while($rs=mysqli_fetch_array($r)){
                        ?>
                        <tr style="border:1px solid #ddd;">
                            <td><?php echo $i;?></td>
                                
                            <td><?php echo $rs['id_ibu_hamil']?></td>
                        
                            <td><?php echo $rs['nama_ibu_hamil']?></td>
                        
                            <td><?php echo $rs['berat_badan']?></td>
                        
                            <td><?php echo $rs['tinggi_badan']?></td>
                        
                            <td><?php echo $rs['usia_ibu_hamil']?></td>
                        
                            <td><?php echo $rs['bee']?></td>
                        
                            <td><?php echo $rs['tee']?></td>
                            <td><?php echo $rs['tanggal_laporan']?></td>
                            <td><?php echo $rs['nama_bidan']?></td> 
                            <td><?php echo $rs['catatan']?></td>    
                            <td><?php echo $rs['keluhan']?></td>    
                        </tr>
                        <?php
                        $i++;
                    }
                ?>
            </tbody>
        </table>
        <?php
        break;
    }
        
?>