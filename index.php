<?php
//library phpqrcode
include "../lib/phpqrcode/qrlib.php";

//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "../temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="../../dk.png">
    <title>QRCode Generator</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <?php
    //Isi dari QRCode Saat discan
    $latitude = '-6.21462';
    $longitude = '106.84513';
     
    $isi_teks = "geo:".$latitude.','.$longitude;
    //Nama file yang akan disimpan pada folder temp 
    $namafile = "dewan-komputer9.png";
    //Kualitas dari QRCode 
    $quality = 'L'; 
    //Ukuran besar QRCode
    $ukuran = 8; 
    $padding = 0; 
    QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);
  ?>
  <div align="center" style="margin-top: 50px;">
    <h2>Cara Membuat QRCode Generator Geografis Menggunakan PHP </h2>
    <img src="../temp/<?php echo $namafile; ?>" style="margin: 50px; width: 250px;">
    <p>www.dewankomputer.com</p>
    <br/><br/>
    <a href="http://vivads.net/Ekteh5Q3" target="_blank">
        <button class="download">Download Source Code</button>
    </a>
    <a href="https://dewankomputer.com/2019/01/15/cara-membuat-qrcode-generator-menggunakan-php-part-9-qrcode-geografis/"><p><< Kembali ke Tutorial</p></a>
  </div>
</body>
</html>