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
	  <div class="col-md-12 offset-md-20">
        
          <div class="card">
            <div class="card-header">
	PENAWARAN BARANG (Adm)
	
	 </div>
            <div class="card-body">
	<a href="penawaran_adm.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">KEMBALI KE KONSUMEN (ADM)</a>
	 
	<a href="admin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	<h3>Tambah Data Produk Di Anggota</h3>
	<?php 
	include 'koneksidbs.php';
	$nik = $_POST['nik'];
	
	$join           = "select * from penjualan1 where nik='$nik'";
	$select         = mysqli_query($koneksi, $join);
	$d = mysqli_fetch_array($select);
	
	$nik1=$d['nik'];
	echo $nik1;
	$data = mysqli_query($koneksi,"select * FROM konsumen where nik='$nik1'");
	$d2 = mysqli_fetch_array($data);
	?>
	
	<form method="post" action="jual2adm.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
	
		  <div class="form-group ">
		  
				<div
                  <label>Nama Konsumen</label>
				   <input type="text" name="nama_k" value=<?php echo $d2['nama_k'];?> readonly class="form-control">
				</div>
				<div class="form-group">
                  <label>NIK</label>
				   <input type="text" name="nik" value=<?php echo $d2['nik'];?> readonly class="form-control">
                </div>
				<div>
                  <label>Kode Brg</label>
				   <input type="text" name="kode_brg1" placeholder="Masukkan Kode Barang"
				  	 class="form-control">							  				
                </div>
				
				<div>
                  <label>Nama Brg</label>
				   <input type="text" name="nama_brg1"  placeholder="Masukkan Nama Barang" onkeyup="this.value = this.value.toUpperCase()"
					 class="form-control">	
				</div>
				<div>
                  <label>Merk</label>
				   <input type="text" name="merk"  placeholder="Masukkan Nama Barang" onkeyup="this.value = this.value.toUpperCase()"
					 class="form-control">	
				</div>				
				<div>
                  <label>Jumlah Jual</label>
				   <input type="text" name="jml"  placeholder="Masukkan Nama Barang" onkeyup="this.value = this.value.toUpperCase()"
					 class="form-control">	
                </div>
				<div class="form-group">
                  <label>Harga Satuan</label>
				   <input type="number" name="hrg_satuan1" placeholder="Masukkan Harga Satuan" class="form-control">
                </div>
				</div>
				</div>
	<div class="col-md-6">
                  <div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>KODE</th>
					<th>NAMA BARANG</th>
					<th>MERK </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>G0001</td>
					<td>GULA_PUTIH</td>
				</tr>
				<tr>
					<td>2</td>
					<td>G0002</td>
					<td>GULA_MERAH</td>
				</tr>
				<tr>
					<td>3</td>
					<td>M0001</td>
					<td>MINYAK_CURAH</td>
				</tr>
				<tr>
					<td>4</td>
					<td>M0002</td>
					<td>MINYAK_KEMASAN</td>
					<td>BIMOLI</td>
				<tr>
					<td>4</td>
					<td>M0003</td>
					<td>MINYAK_KEMASAN</td>
					<td>FORTUNE</td>
				</tr>
				<tr>
					<td>5</td>
					<td>T0001</td>
					<td>TELOR_AYAM</td>
				</tr>
			</tbody>
		</table>
		</div>
		</div>
		</div>
		<button type="submit" class="btn btn-success">SIMPAN</button>
	</form>
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