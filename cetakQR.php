<?php

$text = 'Hello this is a string';

$split_words1 = explode(' ', $text );

$count = 0;

foreach($split_words1 as $value){
    $count+= strlen($value);
};

//echo $count, " ";
?>
<br/>
<?php
include 'phpqrcode/qrlib.php';
include 'koneksidbs.php';
	$id = $_GET['id'];
	
	$data = mysqli_query($koneksi,"select * from barang where id=$id");
	$dqr= mysqli_fetch_array($data);
?>
<?php echo $dqr['id']," ",$dqr['nama_brg'] ?>	
<?php $qr=[$dqr['id'],$dqr['nama_brg']] ?>
<?php
include 'phpqrcode/qrlib.php';
$isi = 'https://www.malasngoding.com';
QRcode::png($isi);
?> 