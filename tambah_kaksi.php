<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form

$nama = $_POST['nama_k'];
$nik=$_POST['nik'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$alamat= $_POST['alamat'];
$prov=$_POST['prov'];
$kab =$_POST['kab'];
$kec =$_POST['kec'];
$kel =$_POST['kel'];
$rw =$_POST['rw'];
$rt =$_POST['rt'];

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
	  
	  	 //mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
		 $query1 = "insert into konsumen values('$nama','$nik','$tlp','$email','$alamat','$rt','$rw','$kel','$kec','$kab','$prov')";
			
		
	  if ($koneksi->query($query1)===true) {
		# code...
   
		echo "data Konsumen berhasil disimpan & ";
		echo "Jumlah record berhasil ditambahkan.....  ";
  }else{
	  
		echo "data Konsumen gagal disimpan";
		}  
}
}

?>
<br/>
<a href="konsumen.php">LIHAT KONSUMEN</a>