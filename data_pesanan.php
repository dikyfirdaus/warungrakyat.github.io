<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>PESANAN BARANG</title>
</head>
<body>
 <div class="container" style="margin: 10px 10px">
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
	PESANAN ANGGOTA (ADM)
	 </div>
            <div class="card-body">
	<?php
	$nik=$_GET['nik'];
	?>
	<a href="konsumen.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI KONSUMEN</a>
	<a href="persediaan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">LIHAT PERSEDIAAN</a>
	<a href="admin.php?nik=<?php echo $nik;?>" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
              <table class="table table-bordered" id="barang">
                <thead>
				<tr>
                    <th scope="col">NO.</th>
                    <th scope="col">id</th>
					<th scope="col">Tgl Pesan</th>
					<th scope="col">NIK </th>
					<th scope="col">NAMA </th>
					<th scope="col">ALAMAT </th>
					<th scope="col">BARANG </th>
                    <th scope="col">MERK </th>
                    <th scope="col">VOLUME</th>
					<th scope="col">KETERANGAN</th>
					<th scope="col">Tgl Dikerjakan</th>
					
                </tr
                </thead>
				<tbody>
                  <?php 
                      include('koneksidbs.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM pesanan");
					  
                      while($row = mysqli_fetch_array($query)){
						  if ($row['ket']=='SUDAH'){
							  
                   
                  ?>
				  
				  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
					  <td><?php echo $row['tanggal']; ?></td>
					  <td><?php echo $row['nik'] ?></td>
					  <td><?php echo $row['nama'] ?></td>
					  <td><?php echo $row['alamat']; ?></td>
					  <td><?php echo $row['barang'] ?></td>
                      <td><?php echo $row['merk'] ?></td>
					  <td><?php echo $row['volume'] ?></td>
					  <td><?php echo $row['ket'] ?></td>
					  <?php 
					  $id=$row['id'];
					  $q = mysqli_query($koneksi,"SELECT * FROM pesanan_sdh where id=$id");
					  $qq=mysqli_fetch_array($q);
					  ?> 
					  <td><?php echo $qq['tgl'] ?></td>
					  <td class="text-center">
					 <a href="" class="btn btn-sm btn-success" >SUDAH</a
					 </td>
					</tr 
						  <?php } else {  ?> 
					  
					 <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
					  <td><?php echo $row['tanggal']; ?></td>
					  <td><?php echo $row['nik'] ?></td>
					  <td><?php echo $row['nama'] ?></td>
					  <td><?php echo $row['alamat']; ?></td>
					  <td><?php echo $row['barang'] ?></td>
                      <td><?php echo $row['merk'] ?></td>
					  <td><?php echo $row['volume'] ?></td>
					  <td><?php echo $row['ket'] ?></td>
					  <td><?php $tgl=date("Y-m-d H:i:s");echo $tgl; ?></td>
                      
					  <style>
.blink {
animation: blink-animation 1s steps(5, start) infinite;
-webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
to {
visibility: hidden;
}
}
@-webkit-keyframes blink-animation {
to {
visibility: hidden;
}
}
</style>
						<td class="text-center">
        <a href="data_pesanan_aksi.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger blink" >KERJAKAN</a>
                        
						
                      </td>
                  </tr
				  <?php } ?>
				   <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
	</body>
</html>