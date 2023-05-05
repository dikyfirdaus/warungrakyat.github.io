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
<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form
$nik=$_POST['nik'];
$tgl=date('y-m-d');
$kode = $_POST['kode_brg1'];
$nama = $_POST['nama_brg1'];
$merk=$_POST['merk'];
$jml= $_POST['jml'];
$hrg = $_POST['hrg_satuan1'];
$tot=0;
echo $tgl;
echo $nik;
echo $kode;
echo $nama;
echo $merk;
echo $jml;
echo $hrg;
if(empty($kode)){
     die("Maaf, anda harus mengisi data barang terlebih dahulu");
}else {
		$pj = mysqli_query($koneksi,"select * from penjualan1 where nik='$nik' and kode_brg='$kode'");
		$r=mysqli_fetch_array($pj);
		echo $r['kode_brg'];
		//die();
		if (!isset($r['kode_brg'])){
			echo " Barang belum ada ";
			$qs= "insert INTO penjualan1 values('','$nik','$tgl','$kode','$nama','$merk','$jml','$hrg','$tot')";
		if ($koneksi->query($qs) === TRUE) {
			echo "Record berhasil di simpan....  ";
			
			
		} 		else {
			echo "Error update record: " . $koneksi->error;
		}
		}else {
			if ($pj){
		echo ("&nbspBarang sudah ditawarkan. Silahkan coba lagi!");
		//header("Location: konsumen.php");
		}
		}
		//die();
//include 'koneksidbs.php';
//$qq = mysqli_query($koneksi,"insert INTO penjualan1 values('','$nik','$tgl','$kode','$nama','$jml','$hrg','$tot')");
		
}

	  	   
	   
			

?>
<a href="konsumen.php">KEMBALI</a>
