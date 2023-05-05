<?php
session_start();
$nik=$_GET['nik'];
$_session['nik']=$nik;
?>
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
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>Data Konsumen (ADM)</title>
</head>
<body>
 
	<?php 
                      include('koneksidbs.php');
                      $no = 1;
					  $nik2=$_GET['nik'];
					
                      $query2 = mysqli_query($koneksi,"SELECT * FROM users where nik='$nik2'");
                      $qs2=mysqli_fetch_array($query2);
					 
                  ?>
				  <a id='konsumen' href="konsumenkel.php?id=<?php echo $qs2['nik'] ?>" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
<div class="container" style="margin: 10px 10px" >
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
	DATA KONSUMEN <?php echo $qs2['kel'];?> (ADM)
	 </div>
            <div class="card-body">	
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
					  $kel=$qs2['kel'];
                      $query = mysqli_query($koneksi,"SELECT * FROM konsumen where kel='$kel'");
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
					  
                        
						
                      </td>
                  </tr
				   <?php } ?>
                </tbody>
              </table>
			  <script>
			  window.print();
			  </script>
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