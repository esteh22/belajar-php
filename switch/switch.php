<?php
echo "Masukan kode mu, satset : ";
$kode = trim(fgets(STDIN));
switch($kode){
    case 1:
        echo "Selamat datang Admin";
        break;
    case 2:
        echo "Selamat datang User";
        break;
    case 3:
        echo "Selamat datang Tamu";
        break;
   default:
        echo "Maaf, pikiran anda terlalu gelap..!";
        break;
}
?>