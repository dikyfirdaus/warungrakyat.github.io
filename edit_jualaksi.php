
<?php 
// koneksi database
include 'koneksidbs.php';
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
	
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nik=$_POST['nik'];
$kode=$_POST['kode_brg1'];
$nama = $_POST['nama_k'];
$merk=$_POST['merk'];
$jj=$_POST['jml'];
$hrg = $_POST['hrg_satuan1'];
//$jml= $_POST['jml_belanja1'];
 $tglb = $_POST['tgl'];
 $nb=$_POST['nama_brg'];
 $qr2 = mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
		   $row2 = mysqli_fetch_array($qr2);
		   $row2['jml']=0;
			$jp=$jj+$row2['jml'];
			echo $id;
			echo $nik;
			echo $tglb;
			echo $kode;
			echo $nb;
			echo $merk;
			echo $jj;
			echo $hrg;
"UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
// update data ke database
$pj="UPDATE penjualan1 SET id='$id',nik='$nik', tgl_j='$tglb',kode_brg='$kode', nama_j = '$nb', merk_j='$merk',jml_j='$jj', hrg_j = '$hrg' where id='$id'";
if ($koneksi->query($pj)===True) {
	$pjq=mysqli_query($koneksi, "select *from penjualan1 where id='$id'");
	$jq=mysqli_fetch_array($pjq);
?>
<br/>
<?php
	echo $jq['id'];
	echo $jq['nik'];
	echo $jq['tgl_j'];
	echo $jq['kode_brg'];
	echo $jq['nama_j'];
	echo $jq['merk_j'];
	echo $jq['jml_j'];
	echo $jq['hrg_j'];
	?>
	<br/>
	<?php
	echo "&nbspRecord update Penjualan1 successfully&nbsp";
 
$sql = "UPDATE barang SET kode='$kode', nama_brg = '$nama', hrg_satuan = '$hrg', jml_belanja='$jj', total='$jp', tgl_b='$tglb'";

if ($koneksi->query($sql) === TRUE) {
  echo "&nbspRecord update barang successfully";
} else {
  echo "Error update record: " . $koneksi->error;
}
//mysqli_query($koneksi,"update barang set barang.nama_brg='$nama',barang.hrg_satuan='$hrg',barang.jml_belanja='$jml', barang.total='$hasil' where barang.id=$id");
//mysqli_query($koneksi,"update barang set barang.nama_brg='$nama',barang.hrg_satuan='$hrg',barang.jml_belanja='$jml', barang.total='$hasil'");
// mengalihkan halaman kembali ke index.php
//header("location:p_brg.php");

}else {
	echo "Error update record: " . $koneksi->error;
}
?>
<br/>
<a href="konsumen.php" class="btn btn-success">KEMBALI</a>