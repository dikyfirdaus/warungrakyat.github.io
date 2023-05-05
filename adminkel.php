<a href="konkel.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Data Users</a>
<a href="logout.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
<?php 
include 'koneksidbs.php';
?>
<h3>Form Pencarian Data Admin Di Kelurahan</h3>
 
<form action="adminkel.php" method="get">
	<label>Ketikan Nama Kelurahan :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 

	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";

?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>NAMA</th>
		<th>NIK</th>
		<th>KELURAHAN</th>
		<th>username</th>
		<th>email</th>
		
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"select * from users where kel='$cari' or username='$cari'");				
	}else{
		$data = mysqli_query($koneksi,"select * from users");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['nik']; ?></td>
		<td><?php echo $d['kel']; ?></td>
		<td><?php echo $d['username']; ?></td>
		<td><?php echo $d['email']; ?></td>
		
	</tr>
	<?php } ?>
</table>
