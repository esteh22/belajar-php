<?php
session_start();
$_SESSION["username"] = "Agus Cekbew";
$_SESSION["password"] = "akualip01";

echo "Berhasil membuat session";
echo "<br>";

echo "<a href = cek_session.php>
Cek Session</a>";
?>