<?php
include ('koneksidbs.php');
 
error_reporting(0);
 

 
	$nama=$_POST['nama'];
	$kel=$_POST['kel'];
    $username = $_POST['username'];
    $email = $_POST['email'];
	$nik = $_POST['nik'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
 echo $nik;
    if ($password == $cpassword) {
        //$sql = "SELECT * FROM users WHERE email='$email'";
        //$result = mysqli_query($koneksi, $sql);
		 //"UPDATE users SET username='$username', email='$email', nik='$nik', password='$password' where nik='$nik'";
		echo $email;
        
            $sql = "UPDATE users SET nama='$nama', kel='$kel',username='$username', email='$email', nik='$nik', password='$password' where nik=$nik";
			$result = mysqli_query($koneksi, $sql);
			//$q=mysqli_fetch_array($result);
			//echo $q['nik'];
			echo "Edit User Berhasil.....";
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
			
            echo "<script>alert('Password Tidak Sesuai')</script>";
        }
         
     
        
    

 
?>
<a href="login_edituser.php">Kembali</a