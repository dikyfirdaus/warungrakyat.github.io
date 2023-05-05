<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form
$np=$_POST['no_pesan'];
$tgl = $_POST['tanggal'];
$nik=$_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$barang= $_POST['barang'];
$merk=$_POST['merk'];
$volume =$_POST['volume'];
$ket=$_POST['ket'];
echo $np;
echo $tgl;
echo $nik;
echo $nama;
echo $alamat;
echo $barang;
echo $merk;
echo $volume;
$ket="BELUM";
echo $ket;

if(empty($nik))
{
  
   die("Maaf, anda harus mengisi NIK");
}
else
{
   
   
	  
	  	 //mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
		 $query = "insert into pesanan values('','$np','$tgl','$nik','$nama','$alamat','$barang','$merk','$volume','$ket') ";
			
		
	  if ($koneksi->query($query)===true) {
		# code...
   
		echo "data Pesanan berhasil disimpan & ";
		echo "Jumlah record berhasil ditambahkan.....  ";
  }else{
	  
		echo "data Pesanan gagal disimpan";
		}  
}


?>

<br/>
<a href="pesanan.php">KEMBALI</a>
