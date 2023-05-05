<html>
<head>
    <title>Generate QR Code dengan PHP</title>
</head>
<body>
    <h3>Membuat QR Code</h3>
    <?php
        include "phpqrcode/qrlib.php";    // Ini adalah letak pemyimpanan plugin qrcode

        $qrdir = "qrcode-img/";        // Nama folder untuk pemyimpanan file qrcode
        
        if (!file_exists($qrdir))        //jika folder belum ada, maka buat
        mkdir($qrdir);
        
        // berikut adalah parameter qr code
        $teks_qrcode    ="Membuat QR Code dengan PHP";
        $namafile        ="qrcode-1.png";
        $quality        ="H"; // ini ada 4 pilihan yaitu L (Low), M(Medium), Q(Good), H(High)
        $ukuran            =5; // 1 adalah yang terkecil, 10 paling besar
        $padding        =1;
        
        QRCode::png($teks_qrcode, $qrdir.$namafile, $quality, $ukuran, $padding);
		echo '<img src="'.$qrdir.'qrcode-1.png">';
    ?>
</body>
</html>
