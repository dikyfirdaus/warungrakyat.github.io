<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>PENAWARAN BARANG</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
	BARANG YANG DITAWARKAN (ADM)
	 </div>
            <div class="card-body">
	<a href="konsumen.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">KEMBALI KE KONSUMEN</a>
	
	<a href="admin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	<?php 
	include 'koneksidbs.php';
	//$nik1 = $_GET['id'];
	
	//$join           = "select * from konsumen join penjualan1 on konsumen.nik = penjualan1.nik";
	//$select         = mysqli_query($koneksi, $join);
	//$data = mysqli_query($koneksi,"select * FROM konsumen where nik='$nik1'");
	//while($d = mysqli_fetch_array($select)){
	//$d3=mysqli_fetch_array($data);
	?> 
	<form method="post" action="penawaran_admtambah.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-12">
		  <div class="form-group">
				<div>
                  <label> NIK :</label>
				   <input type="text" name="nik" placeholder ="masukan NIK produk yang akan di tambah" class="form-control">
															  				
                </div>
				
				</div>
				</div>
				<button type="submit" class="btn btn-success">TAMBAH PRODUK</button>
	</form>
	<table class="table table-bordered" id="penjualan1">
                <thead>
				<tr>
                    <th scope="col">NO.</th>
					<th scope="col">ID</th>
                    <th scope="col">NIK</th>
					<th scope="col">NAMA </th>
					<th scope="col">TANGGAL </th>
					<th scope="col">KODE BRG</th>
                    <th scope="col">BARANG </th>
					<th scope="col">MERK </th>
					<th scope="col">HARGA </th>
					<th scope="col">JUMLAH </th>
					</tr>
                </thead>
				<tbody>
                  <?php 
                      include 'koneksidbs.php';
	//$nik1 = $_GET['id'];
	
	$join = "select * from konsumen join penjualan1 on konsumen.nik = penjualan1.nik";
	$no=1;
	$select = mysqli_query($koneksi, $join);
	//$data = mysqli_query($koneksi,"select * FROM penjualan1 where nik='$nik1'");
	
	
	//$data1 = mysqli_query($koneksi,"select * FROM konsumen where nik='$nik1'");
	//$q=mysqli_fetch_array($data1);
	while($d = mysqli_fetch_array($select)){
                  ?>
				  <tr>
                      <td><?php echo $no++ ?></td>
					  <td><?php echo $d['id'] ?></td>
                      <td><?php echo $d['nik'] ?></td>
					  <td><?php echo $d['nama_k'] ?></td>
					  <td><?php echo $d['tgl_j'] ?></td>
					  <td><?php echo $d['kode_brg'] ?></td>
                      <td><?php echo $d['nama_j'] ?></td>
					  <td><?php echo $d['merk_j'] ?></td>
					  <td><?php echo $d['hrg_j'] ?></td>
					  <td><?php echo $d['jml_j'] ?></td>
					 			 
                      <td class="text-center">
                       
                        <a href="edit_jual.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_penjualan1.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
						
                      </td> 
                    </tr
				   <?php } ?>
                </tbody>
              </table>
	
	
	
                  
	   
	
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