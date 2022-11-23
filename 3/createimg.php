<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  
  // üres képkeret létrehozása
  $image = imagecreate(500, 300); 
    
  // sokszög csúcsainak beállítása
  $values = array( 
              50,  50,  // Point 1 (x, y) 
              50, 250,  // Point 2 (x, y) 
              250, 50,  // Point 3 (x, y) 
              250,  250 // Point 3 (x, y) 
          ); 
  // háttérszín kiválasztása
  $background_color = imagecolorallocate($image,  0, 153, 0); 
       
  // háttér kitöltése a választott színnel
  imagefill($image, 0, 0, $background_color); 
     
  // színkijelülés a poligon számára
  $image_color = imagecolorallocate($image, 255, 255, 255); 
       
  //  polygon 
  imagepolygon($image, $values, 4, $image_color); 
       
  // kimenet
  header('Content-type: image/png'); 
       
  imagepng($image); 
  ?> 
</body>
</html>
