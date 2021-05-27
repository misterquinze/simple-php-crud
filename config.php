<?php   
$server = "localhost";
$user =  "root";
$password =  "";
$db_name = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $db_name);

if (!$db) {
    die("failed to connect database: " . mysqli_connect_error());
}
?>
