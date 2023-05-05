<a href="adminkel.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Data Admin</a>
<a href="logout.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
<?php 
include 'koneksidbs.php';
?>
 
<h3>Form Pencarian Data Users</h3>
 
<form action="konkel.php" method="get">
	<label>Ketikan Nama Kelurahan :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>NAMA</th>
		<th>NIK</th>
		<th>KELURAHAN</th>
		<th>KECAMATAN</th>
		<th>KABUPATEN</th>
		<th>PROVINSI</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"select * from konsumen where kel like '$cari%'");				
	}else{
		$data = mysqli_query($koneksi,"select * from konsumen");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama_k']; ?></td>
		<td><?php echo $d['nik']; ?></td>
		<td><?php echo $d['kel']; ?></td>
		<td><?php echo $d['kec']; ?></td>
		<td><?php echo $d['kab']; ?></td>
		<td><?php echo $d['prov']; ?></td>
	</tr>
	<?php } ?>
</table>
