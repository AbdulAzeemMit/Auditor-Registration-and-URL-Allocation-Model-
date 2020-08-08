<?php

session_start();

$str=md5(microtime());
$str=substr($str,0,4);
$_SESSION['cap_code']=$str;


$img=imagecreate(50,23);
imagecolorallocate($img,192,192,192);
$txtcol=imagecolorallocate($img,0,0,0);

imagestring($img,20,5,5,$str,$txtcol);
header('content:image/jpeg');
imagejpeg($img);
?>