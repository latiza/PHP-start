<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Alapvetően két módja van a képek manipulációjának: meglévő kép betöltése fájlból, vagy új kép létrehozása.</p>
<!--ahhoz, hogy a képet betöltse, a php.iniben aktiválni kell a gd extensiont
vedd ki előle a pontosvessző jelét és indítsd újra az apache-ot-->
    <?php

$pic = imagecreatetruecolor(400,250); 
$háttér= imagecolorallocate($pic,215,245,255);
$before= imagecolorallocate($pic,250,50,20);
imagestring($pic,5,20,5,"Teszt",$before);
imagestring($pic,40,25,25,"picture",$before);
imagejpeg($pic,"kepem.jpg");
imagedestroy($pic);
?>
<img src="kepem.jpg" alt="">

</body>
</html>
