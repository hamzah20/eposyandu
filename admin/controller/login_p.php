<?php
	include('../../conn.php');

	$role=$_GET['role'];
    switch ($role) {
        case'LOGIN_ADMIN':
          
             $username=$_POST['username'];
             $password=md5($_POST['password']);
             $group=$_POST['slc_group'];

            $sqlemail="SELECT COUNT(*) AS TOTAL_USER FROM user where (id_user='".$username."' or username='".$username."') and password='".$password."' and user.user_group='".$group."' ";

            $r_email=mysqli_query($conn,$sqlemail);
            $rs_email=mysqli_fetch_array($r_email);

             if($rs_email['TOTAL_USER']>0){
                $sql="SELECT * FROM v_s_user where (id_user='".$username."' or username='".$username."') and password='".$password."' and v_s_user.group='".$group."'";

                $r=mysqli_query($conn,$sql);
                $rs=mysqli_fetch_array($r);
                    $_SESSION['member_id']=$rs['rec_id'];
                    $_SESSION['user_id']=$rs['id_user'];
                    $_SESSION['username']=$rs['username'];
                    $_SESSION['nama_user']=$rs['nama_kader'];
                    $_SESSION['no_telp']=$rs['no_telp_kader'];
                    $_SESSION['group']=$rs['user_group'];
                    $_SESSION['login']=1;
                header('location:../index.php');
             }
             else{
                header('location:../login.php');
             }
        break;

        case'LOGOUT':
            $_SESSION['member_id']="";
            $_SESSION['user_id']="";
            $_SESSION['username']="";
            $_SESSION['nama_user']="";
            $_SESSION['no_telp']="";
            $_SESSION['group']="";
            $_SESSION['login']=0;
            header('location:../index.php');
        break;
    }
?>

       