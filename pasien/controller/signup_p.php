<?php
	include('../../conn.php');

	$role=$_GET['role'];
    switch ($role) {
        //---------------------- case master jadwal ---------------------------------------------------
        case'TAMBAH_PASIEN': 
            $nama       = $_POST['txt_nama'];    
            $tanggal    = $_POST['txt_tanggal']; 
            $telp       = $_POST['txt_telp'];   
            $alamat     = $_POST['txt_alamat'];  
            $username   = $_POST['txt_username']; 
            $password   = md5($_POST['txt_password']); 

            // Ambil tahun dan bulan sekarang
            $year  = date("y"); 
            $month = date("m");  

            //------------- mencari apakah ada username yang sama pada table user
            $countUsername = "select count(*) as TOTAL from user where username='".$username."'";
            $queryCountUsername = mysqli_query($conn,$countUsername);
            $fetchCountUsername = mysqli_fetch_array($queryCountUsername); 
            if ($fetchCountUsername["TOTAL"] > 0)
            {
                $_SESSION["message"]="Username Sudah Pernah Dipakai";
                header  ("location:../signup.php");
                exit();
            } 
            
            //------------- Mencari nomer terakhir, untuk memberikan id bidan
            $LastNum      = "select count(*) as TOTAL from ibu_hamil where substring(id_ibu_hamil,3,2)='".$year."'";
            $queryLastNum = mysqli_query($conn,$LastNum);
            $fetchLastNum = mysqli_fetch_array($queryLastNum);
            if ($fetchLastNum["TOTAL"] != 0)
            {
                $proLastNum = "select substring(id_ibu_hamil,7,4) as LAST_NO from ibu_hamil WHERE substring(id_ibu_hamil,3,2)='".$year."' order by substring(id_ibu_hamil,7,4) desc";
                $queryProLastNum = mysqli_query($conn,$proLastNum);
                $fetchProLastNum = mysqli_fetch_array($queryProLastNum);
                $run_no = str_pad(strval(intval($fetchProLastNum["LAST_NO"]) + 1), 4, "0", STR_PAD_LEFT);
            }else{
                $run_no = str_pad(strval(intval(1)), 4, "0", STR_PAD_LEFT);
            }
            echo $doc_no="P-".$year.$month.$run_no;

            //------------- Insert data kader kedalam table kader
            $insPasien      = "INSERT INTO ibu_hamil (`id_ibu_hamil`, `nama_ibu_hamil`,  `tanggal_lahir_ibu_hamil`, `alamat_ibu_hamil`, `no_telp_ibu_hamil`) values('".$doc_no."','".$nama."','".$tanggal."','".$alamat."','".$telp."')";
            $queryInsPasien = mysqli_query($conn,$insPasien); 

            //------------- Insert data kader kedalam table user
            $insUser       = "INSERT INTO user (id_user,username,password,user_group,active) values('".$doc_no."','".$username."','".$password."','Pasien','0')";
            $queryInsUser = mysqli_query($conn,$insUser);
            header  ("location:../login.php");

        break;
    }
        
?>