<?php
$nik=$_GET['nik'];
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>PEMBELIAN BARANG</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
	BELANJA BARANG
	 </div>
            <div class="card-body">
	<a href="tambah1.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
	<a href="konsumenkel.php?id=<?php echo $nik ?>" class="btn btn-md btn-success" style="margin-bottom: 10px">LIHAT DATA KONSUMEN</a>
	<a href="persediaan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">LIHAT PERSEDIAAN</a>
	<a href="admin.php?nik=<?php echo $nik ?>" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
              <table class="table table-bordered" id="barang">
                <thead>
				<tr>
                    <th scope="col">NO.</th>
                    <th scope="col">id</th>
					<th scope="col">KODE </th>
                    <th scope="col">NAMA </th>
					<th scope="col">MERK </th>
                    <th scope="col">HARGA </th>
					<th scope="col">JUMLAH/Kg</th>
					<th scope="col">TOTAL </th>
					<th scope="col">Tgl Belanja</th>
                </tr>
                </thead>
				<tbody>
                  <?php 
                      include('koneksidbs.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM barang");
                      while($row = mysqli_fetch_array($query)){
                  ?>
				  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
					  <td><?php echo $row['kode'] ?></td>
					  <td><?php echo $row['nama_brg'] ?></td>
					  <td><?php echo $row['merk_b'] ?></td>
                      <td><?php echo $row['hrg_satuan'] ?></td>
					  <td><?php echo $row['jml_belanja'] ?></td>
					  <td><?php echo $row['total']; ?></td>
					  <td><?php echo $row['tgl_b']; ?></td>
					 
                      <td class="text-center">
                        <a href="edit_brg.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_aksi1.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
						<a href="cetakQR.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">CETAK QR</a>
                      </td>
                  </tr
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
	