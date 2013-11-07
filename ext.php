<?php 
$url = $_GET['url'];
$txt = "$url.txt";
$fh = fopen('clicks.txt', 'a') or die("can't open file");
$stringData = "$url";
fwrite($fh, "\n $stringData");
fclose($fh);

header("Location: $url");
exit;
?>

