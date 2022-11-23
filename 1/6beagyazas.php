<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A PHP-beágyazások tesztelése</title>
</head>
<body>
<header>
    <h1>Az include() függvény</h1>
    <p>Az include egyszerűen csak fogja az adott fájlt és lefuttatja annak a tartalmát. 
        Persze csak ha a fájl létezik. 
        Mert ha nem, akkor jön az E_WARNING szintű hibaüzenet. 
        Majd a program folytatódik. 
        Azaz: Ez nem jött össze, de azért próbálkozom a program további részével, ami 
        a program futása szempontjából esetenként nem túl szerencsésen sülhet el. 
    Ha ezt el akarod kerülni, akkor használd a require() függvényt, ez esetben ha nem találja
a megadott fájlt, akkor a figyelemztetés helyett leáll a program működése.</p>
<?php echo "<hr>\n Ezt a php-ből olvassuk be:"?>
<?php include("beagyazas.php"); ?>
<?php echo "<hr>\n Ezt a txt-ből olvassuk be"?>
<?php include("beagyazas.txt"); ?>
<?php echo "<hr>\n Ezt a html-ből olvassuk be"?>
<?php include("beagyazas.html"); ?>
<?php echo "<hr>"?>

</body>
</html>
