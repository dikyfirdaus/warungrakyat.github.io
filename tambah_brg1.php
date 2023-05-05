<!DOCTYPE html>
<?php include('koneksidbs.php');
$q=$_POST['kode_brg1'];
$ql=mysqli_query($koneksi,"select *FROM persediaan where kode_brg='$q'");
$rows=mysqli_fetch_array($ql);
//echo $rows['nama_brg'];

if (!isset($rows['kode_brg']))
	   {
		    echo "Item barang belum ada di persediaan... Silakan di isi...! ";
			?>
			<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>

 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-20">
          <div class="card">
            <div class="card-header">
	<h2>DATA BELANJA</h2>
	<a href="p_brg.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMPILKAN</a> 
	<a href="tambah1.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
	 </div>
            <div class="card-body">
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="post" action="tambah_brgaksi.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
		  <div class="form-group ">
				<div>
                  <label>Kode Brg</label>
				   <input type="text" name="kode_brg1" value=<?php echo $_POST['kode_brg1'];?>
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
				<div class="form-group">
                  <label>Harga Satuan</label>
				   <input type="number" name="hrg_satuan1" placeholder="Masukkan Harga Satuan" class="form-control">
                </div>
				<div class="form-group">
                  <label>Jumlah Belanja</label>
				   <input type="number" name="jml_belanja1" placeholder="Masukkan Jumlah" class="form-control">
                </div>
				<div class="form-group">
                  <label>Tgl Belanja</label>
				   <input type="date" name="tanggal1"  placeholder="Masukkan Tanggal Belanja" class="form-control">	
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
						 </div>
						 
						 
		<button type="submit" class="btn btn-success">SIMPAN</button>
		
                <button type="reset" class="btn btn-warning">RESET</button>
		</div>
	</form>
	  
          </div>
        </div>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	   <?php } 
 else ?>
<?php { ?>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>

 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-20">
          <div class="card">
            <div class="card-header">
	<h2>001 DATA BELANJA</h2>
	 </div>
            <div class="card-body">
	<br/>
	<a href="p_brg.php">TAMPILKAN</a>  
	<br/>
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="post" action="tambah_brgaksi.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
		  <div class="form-group ">
				<div>
                  <label>Kode Brg</label>
				   <input type="text" name="kode_brg1" value=<?php echo $rows['kode_brg'];?>
				  
					 class="form-control">
															  				
                </div>
				
				<div>
                  <label>Nama Brg</label>
				   <input type="text" name="nama_brg1"  value=<?php echo $rows['nama_brg'];?>
					 class="form-control">	
					

                </div>
				<div class="form-group">
                  <label>Harga Satuan</label>
				   <input type="number" name="hrg_satuan1" value=<?php echo $rows['hrg_satuan'];?> class="form-control">
                </div>
				<div class="form-group">
                  <label>Jumlah Belanja</label>
				   <input type="number" name="jml_belanja1" placeholder="Masukkan Jumlah" class="form-control">
                </div>
				<div class="form-group">
                  <label>Tgl Belanja</label>
				   <input type="date" name="tanggal1"  placeholder="Masukkan Tanggal Belanja" class="form-control">	
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
						 </div>
						 
						 
		<button type="submit" class="btn btn-success">SIMPAN</button>
		
                <button type="reset" class="btn btn-warning">RESET</button>
		</div>
	</form>
	  
          </div>
        </div>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<?php }?>			
												
</body>
</html>