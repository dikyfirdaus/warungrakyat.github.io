 <a href='edit_brg.php'>TAMPILKAN</a>
<?php 
// koneksi database
include 'koneksidbs.php';
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$bil1=null;
    $bil2=null;
	$bil1=$_POST['hrg_satuan1'];
    $bil2=$_POST['jml_belanja1'];
    $hasil=0;
	$hasil = $bil1*$bil2;	
	
// menangkap data yang di kirim dari form
$id = $_POST['id1'];
$kode=$_POST['kode_brg1'];
$nama = $_POST['nama_brg1'];
$hrg = $_POST['hrg_satuan1'];
$jml= $_POST['jml_belanja1'];
 $tglb = $_POST['tgl_belanja1'];
 $qr2 = mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
		   $row2 = mysqli_fetch_array($qr2);
		   $row2['jml']=0;
			$jp=$jml+$row2['jml'];
"UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
// update data ke database
$sql = "UPDATE barang SET kode='$kode', nama_brg = '$nama', hrg_satuan = '$hrg', jml_belanja='$jml', total='$hasil', tgl_b='$tglb' WHERE id = $id";

if ($koneksi->query($sql) === TRUE) {
  echo "Record update successfully";
} else {
  echo "Error update record: " . $koneksi->error;
}
//mysqli_query($koneksi,"update barang set barang.nama_brg='$nama',barang.hrg_satuan='$hrg',barang.jml_belanja='$jml', barang.total='$hasil' where barang.id=$id");
//mysqli_query($koneksi,"update barang set barang.nama_brg='$nama',barang.hrg_satuan='$hrg',barang.jml_belanja='$jml', barang.total='$hasil'");
// mengalihkan halaman kembali ke index.php
//header("location:p_brg.php");

 
?>
<br/>
<a href="p_brg.php">KEMBALI</a>