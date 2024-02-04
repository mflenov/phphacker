<?
session_start();
header("Content-type: image/png"); 
$img = imagecreatetruecolor(130,24) or die('Cannot create image');  

imagefill($img, 0, 0, 0xFFFFFF);

$x=0;
$i=1;
$sum = "";
while ($i++ <= 5) {
 imagettftext($img, rand(14,18), rand(-12,12), $x=$x+20,  15+rand(0,5), imagecolorallocate($img,rand(0,$i*25),rand(0,$i*25),rand(0,$i*25)), "arial.ttf", $rnd=rand(0,9)); 
 $sum = $sum.(string)$rnd;
 imageline($img, 0, rand(0,24), 130, rand(0,40), $DDDDDD);
}
$_SESSION[secret_number] = $sum;

imagepng($img);
imagedestroy($img);
?>