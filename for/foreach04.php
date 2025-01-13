<?php
$siswa= [
    "siswa1" =>[
        "nama" => "Sulas Teri",
        "kelas" => 12
    ],
    "siswa2" =>[
        "nama" => "Sulas Teri",
        "kelas" => 11
    ]
    ]; 
foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach ($santri as $data => $isi){ 
        echo ucwords($data)." : ". $isi . PHP_EOL;
    
    }
}
?>
