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
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>TAMBAH UANG</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row">
	  <div class="col-md-12 offset-md-20">
        
          <div class="card">
            <div class="card-header">
	PENAMBAHAN UANG (Adm)
	
	 </div>
            <div class="card-body">
	<a href="konsumen.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">KEMBALI KE KONSUMEN (ADM)</a>
	 
	<a href="admin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	<h3>Tambah Data Produk Di Anggota</h3>
	<?php 
	include 'koneksidbs.php';
	$nik1 = $_GET['nik'];
	$data = mysqli_query($koneksi,"select * FROM uang_anggota where nik='$nik1'");
	$d2 = mysqli_fetch_array($data);
	$jo           = "select * from konsumen where nik='$nik1'";
	$select         = mysqli_query($koneksi, $jo);
	
	$d = mysqli_fetch_array($select)
	?>
	
	<form method="GET" action="topuptambahaksi.php">
	
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
	
		  <div class="form-group ">
		  
				<div
                  <label>Nama Konsumen</label>
				   <input type="text" name="nama_k" value=<?php echo $d['nama_k'];?> readonly class="form-control">
				</div>
				<div class="form-group">
                  <label>NIK</label>
				   <input type="text" name="nik" value=<?php echo $d['nik'];?> readonly class="form-control">
                </div>
							
				<div>
                  <label>Jumlah Uang</label>
				   <input type="number" name="uang"  placeholder="Masukkan jumlah Uang" 
					 class="form-control">	
				</div>
				<div>
                  <label>Tanggal Input</label>
				   <input type="date" name="tgl"  placeholder="Masukkan Tanggal Input" 
					 class="form-control">	
				</div>
<div>
                  
				</div>
				</div>
	
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