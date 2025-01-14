<?php
session_start();
$_SESSION ['username'] = $_POST['username'];
$_SESSION ['password'] = $_POST['password'];

$user = $_SESSION['username'];
$user = $_SESSION['password'];

if($user == "alip" and $pass = "akualip"){
echo "Anda berhasil login";
echo "<br>";
echo "username : ". $user;
echo"<br>";
echo "password : ". $pass;
echo "<br>";

echo "<a href = 'logout.php'>logout</a>";

}else{
    echo" username kr Passwordmu ilegal, gantinen sek wae..";
    echo"<meta http-equiv='refresh' content='2; url=index.php'>";
}

?>