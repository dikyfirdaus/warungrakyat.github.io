
<!DOCTYPE html>
 
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
	<h2>EDIT DATA</h2>
	 </div>
	<div class="card-body">
	<a href="p_brg.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
	<a href="admin.html" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	<?php 
    include('koneksidbs.php');
    //$query = mysqli_query($koneksi,"SELECT * FROM barang");
	//$row = mysqli_fetch_array($query);
    ?>
	<?php
	include 'koneksidbs.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id='$id'");
	
	//$row = mysqli_fetch_array($data)
	//$nomor = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<h3>EDIT DATA BARANG</h3>
	<form method="post" action="update_brg.php">
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
				<div class="form-group">  
                  <label>Id Barang :</label>
				  <input type="number" name="id1" disable value="<?php echo $d['id']; ?>">
                </div>
				<div>  
                  <label>Kode Barang</label>
				   <input type="text" name="kode_brg1" value="<?php echo $d['kode']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>  
                  <label>Nama Brg</label>
				   <input type="text" name="nama_brg1" value="<?php echo $d['nama_brg']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>
                  <label>Harga Satuan</label>
				   <input type="number" name="hrg_satuan1" value="<?php echo $d['hrg_satuan']; ?>" class="form-control">
                </div>
				<div>
                  <label>Jumlah Belanja</label>
				   <input type="number" name="jml_belanja1" value="<?php echo $d['jml_belanja']; ?>" class="form-control">
                </div>
				<div>
                  <label>Tanggal Belanja</label>
				   <input type="date" name="tgl_belanja1" value="<?php echo $d['tgl_b']; ?>" class="form-control">
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
	   
	</form>
	
		</div>
          </div>
      </div>
    </div>
 </div
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>
<?php } ?>
</html>