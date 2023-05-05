<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>Bio Data (K1)</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row justify-content-start">
        <div class="col-8 col-md-6">
          <div class="card">
            <div class="card-header">
	Bio Data (K1)
	 </div>
            <div class="card-body">
	<a href="index.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	
              <table class="table table-bordered" id="konsumen">
                <tbody>
                  <?php 
                      include('koneksidbs.php');
					  $nik=$_POST['nik'];
					  $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM konsumen where nik='$nik'");
                      while($row = mysqli_fetch_array($query)){
                  ?>
					<tr>
						<td valign="top">NIK</td>
						<td><?php echo $row['nik'] ?></td>
					</tr>
					<tr>
						<td valign="top">Nama Anggota</td>					
						<td><?php echo $row['nama_k'] ?></td>
					</tr>
					<tr>
						<td valign="top">No. Tlp</td>
						<td><?php echo $row['no_tlp'] ?></td>
					</tr>
					<tr>
						<td valign="top">EMAIL</td>
						<td><?php echo $row['email'] ?></td>
					</tr>
					<tr>
						<td valign="top">ALAMAT</td>
						<td><?php echo $row['alamat'] ?></td>
					</tr>
					<tr>
						<td valign="top">PROVINSI</td>
						<td><?php echo $row['prov'] ?></td>
					</tr>
					<tr>
						<td valign="top">KABUPATEN</td>
						<td><?php echo $row['kab'] ?></td>
					</tr>
					<tr>
						<td valign="top">KECAMATAN</td>
						<td><?php echo $row['kec']; ?></td>
					</tr>
					<tr>
						<td valign="top">KELURAHAN</td>
						<td><?php echo $row['kel']; ?></td>
					</tr>
					<tr>
						<td valign="top">RW</td>
						<td><?php echo $row['rw']; ?></td>
					</tr>
					<tr>
						<td valign="top">RT</td>
						<td><?php echo $row['rt']; ?></td>
					</tr>
                      <td class="text-center">
                        <a href="edit_k1.php?id=<?php echo $row['nik'] ?>" class="btn btn-sm btn-primary">EDIT</a>
											
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