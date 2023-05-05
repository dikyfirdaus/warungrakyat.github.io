<?php
include ('koneksidbs.php');
 
error_reporting(0);
 

 $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tlp = $_POST['tlp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
	 $rt = $_POST['rt'];
	$rw = $_POST['rw'];
    $kel = $_POST['kel'];
    $kec = $_POST['kec']; 
	$kab = $_POST['kab'];
	$prov = $_POST['prov'];
   echo $nik;
 
    
        $sql = "SELECT * FROM konsumen WHERE nik='$nik'";
        //$result = mysqli_query($koneksi, $sql);
		$result = mysqli_query($koneksi, $sql);
		echo $email;
        if ($result->num_rows > 0) {
            $sql = "UPDATE konsumen SET nama_k='$nama',nik='$nik', no_tlp='$tlp', email='$email', alamat='$alamat',rt='$rt',rw='$rw',kel='$kel',kec='$kec',kab='$kab',prov='$prov' where nik='$nik'";
            $result = mysqli_query($koneksi, $sql);
			echo "Edit Berhasil.....";
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";      
 //$sql = "UPDATE users SET nama_k='$nama',nik='$nik', no_tlp='$tlp', email='$email', alamat='$alamat',rt='$rt',rw='$rw',kel='$kel',kec='$kec',kab='$kab',prov='$prov' where nik='$nik'";
            }else {
       echo "Error update record: " . $koneksi->error;
		}
		}
 
?>
<a href="login.php">Kembali</a