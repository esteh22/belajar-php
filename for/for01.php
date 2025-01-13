<?php

echo "masukan nilai awal : ";
$awal = trim(fgets(STDIN));

echo "Masukan nilai akhir : ";
$akhir = trim(fgets(STDIN));

for($awal; $awal<= $akhir; $awal++){
    echo "Antrian ke-$awal \n";
}
?>