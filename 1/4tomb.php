<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tömbök és zárójelek</title>
</head>
<body>
    <h1>Tömb definiálása</h1>
    <h5>numerikus</h5>
    <?php 
    $pontszamaim=array(100,120,115);
    $baratok=array("Tomi","Lucy","Luci");
   $vernyomasom=[110,120,115];//php 5.4-től
    ?>
    <h5>asszociatív</h5>
    <?php 
    $favorite=array("gyümölcs1" =>"sárkánygyümölcs",
    "gyümölcs2" =>"alma",
    "zöldség"=>"saláta");
    $favorite["gyümölcs2"];
    echo "A kedvenc gyümölcsöm: {$favorite['gyümölcs2']}\n";
    ?>
</body>
</html>
