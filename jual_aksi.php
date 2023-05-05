
   



<?php
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
include 'koneksidbs.php';
// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}

// sql to delete a record
include 'koneksidbs.php';
$id = $_GET['id'];

$br1 = mysqli_query($koneksi,"select * FROM penjualan1 where id='$id'");

$row1 = mysqli_fetch_array($br1);

	$nik=$row1['nik'];
	
	$tgl=$row1['tgl_j'];
	$kode1 = $row1['kode_brg'];
	$nama1=$row1['nama_j'];
	echo $nama1;
	echo "\t";
	$merk=$row1['merk_j'];
	echo $merk;
	echo "\t";
	$jml1=$row1['jml_j'];
	$hrg1=$row1['hrg_j'];
	echo $hrg1;
	$jual="INSERT INTO jual values('','$nik','$tgl','$kode1','$nama1','$merk','$hrg1','$jml1')";
	//"INSERT INTO jual(`nik`, `tgl_j`, `kode_2`, `nama`, `merk_j`, `hrg`, `jj`) VALUES ('$nik','$tgl','$kode1','$nama1','$merk','$hrg1','$jml1')";
	//$jual = mysqli_query($koneksi,"INSERT INTO jual values('','$nik','$tgl','$kode1','$nama1','$merk','$hrg1','$jml1')");
	
	//$jual=mysqli_query($koneksi,"INSERT INTO jual values('','$nik','$tgl','$kode1','$nama1','$merk','$hrg1','$jml1')");
	if ($koneksi->query($jual) === TRUE) {
		echo " Telah terjual berhasil di simpan......";
		echo "\t";
	}else {
	
		echo "Penjualan belum tersimpan.......";
	}
		$br = mysqli_query($koneksi,"select * FROM barang where id='$id'");
		$row = mysqli_fetch_array($br);
		$qr=mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode1'");
		$row2 = mysqli_fetch_array($qr);
	   
	  	   
	   $jp=$row2['jml']-$jml1;
	  
	   
	  $sql1="UPDATE persediaan SET kode_brg='$kode1', nama_brg = '$nama1', merk='$merk',jml='$jp' WHERE kode_brg = '$kode1'";
	  if ($koneksi->query($sql1) === TRUE) {
			echo "Jumlah Persediaan berhasil dikurangi";
			echo "\t";
			//mysqli_query($koneksi,"update into persediaan values('','$kode1','$nama1','$merk','$jp' where kode_brg='$kode1')");
			//echo "Jumlah persediaan barang berhasil dikurangi";	
			$pj=mysqli_query($koneksi,"select *from penjualan1 where id='$id'");
			$pj1=mysqli_fetch_array($pj);
			$nik=$pj1['nik'];
			
			$a=mysqli_query($koneksi,"select *from sisauang where nik='$nik'");
			$a1=mysqli_fetch_array($a);
			$su=$a1['uang']-$pj1['hrg_j'];
			$su2="update sisauang set nik='$nik', uang='$su' where nik='$nik'";
			if ($koneksi->query($su2) === TRUE) {
			echo "Sisa Uang successfully Update";
			//die();
		
			} else {
			echo "Error Update record: " . $koneksi->error;
			}
		
			$sql = "DELETE FROM penjualan1 WHERE id='$id'";
			if ($koneksi->query($sql) === TRUE) {
			echo "Record deleted successfully";
 
		
			} else {
			echo "Error deleting record: " . $koneksi->error;
			}
		} 		else {
			echo "Error update record: " . $koneksi->error;
		}
 include('koneksidbs.php');
					  $id=$_GET['id'];
					  $br1 = mysqli_query($koneksi,"select * FROM penjualan1 where id='$id'");
						$row1 = mysqli_fetch_array($br1);
						//$nik=$row1['nik'];
                      $query3 = mysqli_query($koneksi,"SELECT * FROM konsumen where nik='$nik'");
                      $row3= mysqli_fetch_array($query3);

//$conn->close();
?>
<br/>


	<a href="penawaran_aksi.php?nik=<?php echo $row3['nik']?>">KELUAR</a>

