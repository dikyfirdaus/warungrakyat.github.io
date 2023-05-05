<?php  
// koneksi database
include 'koneksidbs.php';
 
// menangkap data yang di kirim dari form


    

//$tgl = $_POST['tgl_beli'];


$nik = $_GET['nik'];
$uang = $_GET['uang'];
$tgl= $_GET['tgl'];

$tot=$uang;

if(empty($uang))
{
  
   die("Maaf, anda harus mengisi Jumlah Uang");
}
else
{
   $qr4=mysqli_query($koneksi,"select * FROM sisauang where nik='$nik'");
   //$qr3="select * FROM sisauang where nik='$nik'";
	   $row=mysqli_fetch_array($qr4);
	  // echo $row['nik'];
	   
   if (empty($row['nik']))
	{
		
		echo ("Uang Anggota belum ada .....!");
		//$query1 = "insert into uang_anggota values('$nik','$uang','$tgl')";
		$qr=mysqli_query($koneksi,"insert into uang_anggota (id,nik,uang,tgl) values('','$nik','$uang','$tgl')");
		$su=mysqli_query($koneksi,"insert into sisauang values('','$nik','$uang')");
		//$qq=mysqli_query($koneksi,"select *from uang_anggota");
		//$row=mysqli_fetch_array($qq);
		//while ($qq){
		echo $nik;
		
		
		if ($su) {
		# code...
   
		echo "&nbspBiaya transaski anggota berhasil disimpan & ";
		echo "Jumlah record berhasil ditambahkan di Tabel Sisa Uang Anggota.....  ";
		}else{
	  
		echo " &nbspTransaksi gagal disimpan di Tabel Uang Anggota";
		} 
   } else {

   
	   	   
		   mysqli_query($koneksi,"insert INTO uang_anggota values('','$nik','$uang','$tgl')");
		   //echo "Uang  akan ditambahkan  pada Saldo Akhir .....  ";
	  	   //$qr2 = mysqli_query($koneksi,"select * FROM sisauang where nik='$nik'");
		   //$row2 = mysqli_fetch_array($qr2);
		   //$row2['uang']=0;
			//$jp=$jml+$row2['uang'];
			//"UPDATE persediaan SET kode_brg='$kode', nama_brg = '$nama', merk='$merk',jml='$jp', hrg_satuan='$hrg' WHERE kode_brg = '$kode'";
			//$query1=mysqli_query($koneksi,"insert into barang values('','$kode','$nama','$hrg','$jml','$tot' )");
	   
			
			
			//$query1=mysqli_query($koneksi,"insert into barang values('','$kode','$nama','$hrg','$jml','$tot' )");
	   	   $qr=mysqli_query($koneksi,"select * FROM sisauang where nik='$nik'");
			$row = mysqli_fetch_array($qr);	
				$jp=$uang+$row['uang'];
				echo $jp;
			$sql="UPDATE sisauang SET nik='$nik', uang = '$jp' WHERE nik = '$nik'";
	  if ($koneksi->query($sql) === TRUE) {
		  
			echo "Saldo update successfully in Tabel Sisa Uang....  ";
		} else {
	
			echo "Error update record: " . $koneksi->error;
				}
    
   
	  	 //mysqli_query($koneksi,"update into persediaan values('','$kode','$nama','$jp' where kode_brg='$kode')");
		  
   }

   }
?>
<br/>
<a href="konsumen.php">KEMBALI</a>