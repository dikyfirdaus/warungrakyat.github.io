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
 <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-20">
          <div class="card">
            <div class="card-header">
	<h2>EDIT DATA USER</h2>
	 </div>
	<div class="card-body">
	<a href="login.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
	<a href="index.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KELUAR</a>
	<?php
	include ('koneksidbs.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' and password='$password'");
	$row = mysqli_fetch_assoc($sql);
	//echo $row['username'];
	if (!isset($row['username'])) {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
		?>
		<a href="login.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
		<?php
    } 
	//$data = mysqli_query($koneksi,"select * from users where nik='$id'");
	//echo $id;
	
	
	?>
	<h3>EDIT DATA USER</h3>
	<form method="post" action="edit_useraksi.php">
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
				<div class="form-group">  
                  <label>Id :</label>
				  <input type="number" name="id1" disable value="<?php echo $row['id']; ?>">
                </div>
				<div>  
                  <label>Nama</label>
				   <input type="text" name="nama" value="<?php echo $row['nama']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>  
                  <label>Kelurahan</label>
				   <input type="text" name="kel" value="<?php echo $row['kel']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>  
                  <label>User Name</label>
				   <input type="text" name="username" value="<?php echo $row['username']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>  
                  <label>Email</label>
				   <input type="text" name="email" value="<?php echo $row['email']; ?>" onkeyup="this.value = this.value.toUpperCase()"
				   class="form-control">
                </div>
				<div>
                  <label>NIK</label>
				   <input type="number" name="nik" value="<?php echo $row['nik']; ?>" class="form-control">
                </div>
				<div>
                  <label>Password</label>
				   <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control">
                </div>
				<div>
                  <label>Konfirmasi Password</label>
				   <input type="password" name="cpassword" value="<?php //echo $row['password']; ?>" class="form-control">
                </div>
				</div>
				
				 </div>
				 </div>
		<button type="submit" class="btn btn-success">Simpan</button>
	   
	</form>
	
		</div>
          </div>
      </div>
    </div>
 </div
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</body>

</html>