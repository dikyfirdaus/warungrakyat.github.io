<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form


    $bil1=null;
    $bil2=null;
	$bil1=$_POST['hrg_satuan1'];
    $bil2=$_POST['jml_belanja1'];
    $hasil=0;
	$hasil = $bil1*$bil2;

//$tgl = $_POST['tgl_beli'];


$kode = $_POST['kode_brg1'];
$nama = $_POST['nama_brg1'];
$merk= $_POST['merk'];
$hrg = $_POST['hrg_satuan1'];
$jml= $_POST['jml_belanja1'];
$tglb=$_POST['tanggal1'];
$tot=$hasil;

if(empty($nama))
{
  
   die("Maaf, anda harus mengisi nama");
}
else
{
   if (is_numeric($nama))
   {
      die("Maaf, nama harus berupa huruf");
   }
   else
   {
	   $qr3=mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
	   $row=mysqli_fetch_array($qr3);
	   


	 
	   if (!isset($row['kode_brg']))
	   {
		   
		   echo "Item barang belum ada di persediaan...  ";
		   mysqli_query($koneksi,"insert INTO persediaan values('','$kode','$nama','$merk','$jml', '$hrg')");
		   echo "Item  akan ditambahkan  pada persediaan .....  ";
	  	   $qr2 = mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
		   $row2 = mysqli_fetch_array($qr2);
		   $row2['jml']=0;
			$jp=$jml+$row2['jml'];
			"UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', merk='$merk',jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
			//$query1=mysqli_query($koneksi,"insert into barang values('','$kode','$nama','$hrg','$jml','$tot' )");
	   }
			else
			{
			//$query1=mysqli_query($koneksi,"insert into barang values('','$kode','$nama','$hrg','$jml','$tot' )");
	   	   $qr=mysqli_query($koneksi,"select * FROM persediaan where kode_brg='$kode'");
			$row = mysqli_fetch_array($qr);	
				$jp=$jml+$row['jml'];
			$sql="UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', merk='$merk',jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
	  if ($koneksi->query($sql) === TRUE) {
		  
			echo "Persediaan barang update successfully....  ";
		} else {
	
			echo "Error update record: " . $koneksi->error;
				}
   } 
   }
	  	 //mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
		 $query1 = "insert into barang values('','$kode','$nama','$merk','$hrg','$jml','$tot','$tglb')";
			
		
	  if ($koneksi->query($query1)===true) {
		# code...
   
		echo "data barang berhasil disimpan & ";
		echo "Jumlah record berhasil ditambahkan.....  ";
  }else{
	  
		echo "data barang gagal disimpan";
		}  
}


?>
<br/>
<a href="p_brg.php">KEMBALI</a>