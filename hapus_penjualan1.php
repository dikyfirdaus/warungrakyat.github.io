<?php
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
include 'koneksidbs.php';
// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}

// sql to delete a record
$id = $_GET['id'];

$br = mysqli_query($koneksi,"select * FROM penjualan1 where id='$id'");
$row = mysqli_fetch_array($br);
$id=$row['id'];
$nik=$row['nik'];
echo $id;
echo $row['kode_brg'];
echo $nik;
$kode=$row['kode_brg'];
$nama=$row['nama_j'];
//$merk=$row['merk'];
$jml=$row['jml_j'];
$hrg=$row['hrg_j'];
$p=mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
$row3=mysqli_fetch_array($p);
// $qr=mysqli_query($koneksi,"select * FROM persediaan where nik='$nik'");
	   
	//   $row1 = mysqli_fetch_array($qr);
	   
	  	   
	   $jp=$row3['jml']-$row['jml_j'];
	//   echo $jp;
	 
	//  if ($koneksi->query($sql1) === TRUE) {
 // echo "Jumlah berhasil dikurangi";
 // echo "  ";
//} else {
 // echo "Error update record: " . $koneksi->error;
//}
// mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
//echo "jumlah persediaan barang berhasil dikurangi";	

$sql1="UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
$sql = "DELETE FROM penjualan1 WHERE id='$id'";
if ($koneksi->query($sql) === TRUE) {
  echo "Record deleted successfully";
 
		
} else {
  echo "Error deleting record: " . $koneksi->error;
}
 

//$conn->close();
?>
<br/>
<a href="konsumen.php">KEMBALI</a>