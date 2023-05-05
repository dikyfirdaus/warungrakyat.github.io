<!DOCTYPE html>
<html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WarungRakyat Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logowp1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>
<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="dikyf354@gmail.com">dikyf354@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 81322442119
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
	
  </section>
  
  


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

	
      <h1 <a href="">WarungRakyat</a></h1>
	 
	 
      <!-- Uncomment below if you prefer to use an image logo -->
     

      <nav id="navbar" class="navbar">
        <ul>
          
          
          <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>
<?php
include 'koneksidbs.php';
		$nik=$_GET['id'];
		$sql=mysqli_query($koneksi,"select *From konsumen where nik='$nik'");
		$q2=mysqli_fetch_array($sql);
		?>
	<a href="kembali.php?id=<?php echo $q2['nik'];?>"class="btn btn-md btn-success" style="margin-bottom: 10px">Exit</a > 
 <div class="container" style="margin: 10px">
      <div class="row">
        <div class="col-md-10 offset-md-20">
          <div class="card">
            <div class="card-header">
	
	 </div>
            <div class="card-body">
	
	
	<h3>TAMBAH DATA PESANAN (K1)</h3>
	<form method="Post" action="pesanan_aksi.php">
	<?php $sql2=mysqli_query($koneksi,"select *From pesanan");
	$ql=mysqli_num_rows($sql2);
	
	$ps=$ql+1;
	
	
	?>
	<div class="card-body">
                  <div class="row">
	
	<div class="col-md-6">
                  <div class="table-responsive">
		  <div class="form-group ">
				<div class="form-group">
				<label>No.Pesanan Anda</label>
				   <input type="number" name="no"  value=<?php echo $ps;?> readonly class="form-control">	
				</div>
                  <label>Tgl Pesan</label>
				   <input type="date" name="tanggal"  placeholder="Masukkan Tanggal Pesan" class="form-control">	
				</div>
				<div>
                  <label>NIK</label>
				   <input type="number" name="nik" placeholder="Masukkan No Induk Keranjang" onkeyup="this.value = this.value.toUpperCase()"
				  
					 class="form-control">				
                </div>
				
				<div>
                  <label>Nama Anggota</label>
				   <input type="text" name="nama"  placeholder="Masukkan Nama" onkeyup="this.value = this.value.toUpperCase()"
					 class="form-control">	
				</div>
				<div>
                  <label>Alamat</label>
				   <input type="text" name="alamat" placeholder="Masukkan Alamat" onkeyup="this.value = this.value.toUpperCase()"
					 class="form-control">	
				</div>
				<div class="form-group">
                  <label>Nama Pesanan</label>
				   <input type="text" name="barang" placeholder="Masukkan Nama Pesanan" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                </div>
				<div class="form-group">
                  <label>Merk Pesanan</label>
				   <input type="text" name="merk" placeholder="Masukkan Merk Pesanan" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                </div>
				<div class="form-group">
                  <label>Volume Pesanan</label>
				   <input type="number" name="volume"  placeholder="Masukkan Jumlah Pesanan" class="form-control">	
				</div>
				<div class="form-group">
                  <label>Keterangan</label>
				   <input type="number" name="ket"  value=<?php echo "BELUM";?>  placeholder="BELUM" readonly class="form-control">	
				</div>
				 </div>
				  </div>
				<div class="col-md-6">
                  <div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
			
				
				<div class="col-md-6">
                  <div style="center" class="table-responsive">
				<thead>
				
					TABEL PRODUK			
				</thead>
				</div>
				</div>
				
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
				<tbody>
				<div class="col-md-6">
                  <div class="table-responsive">
				  <table class="table table-bordered table-striped table-hover">
				<tr>
					<td>Catatan:</td>
				</tr>
				<tr>
					<td>Pesanan dilakukan bila tidak ada pada Tabel Produk</td>
				</tr>
				</tbody>
			</tbody>
		</table>
                  </div>
				 </div>
						 </div> 
						 </div>
						 
						 
		<button type="submit" class="btn btn-success">SIMPAN</button>
		
                
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