
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
  <link href="assets/img/logowr1.png" rel="icon">
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>Registrasi Konsumen (ADM)</title>
</head>
<body>
 <div class="container" style="margin: 10px 10px" >
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
	REGISTRASI KONSUMEN (ADM)
	 </div>
            <div class="card-body">
	<a href="tambah_k.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
	<a href="p_brg.php?nik=<?php echo $_session['nik'];?>" class="btn btn-md btn-success" style="margin-bottom: 10px">LIHAT DATA BELANJA</a>
	<a href="spradmin.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
	<a id='konsumen' href="konsumen_cetak.php" class="btn btn-md btn-success" style="margin-bottom: 10px">CETAK</a>
              <table class="table table-bordered" id="konsumen">
                <thead>
				<tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA KONSUMEN</th>
					<th scope="col">No TLP</th>
					<th scope="col">EMAIL</th>
					<th scope="col">ALAMAT</th>
                    <th scope="col">PROVINSI</th>
					<th scope="col">KABUPATEN/KOTA</th>
					<th scope="col">KECAMATAN</th>
					<th scope="col">KELURAHAN</th>
					<th scope="col">RW</th>
					<th scope="col">RT</th>
                </tr>
                </thead>
				<tbody>
                  <?php 
                      include('koneksidbs.php');
                      $no = 1;
					  
                      $query = mysqli_query($koneksi,"SELECT * FROM konsumen");
                      while($row = mysqli_fetch_array($query)){
                  ?>
				  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nik'] ?></td>
					  <td><?php echo $row['nama_k'] ?></td>
                      <td><?php echo $row['no_tlp'] ?></td>
					  <td><?php echo $row['email'] ?></td>
					  <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['prov'] ?></td>
					  <td><?php echo $row['kab'] ?></td>
					  <td><?php echo $row['kec']; ?></td>
					  <td><?php echo $row['kel']; ?></td>
					  <td><?php echo $row['rw']; ?></td>
					  <td><?php echo $row['rt']; ?></td>
                      <td class="text-center">
					  
                        <a href="edit_konsumen.php?id=<?php echo $row['nik']; ?>" class="btn btn-sm btn-primary">EDIT</a>
						<a href="penjualan.php?id=<?php echo $row['nik']; ?>" class="btn btn-sm btn-danger">PENJUALAN</a>
                        <a href="hapus_aksi1.php?id=<?php echo $row['nik']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
						<a href="topup.php?id=<?php echo $row['nik']; ?>" class="btn btn-sm btn-success">Isi Uang</a>
						
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