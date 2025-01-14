<?php
$file = fopen("halo .txt","w");

$teks = "Halo \n";
fwrite($file,$teks);

$teks = "saya sedang belajar PHP.";
fwrite($file,$teks);

fclose($close);
?>