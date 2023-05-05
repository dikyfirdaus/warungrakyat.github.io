<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>ISI UANG</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
	UANG ANGGOTA (ADM)
	 </div>
            <div class="card-body">
	
	
	
	<?php 
	include 'koneksidbs.php';
	$nik1 = $_GET['id'];
	
	//$join           = "select * from konsumen join uang_anggota on konsumen.nik = uang_anggota.nik";
	//$select         = mysqli_query($koneksi, $join);
	$su=mysqli_query($koneksi,"select *from sisauang where nik='$nik1'");
	$suq=mysqli_fetch_array($su);
	$data = mysqli_query($koneksi,"select * FROM konsumen where nik='$nik1'");
	//while($d = mysqli_fetch_array($select)){
	$d3=mysqli_fetch_array($data);
	?> 
	<form method="GET" action="k1.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-12">
		  <div class="form-group">
				<div>
                  <label> NIK :</label>
				   <input type="text" name="id" value="<?php echo $d3['nik'];?>" readonly	  				
                </div>
				<div>
                  <label> NAMA :</label>
				   <?php echo $d3['nama_k'];?>	  				
                </div>
				<div>
                  <label> SALDO :</label>
				   <?php echo $suq['uang'];?>	  				
                </div>
				</div>
				</div>
				</div>
				</div>
				
              <div align="center" class="icon"><i class="bi bi-calendar4-week"></i></div>
              
			  <button align="center" type="submit" class="btn btn-success">KEMBALI</button>
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