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
 <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>PENAWARAN BARANG</title>
</head>
<body>
 <div class="container" style="margin: 10px">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
	PENAWARAN BARANG (K1)
	 </div>
            <div class="card-body">
	
	
	<?php 
	include 'koneksidbs.php';
	$nik1 = $_GET['nik'];
	 $j2           = mysqli_query($koneksi,"select * from konsumen where konsumen.nik = '$nik1'");
	 $d3 =  mysqli_fetch_array($j2);
	 $su=mysqli_query($koneksi,"select *from sisauang where nik='$nik1'");
	 $su2=mysqli_fetch_array($su);
	 ?>
	
	<form method="GET" action="biodata_k1.php" id="konsumen">
	
	<a id="konsumen" href="kembali.php?id=<?php echo $d3['nik'];?>" class="btn btn-md btn-danger" style="margin-bottom: 10px">TIDAK JADI BELI</a>
	<div class="card-body">
                  <div class="row">
	<div class="col-md-6">
		  <div class="form-group ">
				<div>
                  <label> NIK :</label>
				   <input type="text" name="nik" value=<?php echo $d3['nik'];?> readonly class="form-control">
															  				
                </div>
				<label> Nama :</label>
				   <?php echo $d3['nama_k'];?> 						  				
                
				<label> ------Saldo :</label>
				   <?php echo $su2['uang'];?> 						  				
                </div>
				</div>
				</div>
				<button type="submit" class="btn btn-success">Bio Data</button>
				
	</form>
	
	<table class="table table-bordered" id="barang">
                <thead>
				<tr>
                    <th scope="col">NO.</th>             
				</tr>
                </thead>
				<tbody>
                  <?php 
                      include 'koneksidbs.php';
	$nik1 = $_GET['nik'];
	function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
	 //"SELECT nama_matkul,jumlah_SKS,nama_dosen FROM mata_kuliah INNER JOIN daftar_dosen ON NIP_dosen=NIP;
	$join           = mysqli_query($koneksi,"select * from konsumen where konsumen.nik = '$nik1'");
	$no=1;
	//$select         = mysqli_query($koneksi, $join);
	$data = mysqli_query($koneksi,"select * FROM penjualan1 where nik='$nik1'");
	$d2 =  mysqli_fetch_array($join);
	while($d = mysqli_fetch_array($data)){
                  ?>
				 <tr>
				  <tr>
                      <td><?php echo $no++ ?></td>
				  </tr>
				  <tr>
					  <td><?php echo date("d-m-y h:i") ?></td>
				  </tr>
				  <tr>
					  <td><?php echo $d['nama_j'] ?></td>
				  </tr>
				  <tr>
					  <td><?php echo $d['merk_j'] ?></td>
				  </tr>
				  <tr>
					  <td><?php echo rupiah($d['hrg_j']) ?></td>
				  </tr>
				  <tr>
					 			 
                      <td>
                        
                        <a href="jual_aksi.php?id=<?php echo $d['id'] ?>" class="btn btn-sm btn-danger">BELI</a>
						
                      </td>
				   </tr>
                  </tr>
				   <?php } ?>
                </tbody>
              </table>
	
	
	
                  
	   
	
                      </td>
                  </tr>
				    
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