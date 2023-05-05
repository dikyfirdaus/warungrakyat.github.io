<!DOCTYPE html>


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
	<title>Registrasi Konsumen (K1)</title>
</head>
<body>
 <div class="container" style="margin-top: 10px">
      <div class="row justify-content-start">
        <div class="col-8 col-md-6">
          <div class="card">
            <div class="card-header">
	REGISTRASI KONSUMEN (K1)
	 </div>
            <div class="card-body">
			<?php 
                      include('koneksidbs.php');
					  $nik=$_GET['id'];
                      $no = 1;
                      $query2 = mysqli_query($koneksi,"SELECT * FROM konsumen where nik='$nik'");
                      $row2= mysqli_fetch_array($query2);
                  ?>
	<a href="kembali.php?id=<?php echo $row2['nik'];?>" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	
              <table class="table table-bordered" id="konsumen">
                <tbody>
                  <?php 
                      include('koneksidbs.php');
					  $nik=$_GET['id'];
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM konsumen where nik='$nik'");
                      while($row = mysqli_fetch_array($query)){
                  ?>
					<tr>
						<td valign="top">NIK</td>
						<td><?php echo $row['nik'] ?></td>
					</tr>
					<tr>
						<td valign="top">Nama Anggota</td>					
						<td><?php echo $row['nama_k'] ?></td>
					</tr>
					<tr>
						<td valign="top">No. Tlp</td>
						<td><?php echo $row['no_tlp'] ?></td>
					</tr>
					<tr>
						<td valign="top">EMAIL</td>
						<td><?php echo $row['email'] ?></td>
					</tr>
					<tr>
						<td valign="top">ALAMAT</td>
						<td><?php echo $row['alamat'] ?></td>
					</tr>
					<tr>
						<td valign="top">PROVINSI</td>
						<td><?php echo $row['prov'] ?></td>
					</tr>
					<tr>
						<td valign="top">KABUPATEN</td>
						<td><?php echo $row['kab'] ?></td>
					</tr>
					<tr>
						<td valign="top">KECAMATAN</td>
						<td><?php echo $row['kec']; ?></td>
					</tr>
					<tr>
						<td valign="top">KELURAHAN</td>
						<td><?php echo $row['kel']; ?></td>
					</tr>
					<tr>
						<td valign="top">RW</td>
						<td><?php echo $row['rw']; ?></td>
					</tr>
					<tr>
						<td valign="top">RT</td>
						<td><?php echo $row['rt']; ?></td>
					</tr>
                      <td class="text-center">
                        <a href="edit_k1.php?id=<?php echo $row['nik'] ?>" class="btn btn-sm btn-primary">EDIT</a>
											
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