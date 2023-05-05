<a href="p_brg.php">KEMBALI</a>
<br/>
<a href="hapus_aksi.php">Yakin Hapus</a>
<?php 
include 'koneksidbs.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM barang WHERE id='$id'")or die(mysqli_error());
 
//header("location:p_brg.php?pesan=hapus");
?>