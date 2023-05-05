<!DOCTYPE html>
<html>

<html lang="en">
<body>
 <div class="container" style="margin: 10px 10px" >
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
			<?php 
                      include('koneksidbs.php');
                      $no = 1;
					  
					
                      $query2 = mysqli_query($koneksi,"SELECT * FROM users");
                      $qs2=mysqli_fetch_array($query2);
					 
                  ?>
				  
				  <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Konsumen.xls");
	?>
				  <br/>
	DATA KONSUMEN (ADM)
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
                      
                  </tr
				  
				   <?php } ?>
				   
                </tbody>
              </table>
			  </DIV>
  </body>          
</html>