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

$br = mysqli_query($koneksi,"select * FROM barang where id='$id'");
$row = mysqli_fetch_array($br);
$kode=$row['kode'];
echo $kode;
$nama=$row['nama_brg'];
$jml=$row['jml_belanja'];
// $qr=mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
	   
	//   $row1 = mysqli_fetch_array($qr);
	   
	  	   
	//   $jp=$row1['jml']-$jml;
	//   echo $jp;
	//  $sql1="UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', jml='$jp' WHERE kode_brg = '$kode'";
	//  if ($koneksi->query($sql1) === TRUE) {
 // echo "Jumlah berhasil dikurangi";
 // echo "  ";
//} else {
 // echo "Error update record: " . $koneksi->error;
//}
// mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
//echo "jumlah persediaan barang berhasil dikurangi";	


$sql = "DELETE FROM barang WHERE id='$id'";
if ($koneksi->query($sql) === TRUE) {
  echo "Record deleted successfully";
 
		
} else {
  echo "Error deleting record: " . $koneksi->error;
}


//$conn->close();
?>
<br/>
<a href="p_brg.php">KEMBALI</a>