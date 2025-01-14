<?php
function sapa ($nama){
    echo "Selamat pagi $nama".PHP_EOL;
}

echo "masukan nama : ";
$Nama = trim(fgets(STDIN));

sapa("nama");

?>