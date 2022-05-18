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
    }
        
?>