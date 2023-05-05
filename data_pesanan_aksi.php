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
 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
	PESANAN ANGGOTA (ADM)
	 </div>
            <div class="card-body">
	
	<a href="konsumen.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI KONSUMEN</a>
	<a href="persediaan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">LIHAT PERSEDIAAN</a>
	<a href="admin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
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
					
                </tr>
                </thead>
				<tbody>
                  <?php 
                      include('koneksidbs.php');
					  $id=$_GET['id'];
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM pesanan where id='$id'");
                      $row = mysqli_fetch_array($query)
						  
							  
                  ?>
				  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
					  <td><?php echo $row['tanggal'] ?></td>
					  <td><?php echo $row['nik'] ?></td>
					  <td><?php echo $row['nama'] ?></td>
					  <td><?php echo $row['alamat'] ?></td>
					  <td><?php echo $row['barang'] ?></td>
                      <td><?php echo $row['merk'] ?></td>
					  <td><?php echo $row['volume'] ?></td>
					  <td><?php //echo $row['ket'] ?></td>
					  <?php $id=$row['id'];
					  $tgl=$row['tanggal'];
					  $nik=$row['nik'];
					  $nama=$row['nama'];
					  $alamat=$row['alamat'];
					  $barang=$row['barang'];
					  $merk=$row['merk'];
					  $vol=$row['volume'];
					  $ket="SUDAH";
					  $tgl2=date("Y-d-m H:i:s");
					  echo $tgl2;
					  //die();
					  $ps=mysqli_query($koneksi,"update pesanan set tanggal='$tgl',nik='$nik',nama='$nama',alamat='$alamat',barang='$barang',merk='$merk',volume='$vol', ket='$ket' where id='$id'");
					   $ps2=mysqli_query($koneksi,"INSERT into pesanan_sdh values('','$tgl2','$nik','$nama','$alamat','$barang','$merk','$vol','$ket')");
					   //$ps3=mysqli_fetch_array($ps2);
					   //echo $ps3['tgl'];
					  
					   ?>
					  
					  
					  
					  <?php 
					  $q = mysqli_query($koneksi,"SELECT * FROM pesanan_sdh where id='$id'");
					  $ql=mysqli_fetch_array($q);
					  //echo $ql['ket'];
					  //die();?>
					 <td><?php echo $ql['ket'] ?></td>
                      <td class="text-center">
					  

                        <a href="data_pesanan.php" class="btn btn-sm btn-success">KEMBALI</a>
                        
						
                      </td>
                  </tr>
				
                        
				
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