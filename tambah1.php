<!DOCTYPE html>
<?php include('koneksidbs.php');?>
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
	<h2>DATA BELANJA (ADM)</h2>
	<a href="p_brg.php"class="btn btn-md btn-success" style="margin-bottom: 10px">TAMPILKAN DATA BELANJA</a>
	<a href="admin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	 </div>
            <div class="card-body">
	<form method="post" action="tambah_brg.php">
	<div class="card-body">
                  <div class="row">
	<div class="col-md-12">
		  <div class="form-group ">
				<div>
                  <label>Masukan Kode Barang Yang Akan Ditambahkan</label>
				   <input type="text" name="kode_brg1" placeholder="Masukkan Kode Barang" onkeyup="this.value = this.value.toUpperCase()" 
				  
					 class="form-control">
					 						  				
                </div>
				</div>
				
				
				<div class="col-md-12">
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
						 </div>
						 <button type="submit" class="btn btn-success">OK</button>
		
                <button type="reset" class="btn btn-warning">RESET</button>	
						 
		
		</div>
	</form>
	  
          </div>
        </div>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
	
												
</body>
</html>