<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form

$nama = $_POST['nama_k'];
$nik=$_POST['nik'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$kom= $_POST['komplain'];



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
	  echo $nik;
echo $nama;
echo $email;
echo $tlp;
echo $kom;

	  	 //mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
		 $query2 = "insert into komplain values('','$nik','$nama','$email','$tlp','$kom')";
			
		
	  if ($koneksi->query($query2)===true) {
		# code...
   
		echo "data Komplain berhasil disimpan & ";
		echo "Jumlah record berhasil ditambahkan.....  ";
  }else{
	  
		echo "data Komplain gagal disimpan";
		}  
}
}

?>
<br/>
<a href="komplain.php?nik=<?php echo $nik ?>">Kembali</a>