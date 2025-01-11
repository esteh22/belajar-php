<?php
$siswa = [
    "nama" => "Deen a Salam",
    "kelas" => 11,
    "jurusan" => "PPLG",
    "alamat" => [
        "desa" => "Rejosari",
        "kec" => "Kebonsari",
        "kab" => "Madiun"
    ]
];
echo $siswa["nama"].PHP_EOL;
echo $siswa["kelas"].PHP_EOL;
echo $siswa["alamat"]["desa"].PHP_EOL;
echo $siswa["alamat"]["kec"].PHP_EOL;
echo $siswa["alamat"]["kab"].PHP_EOL;


?>