<?php
session_start();
$numbers = range(0, 9);

$sorted=implode(" ",$numbers);
shuffle($numbers);

$ans=array();
$x = 0;

while (true) {
    array_push($ans, $x);
    $x = $numbers[$x];
    if ($x == 0)
    break;
}

$code=implode("",$ans);

$shuffled=implode(" ",$numbers);
$_SESSION["code"]=$code;
$image = imagecreatetruecolor(500, 45);
$bg = imagecolorallocate($image, 85, 93, 97);
$fg = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bg);
imagestring($image, 5, 165, 5,  $sorted, $fg);
imagestring($image, 5, 165, 25,  $shuffled, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>